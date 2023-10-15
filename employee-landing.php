<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Landing</title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo-bgremoved.png">
    <link rel="stylesheet" href="assets/css/employee-landing.css">
</head>
<body>
    <div class="container">

    <!-- HEADER STARTS HERE -->
        <div class="header">
            <div class="header-left">
                <div class="header-logo">
                    <a href="employee-landing.php" id="logo"><span id="one">efficien</span><span id="two">see</span></a>
                </div>
                <div class="company-name">
                    <h3>Volkswagen India</h3>
                </div>
            </div>
            <div class="profile" id="profile">
                <div class="img-usname">
                    <div class="img">
                        <img src="https://media.licdn.com/dms/image/C4D03AQG6G0wCYkCy4w/profile-displayphoto-shrink_800_800/0/1614504231729?e=2147483647&v=beta&t=AKd9PDE90YJjAPn4XZYc77_aGJAvf6fL_knFN7SaHhQ" alt="">
                    </div>
                    <div class="username">
                        Ved Nande
                    </div>
                    <div class="arrow"></div>
                </div>
                <div class="logout-btn" id="logout-btn">
                    <a href="logout.php">logout</a>
                </div>
            </div>
        </div>
        <!-- HEADER ENDS HERE -->
        
        <!-- WELCOME STARTS HERE -->
        <div class="welcome">
            <div class="card">
                <div class="img">
                    <img src="https://media.licdn.com/dms/image/C4D03AQG6G0wCYkCy4w/profile-displayphoto-shrink_800_800/0/1614504231729?e=2147483647&v=beta&t=AKd9PDE90YJjAPn4XZYc77_aGJAvf6fL_knFN7SaHhQ" alt="">
            </div>
            <div class="name-join-date">
                <div class="wel-name">
                    <h3>Welcome, Ved Nande</h3>
                </div>
                <div class="join-date">
                    <h6>Monday, 20 May 2023</h6>
                </div>
                <div class="comp-mob"><h2>Volkswagen India</h2></div>
            </div>
            </div>
        </div>
        <!-- WELCOME ENDS HERE -->


        <!-- PROJECTS STARTS HERE -->
        <h3 id="project-heading">project</h3>
        <div class="projects">
            <div class="total-tasks">
                <h3>71</h3>
                <p>total task</p>
            </div>
            <div class="pending-tasks">
                <h3>14</h3>
                <p>pending task</p>
            </div>
            <div class="total-projects">
                <h3>2</h3>
                <p>total project</p>
            </div>
        </div>
        <!-- PROJECTS ENDS HERE -->

        <!-- LEAVE STARTS HERE -->
        <h3 id="leaves-heading">leave</h3>
        <div class="leaves">
            <div class="leaves-taken">
                <h3>71</h3>
                <p>leave taken</p>
            </div>
            <div class="pending-leaves">
                <h3>14</h3>
                <p>pending leaves</p>
            </div>
        </div>
        <div class="btn-apply-leave">
            <button data-model-target="#modal" class="take-leave" id="take-leave" onclick="openPopup()">apply for leave</button>
        </div>
        <div class="popup" id="popup">
            <h2>Apply for Leave</h2>
            <div class="close-btn" onclick="closePopup()">&times;</div>
            <div class="inputs" style="margin: 1rem 0;">
                <form action="" method="POST">
                    <div class="form-grp" style="display: flex; align-items: flex-start; justify-content: center; flex-direction: column; gap: 0.5rem">
                        <label>First Name <span style="color: red;">*</span></label>
                        <input type="text" name="first-name" id="first-name" style="border: 2px solid #e3e3e3; font-size: 15px; height: 44px; padding: 4px 8px;">
                    </div>
                    <div class="form-grp" style="display: flex; align-items: flex-start; justify-content: center; flex-direction: column; gap: 0.5rem">
                        <label>Last Name <span style="color: red;">*</span></label>
                        <input type="text" name="first-name" id="first-name" style="border: 2px solid #e3e3e3; font-size: 15px; height: 44px; padding: 4px 8px;">
                    </div>
                    <div class="form-grp" style="display: flex; align-items: flex-start; justify-content: center; flex-direction: column; gap: 0.5rem">
                        <label>No. of days off <span style="color: red;">*</span></label>
                        <input type="number" name="first-name" id="first-name" style="border: 2px solid #e3e3e3; font-size: 15px; height: 44px; padding: 4px 8px;">
                    </div>
                    <div class="form-grp" style="display: flex; align-items: flex-start; justify-content: center; flex-direction: column; gap: 0.5rem">
                        <label>Reason <span style="color: red;">*</span></label>
                        <input type="text" name="first-name" id="first-name" style="border: 2px solid #e3e3e3; font-size: 15px; height: 44px; padding: 4px 8px;">
                    </div>
                </form>
            </div>
            <button onclick="closePopup()">Submit</button>
        </div>
        <!-- LEAVE ENDS HERE -->

        <!-- UPDATES STARTS HERE -->
        <div class="updates">
            <div class="heading">
                <h3>Updates</h3>
            </div>
            <div class="updates-list">
                <div class="one">
                    <img src="https://hrone.cloud/wp-content/uploads/2021/05/leave-management-1.png" alt="">
                    <p>Abhishek gupta is off sick today</p>
                </div>
                <div class="two">
                    <img src="https://cdn-icons-png.flaticon.com/512/5024/5024833.png" alt="">
                    <p>Ujjwal Khond is working from home</p>
                </div>
                <div class="one">
                    <img src="https://media.istockphoto.com/id/1431950018/vector/woman-at-the-airport-and-working-on-a-laptop-and-talking.jpg?s=612x612&w=0&k=20&c=cdDn4q7qYBj3uUYEwxw-WNokjbv_qAUM0E1LtgATxVE=" alt="">
                    <p>Prajwal Nirwan is in Indonesia for Global MNC meet.</p>
                </div>
                <div class="two">
                    <img src="https://cdn-icons-png.flaticon.com/512/3021/3021811.png" alt="">
                    <p>Aditi Pashine is on maternity leave</p>
                </div>
            </div>
        </div>
        <!-- UPDATES ENDS HERE -->

    </div>
    <script src="assets/js/modal.js"></script>
    <script src="assets/js/logout.js"></script>
</body>
</html>

<!-- <div class="dropdown-menu">
				<a class="dropdown-item" id="dropdown-item" href="profile.php">My Profile</a>
				<a class="dropdown-item" id="dropdown-item" href="settings.php">Settings</a>
				<a class="dropdown-item" id="dropdown-item" href="logout.php">Logout</a>
			</div> -->