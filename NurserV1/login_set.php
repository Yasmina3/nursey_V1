<?php 
session_start(); 
include "db_conn.php";
if (isset($_POST['uname']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$firstname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	if (empty($firstname)) {
		header("Location: login.php?error=User Name is required");
	    exit();
	}else if(empty($pass)){
        header("Location: login.php?error=Password is required");
	    exit();
	}else{
		// hashing the password
        $pass = md5($pass);
		$sql = "SELECT * FROM owner WHERE FirstName='$firstname' AND N_Password='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['FirstName'] === $firstname ) {
            	$_SESSION['firstname'] = $row['FirstName'];
            	$_SESSION['lastname'] = $row['LastName'];
            	$_SESSION['id'] = $row['id'];
                $_SESSION['N_Name'] = $row['N_Name'];
            	header("Location: home.php");
		        exit();
            }else{
				header("Location: login.php?error=Incorect User name or password");
		        exit();
			}
		}else{
			header("Location: login.php?error=Incorect User name orr password");
	        exit();
		}
	}
	
}else{
	header("Location: login.php");
	exit();
}