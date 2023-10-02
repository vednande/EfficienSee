<<<<<<< HEAD
 <?php 
session_start();
error_reporting(0);
include_once("includes/config.php");

if ($_SESSION['userlogin'] > 0) {
    header('location:user-landing.php'); 
} elseif (isset($_POST['login'])) {
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);
    $option = $_POST['option']; // Get the selected option

    $sql = "SELECT UserName, Password, `Option` FROM users WHERE UserName = :username and Password = :password";
    $query = $dbh->prepare($sql);
    $query->bindParam(':username', $username, PDO::PARAM_STR);
    $query->execute();
    $user = $query->fetch(PDO::FETCH_ASSOC);

    if ($user) {
        if (password_verify($password, $user["Password"])) {
            $_SESSION['userlogin'] = $username;
            $_SESSION['useroption'] = $user["Option"]; // Store the user's option in the session

            // Redirect based on the selected option
            if ($option === "hr" && $user["Option"] === "hr") {
                header("Location: user-landing.php");
                exit;
            } elseif ($option === "employee" && $user["Option"] === "employee") {
                header("Location: user-landing.php");
                exit;
            } else {
                session_unset(); // Clear the session data
                $wrongpassword = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Oh Snap! 😕</strong> Invalid option or password.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>';
            }
        } else {
            session_unset(); // Clear the session data
            $wrongpassword = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Oh Snap! 😕</strong> Invalid password.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>';
        }
    } else {
        session_unset(); // Clear the session data
        $wrongusername = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Oh Snap! 🙃</strong> Invalid username.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>';
    }
}
?> 
<!-- <?php
session_start();
require_once("includes/config.php");
=======
<!-- <link rel="stylesheet" href="assets/css/accountLogo.css">
<?php 
	session_start();
	error_reporting(0);
	include_once("includes/config.php");
	if($_SESSION['userlogin']>0){
		header('location:user-landing.php'); 
	}elseif(isset($_POST['login'])){
		$_SESSION['userlogin'] = $_POST['username'];
		$username = htmlspecialchars($_POST['username']);
		$password = htmlspecialchars($_POST['password']);
		$sql = "SELECT UserName,Password from users where UserName=:username" ;
		$query = $dbh->prepare($sql);
		$query->bindParam(':username',$username,PDO::PARAM_STR);
		$query-> execute();
		$results=$query->fetchAll(PDO::FETCH_OBJ);
		if($query->rowCount() > 0){
			foreach ($results as $row) {
				$hashpass=$row->Password;
			}//verifying Password
			if (password_verify($password, $hashpass)) {
				$_SESSION['userlogin']=$_POST['username'];
				echo "<script>window.location.href= 'index.php'; </script>";
			}
			else {
				$wrongpassword='
				<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>Oh Snapp!😕</strong> Alert <b class="alert-link">Password: </b>You entered wrong password.
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				</div>';
			}
		}
		//if username or email not found in database
		else{
			$wrongusername='
			<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>Oh Snapp!🙃</strong> Alert <b class="alert-link">UserName: </b> You entered a wrong UserName.
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>';
		}
	}
?> -->
<!-- <?php
require_once("includes/config.php"); // Include the database connection file
>>>>>>> 709239da318b4617ce85e07f3943e02e48c0d237

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $option = $_POST["option"];

<<<<<<< HEAD
    // Use prepared statements to prevent SQL injection
    $sql = "SELECT * FROM users WHERE UserName = ? AND Password = ? AND Option = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $username, $password, $option);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        // Login successful, set session variables
        $_SESSION["UserName"] = $username;
        $_SESSION["ption"] = $option;
        // Login successful, redirect to the appropriate page based on the selected option
        if ($option == "hr") {
            header("Location: user-landing.php");
            exit();
        } else {
            header("Location: user-landing.php");
            exit();
        }
    } else {
		// Login failed, display an error message
        echo "Login failed. Please check your username, password, and option.";
    }
    $stmt->close();
}
$conn->close(); 
?>  -->


=======
    // Check if the username, password, and option match a record in the "users" table
    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password' AND option = '$option'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // Login successful, set session variables
        $_SESSION["username"] = $username;
        $_SESSION["option"] = $option;
        // Login successful, redirect to the appropriate page based on the selected option
        if ($option == "hr") {
            header("Location: user-landing.php");
        } else {
            header("Location: user-landing.php");
        }
        exit();
    } else {
        // Login failed, display an error message
        echo "Login failed. Please check your username, password, and option.";
    }
}
$conn->close();
?> -->
<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $option = $_POST["option"]; // Assuming the radio button has the name "option"

    // Replace with your database connection code
    require_once("includes/config.php");

    // Check if the username exists in the database
    $sql = "SELECT * FROM users WHERE UserName = :username";
    $query = $dbh->prepare($sql);
    $query->bindParam(":username", $username, PDO::PARAM_STR);
    $query->execute();
    $user = $query->fetch(PDO::FETCH_ASSOC);

    if ($user) {
        // Verify the password
        if (password_verify($password, $user["Password"])) {
            // Password is correct, store user data in the session
            $_SESSION["user"] = [
                "id" => $user["id"],
                "username" => $user["UserName"],
                "option" => $option // Store the selected option in the session
            ];

            // Redirect based on the selected option
            if ($option === "hr") {
                header("Location: user-landing.php");
                exit;
            } elseif ($option === "employee") {
                header("Location: user-landing.php");
                exit;
            }
        } else {
            $loginError = "Invalid password";
			echo "Login failed. Please check your username, password, and option.";
            session_unset(); // Clear the session data
        }
    } else {
        $loginError = "Username not found";
		echo "Login failed. Please check your username, password, and option.";
        session_unset(); // Clear the session data
    }
}
?>
>>>>>>> 709239da318b4617ce85e07f3943e02e48c0d237
<!DOCTYPE html>
<html lang="en">
		<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
		<meta name="description" content="Smarthr - Bootstrap Admin Template">
		<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
		<meta name="author" content="Dreamguys - Bootstrap Admin Template">
		<meta name="robots" content="noindex, nofollow">
		<link rel = "icon" href = "assets/img/logo.png" type = "image/x-icon">
		<title>Login - HRMS admin</title>
		
		<!-- Favicon -->
		<!-- <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png"> -->
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
		<link rel="stylesheet" href="assets/css/font-awesome.min.css">
		
		<!-- Main CSS -->
		<link rel="stylesheet" href="assets/css/style.css">
		<link rel="stylesheet" href="assets/css/accountLogo.css">
		<link rel="stylesheet" href="assets/css/accountBtn.css">
		<link rel="stylesheet" href="assets/css/accountFooter.css">
		<link rel="stylesheet" href="assets/css/accountImg.css">

	</head>
	<body class="account-page">

	<div class="img">
		<a href="/efficiensee/"><img src="https://etimg.etb2bimg.com/photo/96234639.cms" alt="image"></a>
	</div>
	
		<!-- Main Wrapper -->
		<div class="main-wrapper">
			<div class="account-content">
				<div class="container">
					<!-- Account Logo -->
					<div class="account-logo">
						<a href="index.php"><img src="assets/img/logo-bgremoved.png" alt="Company Logo"></a>
					</div>
					<!-- /Account Logo -->
					
					<div class="account-box">
						<div class="account-wrapper">
							<h3 class="account-title">Admin Login</h3>
							<!-- Account Form -->
<<<<<<< HEAD
							<form method="POST" enctype="multipart/form-data">

=======
							<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
>>>>>>> 709239da318b4617ce85e07f3943e02e48c0d237
							<div class="form-group">
							<label for="option">Select Option:</label>
							<input type="radio" name="option" value="hr" required> HR 
							<input type="radio" name="option" value="employee" required> Employee <br><br>
							</div>

								<div class="form-group">
									<label>User Name</label>
									<input class="form-control" name="username" required type="text">
								</div>
								<!-- <?php if($wrongusername){echo $wrongusername;}?> -->
								<div class="form-group">
									<div class="row">
										<div class="col">
											<label>Password</label>
										</div>
									</div>
									<input class="form-control" name="password" required type="password">
								</div>
								<!-- <?php if($wrongpassword){echo $wrongpassword;}?> -->
								
								<div class="form-group text-center">
									<button class="btn btn-primary account-btn" name="login" type="submit" value="Login">Login</button>
										<div class="col-auto pt-2">
											<a class="text-muted float-right" href="forgot-password.php">
												Forgot password?
											</a>
										</div>
								</div>
									
								<div class="account-footer">
									<p>Having Trouble? report an issue on github <a target="https://github.com/MusheAbdulHakim/Smarthr---hr-payroll-project-employee-management-System/issues" href="https://github.com/MusheAbdulHakim/Smarthr---hr-payroll-project-employee-management-System/issues">Github issues</a></p>
								</div>
							</form>
							<!-- /Account Form -->
							
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Main Wrapper -->
		
		<!-- jQuery -->
		<script src="assets/js/jquery-3.2.1.min.js"></script>
		
		<!-- Bootstrap Core JS -->
		<script src="assets/js/popper.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		
		<!-- Custom JS -->
		<script src="assets/js/app.js"></script>
		<!-- <?php
    // Display login error, if any
    if (isset($loginError)) {
        echo "<p>$loginError</p>";
    }
    ?> -->
		
	</body>
</html>