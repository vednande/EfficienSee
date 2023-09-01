<?php
   include('<includes/config.php');
   session_start();
   
   $user_check = $_SESSION['userlogin'];
   
   $ses_sql = mysqli_query($db,"select UserName from users where UserName = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['UserName'];
   
   if(!isset($_SESSION['userlogin'])){
      header("location:login.php");
      die();
   }
?>
