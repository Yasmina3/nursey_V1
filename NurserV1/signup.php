
<?php 
include('db_conn.php');

 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Registration Form</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="style/montserrat-font.css"/>
	<link rel="stylesheet" type="text/css" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css"/>
	<!-- Main Style Css -->
    <link rel="stylesheet" href="style/R-style.css"/>
</head>
<body class="form-v10">

	<div class="page-content">
		<div class="form-v10-content">
            <form class="form-detail"  action="signup_check.php" method="post" >
				<div class="form-left">
					<h2>Personal Infomation</h2>
					<div class="form-group">
						<div class="form-row form-row-1">
							<input type="text" 
                            name="firstname" 
                            id="first_name" 
                            class="input-text" 
                            placeholder="First Name" 
                            required >      
				        </div>

						<div class="form-row form-row-2">
							<input type="text"
                             name="lastname" 
                             id="last_name" 
                             class="input-text"
                             placeholder="Last Name" 
                             required>
						</div>
					</div>

					<div class="form-row">
						<input type="text" 
                        name="OwnerEmail" 
                        id="email" 
                        class="input-text"  
                        required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}" 
                        placeholder="Personal email" >
					</div>
					<div class="form-row">
						<input type="text" 
                        name="OwnerPhone" 
                        class="input-text" 
                        id="Phone_Number" 
                        placeholder="Phone Number" 
                        >
					</div>
					
				</div>

				<div class="form-right">
					<h2>Nursery Details</h2>
					<div class="form-row"> 
						<input type="text" 
                        name="N_Name" 
                        class="input-text" 
                        id="Nursery_Name" 
                        placeholder="Nursery Name" 
                        required
                        >
					</div>

					<div class="form-row">
						<input type="text" 
                        name="N_Phone" 
                        class="input-text" 
                        id="N_Phone" 
                        placeholder="Phone Number" 
                        
                        >
					</div>

					    <div class="form-row">
							<input type="text" 
                            name="N_Email" 
                            class="input-text" 
                            id="N_Email"  
                            required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}" 
                            placeholder="Nursery Email" 
                            required
                            >
                            
					    </div>
					<div class="form-group">
						<div class="form-row form-row-1">
							<input type="text" 
                            name="N_City" 
                            class="input-text" 
                            id="N_City" 
                            placeholder="City" 
                            
                            >
						</div>

						<div class="form-row form-row-2">
							<input type="text" 
                            name="N_Address" 
                            class="input-text" 
                            id="Address" 
                            placeholder="Address" 
                            
                            >
						</div>
					</div>
					<div class="form-row">
						<input type="text" 
                        name="N_Description" 
                        id="Nursery_Desc" 
                        class="input-text" 
                        placeholder="Description"
                        
                        >
                    </div>
                        <div class="form-row">
                        <input type="password" 
                        name="N_Password" 
                        id="Password" 
                        class="password" 
                        placeholder="Password" 
                        required
                        >

					</div>
					
					<div class="form-row-last">
						<input type="submit" name="register" class="register" value="Register Now">
						<p> Already have an account <a href="login.php">login</a></p>
					</div>
					
				</div>
			</form>
		</div>
	</div>
</body>
</html>
 