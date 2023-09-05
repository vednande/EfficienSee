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
									<input class="form-control" type="number" name="phonenumber" id="phonenumber" pattern="[0-9]" required max="10" maxlength="10">
									<!-- <input class="form-control" name="phonenumber" required type="ph"> -->
								</div>
								<div class="form-group">
									<label>Address</label> 
									<input class="form-control" type="text" name="address" id="address" required>
								</div>
								<div class="form-group">
									<label>Upload Photo</label> 
									<input type="file" accept="image/*" class="form-control input-file" name="photo" id="photo" style="height: auto; width: fit-content; background-color: transparent; border: 1px solid transparent;">
								</div>
								<div class="form-group" id="select-role"> 
									<p>Please select your role</p>
									<div class="hr" id="hr">
										<input type="radio" name="role" id="hr" style="cursor: pointer;">
										<label for="hr">HR</label>
									</div>
									<div class="employee" id="employee">
										<input type="radio" name="role" id="employee" style="cursor: pointer;">
										<label for="employee" style="text-transform: uppercase;">Employee</label>
									</div>
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
<script src="/project/efficiensee/includes/signup.js"></script>