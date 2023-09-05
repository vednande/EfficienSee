<?php
require_once "includes/config.php";
 
// Define variables and initialize with empty values
$username=$firstname=$lastname=$address = $password = $confirm_password =$phonenumber=$email= "";
$username_err = $password_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
	   
	$firstname = trim($_POST["firstname"]);
	$lastname = trim($_POST["lastname"]);
	$email = trim($_POST["email"]);
	$address = trim($_POST["address"]);
	$phonenumber = trim($_POST["phonenumber"]);

 
    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } elseif(!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["username"]))){
        $username_err = "Username can only contain letters, numbers, and underscores.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE UserName = ?";
        
        if($stmt = $mysqli->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // store result
                $stmt->store_result();
                
                if($stmt->num_rows == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            $stmt->close();
        }
    }
    
    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
    
    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO users (FirstName,LastName,UserName,Email, Password,Phone,Address) VALUES (?, ?,?,?,?,?,?)";
         
        if($stmt = $mysqli->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("ss", $param_username, $param_password,$param_lastname,$param_firstname,$param_email,$param_phone,$param_address);
            
            // Set parameters
			$param_firstname = $firstname;
			$param_lastname = $lastname;
			$param_email = $email;
			$param_address = $address;
			$param_phone = $phonenumber;
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // Redirect to login page
                header("location: login.php");
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            $stmt->close();
        }
    }
    
    // Close connection
    $mysqli->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="assets/css/signup.css">

	<title>Document</title>
</head>
<body>
<div class="signup">
    <div class="container">
        <div class="left">
            <a href="/project/efficiensee/index.php"><img src="https://alliancex.org/shield/wp-content/uploads/2021/01/register-scaled.jpg" alt="image"></a>
        </div> 
        <div class="right"> 
            <div class="signup">
                <div class="heading">  
                    <h1>sign up</h1>
                    <form method="POST" enctype="multipart/form-data">
								<div class="form-group">
									<label>First Name</label> 
									<input class="form-control" name="firstname" required type="text">
								</div>
								<div class="form-group">
									<label>Last Name</label> 
									<input class="form-control" name="lastname" required type="text">
								</div>
								<div class="form-group">
									<label>User Name</label> 
									<input class="form-control" name="username" required type="text">
								</div>
								<div class="form-group">
									<label>Email</label> 
									<input class="form-control" name="email" required type="text">
								</div>
								<!-- <?php if($wrongusername){echo $wrongusername;}?> -->
								<div class="form-group">
									<div class="row">
										<div class="col">
											<label style="margin-bottom: 5px; ">Password</label>
										</div>
									</div>
									<input class="form-control" name="password" required type="password">
								</div>
								<div class="form-group">
									<label>Phone Number</label> 
									<input class="form-control" type="number" name="phonenumber" id="phonenumber" >
									<!-- <input class="form-control" name="phonenumber" required type="ph"> -->
								</div>
								<div class="form-group">
									<label>Address</label> 
									<input class="form-control" type="text" name="address" id="address" required>
								</div>
								<div class="form-group">
									<div class="row">
										<div class="col">
											<label style="margin-bottom: 5px; ">Confirm Password</label>
										</div>
									</div>
									<input class="form-control" name="confirm password" required type="password">
								
								<!-- <div class="form-group">
									<label>Upload Photo</label> 
									<input type="file" accept="image/*" class="form-control input-file" name="photo" id="photo" style="height: auto; width: fit-content; background-color: transparent; border: 1px solid transparent;">
<<<<<<< HEAD
								</div> -->
=======
								</div>
								<div class="form-group" id="select-role"> 
									<p>Please select your role</p>
									<div class="hr" id="hr">
										<input type="radio" name="role" id="hr">
										<label for="hr">HR</label>
									</div>
									<div class="employee" id="employee">
										<input type="radio" name="role" id="employee">
										<label for="employee" style="text-transform: uppercase;">Employee</label>
									</div>
  									
								</div>
>>>>>>> be627881acfc828b7a467a9a30f9f720df5e3d16
								<!-- <?php if($wrongpassword){echo $wrongpassword;}?> --> 
								
								<div class="form-group text-center">
									<button class="btn btn-primary account-btn" name="signup" type="submit">sign up</button>
										<div class="col-auto pt-2 forgot-password">
											<a class="text-muted float-right"  href="forgot-password.php">
												Forgot password?
											</a>
										</div>
								</div>
									 
								<div class="account-footer">
									<p>Having Trouble? report an issue on github <a target="https://github.com/MusheAbdulHakim/Smarthr---hr-payroll-project-employee-management-System/issues" href="https://github.com/MusheAbdulHakim/Smarthr---hr-payroll-project-employee-management-System/issues">Github issues</a></p>
								</div>
							</form>
                </div>
            </div>
        </div>
    </div>
</div>
<<<<<<< HEAD
	
</body>
</html>
=======
<script src="/project/efficiensee/includes/signup.js"></script>
>>>>>>> be627881acfc828b7a467a9a30f9f720df5e3d16
