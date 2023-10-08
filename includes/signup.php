<?php
require_once("includes/config.php"); // Include the database connection file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = $_POST["firstname"];
    $lastName = $_POST["lastname"];
    $userName = $_POST["username"];
    $email = $_POST["email"];
    $phone = $_POST["phonenumber"];
    $address = $_POST["address"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["cpassword"];
	$option = $_POST["option"]; // Radio option identity

    if ($password !== $confirmPassword) {
        echo "Passwords do not match. Please try again.";
    } else {
        // File upload handling
        $targetDir = "uploads/";
        $targetFile = $targetDir . basename($_FILES["image"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

        // Check if image file is a actual image or fake image
        $check = getimagesize($_FILES["image"]["tmp_name"]);
        if ($check !== false) {
            // Allow certain image file formats
            if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                && $imageFileType != "gif") {
                echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                $uploadOk = 0;
            } else {
                if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
                    echo "The file " . basename($_FILES["image"]["name"]) . " has been uploaded.";
                    // Insert user data into the database
                    $sql = "INSERT INTO users (FirstName, LastName, UserName, Email, Phone, Address, Password, Picture,Option) VALUES ('$firstName', '$lastName', '$userName', '$email', '$phone', '$address', '$password', '$targetFile','$option')";

                    if ($conn->query($sql) === TRUE) {
                        echo "Registration successful!";
						header("Location: login.php");
                    } else {
                        echo "Error: " . $sql . "<br>" . $conn->error;
                    }
                } else {
                    echo "Sorry, there was an error uploading your file.";
                }
            }
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="assets/css/signup.css">

	<title>Signup</title>
</head>
<body>
<div class="signup">

	<div class="mob-image">
		<img src="assets/img/logo-bgremoved.png" alt="">
	</div>

    <div class="container">
        <div class="left">
            <a href="/efficiensee/index.php"><img src="assets/img/signup_final.png" alt="image"></a> 
        </div> 
        <div class="right"> 
            <div class="signup">
                <div class="heading">  
                    <h1>sign up</h1>
					<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST" enctype="multipart/form-data">
					        <div class="form-group">
							<div class="label">
								<label for="option" style="font-size: 1.3rem;">Signup as:</label>
							</div>
							<div class="inputs">
								<div class="hr">
									<input type="radio" name="option" value="hr" id="specifyColor" required> <span>hr</span> 
								</div>
								<div class="employee">
									<input type="radio" name="option" value="employee" id="specifyColor" required> <span>employee</span>
								</div>
							</div>
							</div>
	
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
									<div class="row">
										<div class="col">
											<label style="margin-bottom: 5px; ">Confirm Password</label>
										</div>
									</div>
									<input class="form-control" name="cpassword" required type="password">
								</div>
								<div class="form-group">
									<label>Phone Number</label> 
									<input class="form-control" type="number" name="phonenumber" id="phonenumber" required>
									<!-- <input class="form-control" name="phonenumber" required type="ph"> -->
								</div>
								<div class="form-group">
									<label>Address</label> 
									<input class="form-control" type="text" name="address" id="address" required>
								</div>
								<div class="form-group">
									<label>Upload Photo</label> 
									<input type="file" accept="image/*" class="form-control input-file" name="image" id="image" style="height: auto; width: fit-content; background-color: transparent; border: 1px solid transparent;">
								</div>
								<!-- <?php if($wrongpassword){echo $wrongpassword;}?> --> 
								
								<div class="form-group text-center">
									<button class="btn btn-primary account-btn" name="login" type="submit" value="Register">sign up</button>
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
	
</body>
</html>