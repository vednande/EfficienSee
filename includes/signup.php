<link rel="stylesheet" href="assets/css/signup.css">
<div class="signup">
    <div class="container">
        <div class="left">
            <a href="/project/efficiensee/index.php"><img src="https://img.freepik.com/free-vector/abstract-security-background-blue-tones_23-2147627289.jpg" alt="image"></a>
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
											<label>Password</label>
										</div>
									</div>
									<input class="form-control" name="password" required type="password">
								</div>
								<!-- <?php if($wrongpassword){echo $wrongpassword;}?> --> 
								
								<div class="form-group text-center">
									<button class="btn btn-primary account-btn" name="login" type="submit">Login</button>
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
                </div>
            </div>
        </div>
    </div>
</div>