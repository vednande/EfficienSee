<link rel="stylesheet" href="assets/css/signup.css">
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
									<label>User Name</label> 
									<input class="form-control" name="username" required type="text">
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
								<!-- <?php if($wrongpassword){echo $wrongpassword;}?> --> 
								
								<div class="form-group text-center">
									<button class="btn btn-primary account-btn" name="login" type="submit">sign up</button>
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
<!-- <?php
// Include config file
require_once "includes/config.php";
 
// Define variables and initialize with empty values
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } elseif(!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["username"]))){
        $username_err = "Username can only contain letters, numbers, and underscores.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE UserName = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
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
        $sql = "INSERT INTO users (UserName, Password) VALUES (?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);
            
            // Set parameters
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: login.php");
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($link);
}
?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="assets/css/signup.css">

	<title>SIGN UP</title>
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
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"  method="POST" enctype="multipart/form-data">
								<div class="form-group">
									<label>User Name</label> 
									<input class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" name="username" required type="text">
								</div>
								<div class="form-group">
									<label>Enter Your First Name</label> 
									<input class="form-control"  name="FirstName" required type="text">
								</div>
								<div class="form-group">
									<label>Enter Your Last Name</label> 
									<input class="form-control"   name="LastName" required type="text">
								</div>
								<div class="form-group">
									<label>Email</label> 
									<input class="form-control"   name="Email" required type="text">
								</div>
								<div class="form-group">
									<label>Phone</label> 
									<input class="form-control"  name="Phone" required type="text">
								</div>
								<div class="form-group">
									<label>Address</label> 
									<input class="form-control"   name="Address" required type="text">
								</div>
								<!-- <?php if($wrongusername){echo $wrongusername;}?> -->
								<div class="form-group">
									<div class="row">
										<div class="col">
											<label style="margin-bottom: 5px; ">Password</label>
										</div>
									</div>
									<input class="form-control"  <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>  name="password" required type="password">
								</div>
								<!-- <?php if($wrongpassword){echo $wrongpassword;}?> --> 
								<div class="form-group">
									<div class="row">
										<div class="col">
											<label style="margin-bottom: 5px; ">Confirm Password</label>
										</div>
									</div>
									<input class="form-control"  <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?> name="confirm_password" required type="password">
								</div>
								<div class="form-group text-center">
									<button class="btn btn-primary account-btn" name="signup" type="submit">sign up</button>
										<div class="col-auto pt-2 forgot-password">
											<a class="text-muted float-right"  href="login.php">
												Already Have an account ? Login Here
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

	
 </body>
 </html>
 -->
