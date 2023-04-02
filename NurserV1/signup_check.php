<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['firstname']) && isset($_POST['lastname'])
    && isset($_POST['OwnerEmail']) && isset($_POST['N_Name'])
    && isset($_POST['N_Phone']) && isset($_POST['N_Email']) && isset($_POST['N_City'])
    && isset($_POST['N_Address']) && isset($_POST['N_Description']) && isset($_POST['N_Password']) )
    {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$firstname = validate($_POST['firstname']);
	$lastname = validate($_POST['lastname']);
	$OwnerEmail = validate($_POST['OwnerEmail']);
	$N_Name = validate($_POST['N_Name']);
    $N_Phone = validate($_POST['N_Phone']);
    $N_Email = validate($_POST['N_Email']);
    $N_City= validate($_POST['N_City']);
    $N_Address = validate($_POST['N_Address']);
    $N_Description = validate($_POST['N_Description']);
    $N_Password = validate($_POST['N_Password']);
	$user_data = 'fname='. $firstname . 'lname='. $lastname;
    $OwnerPhone="";

	if (empty($firstname ) || empty($lastname)) {
		header("Location: signup.php?error=User Name is required&$user_data");
	    exit();
	}else if(empty($N_Password)){
        header("Location: signup.php?error=Password is required&$user_data");
	    exit();
	}

	else if(empty($N_Name)){
        header("Location: signup.php?error=Nursery Name is required&$user_data");
	    exit();
	}
    else if(empty($N_Email)){
        header("Location: signup.php?error=Nursery Email is required&$user_data");
	    exit();
	}


	else{

		// hashing the password
        $N_Password = md5($N_Password);

	    $sql = "SELECT * FROM owner WHERE N_Email='$N_Email' ";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			header("Location: ?error=This email is already registred &$user_data");
	        exit();
		}else {
           $sql2 = "INSERT INTO owner (FirstName,LastName,OwnerEmail,OwnerPhone,N_Name,N_Phone,N_Email, N_City,N_Address,N_Description,N_Password)
           VALUES ('$firstname','$lastname','$OwnerEmail','$OwnerPhone','$N_Name','$N_Phone','$N_Email','$N_City','$N_Address','$N_Description','$N_Password')";
   
           $result2 = mysqli_query($conn, $sql2);
           if ($result2) {
           	 header("Location: home.php?success=Your account has been created successfully");
	         exit();
           }else {
	           	header("Location: signup.php?error=unknown error occurred&$user_data");
		        exit();
           }
		}
	}
	
}else{
	header("Location: signup.php");
	exit();
}