<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/contact.css">
    <title>Contact Us</title>
</head>
<body>

    <!-- NAVBAR STARTS HERE -->
    <nav> 
        <div class="navbar">
          <!-- BADME IMAGE REPLACE KAR DENA -->
          <!-- <img src="/efficiensee/assets/img/logo-bgremoved.png" alt="" /> -->

          <!-- LOGO GOES HERE -->
          <div class="logo"><a href="/project/efficiensee/">EfficienSee</a></div>

          <!-- OPTIONS GOES HERE -->
          <div class="options">
            <ul>
              <a href="/project/efficiensee/services.php"><li>services</li></a>
              <a href=""><li>security</li></a> 
              <a href="" class="active-link"><li>contact us</li></a>
            </ul>
          </div>

          <!-- LOGIN SIGNUP BUTTONS -->
          <div class="btns">
            <div class="login">
              <button>login</button>
            </div>
            <div class="signup">
              <button>signup</button>
            </div>
          </div>

          <!-- HAMBURGER MENU --> 
          <div class="lines" id="lines">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
          </div>
        </div>
        <!-- MOBILE MENU GOES HERE -->
        <div class="mob-menu" id="mob-menu">
          <div class="mob-options">
            <ul>
              <a href="" id="mob-home"><li>Home</li></a>
              <a href="/project/efficiensee/includes/service.html" id="mob-services"><li>services</li></a>
              <a href="" id="mob-security"><li>security</li></a>
              <a href="" id="mob-contact" class="active-link"><li>contact us</li></a>
            </ul>
          </div>
          <div class="btns">
            <div class="login">
              <button id="mob-login">login</button>
            </div>
            <div class="signup">
              <button id="mob-signup">signup</button>
            </div>
          </div>
        </div>
      </nav>
      <!-- NAVBAR ENDS HERE -->

      <div class="container">
        <div class="headings">
            <div class="sm-heading"><h3>feel free to</h3> </div>
            <div class="xl-heading"><h1>contact us</h1> </div>
        </div>
        <div class="form">
            <div class="name">
                <label for="name">name</label>
                <input type="text" name="name" id="name">
            </div>
            <div class="email">
                <label for="email">email</label>
                <input type="email" name="email" id="email">
            </div>
            <div class="msg">
                <label for="msg">message</label>
                <textarea name="msg" id="msg" cols="30" rows="10"></textarea>
            </div>
            <button>submit</button>
        </div>
      </div>
</body>
</html>
