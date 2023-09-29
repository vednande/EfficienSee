<?php
require_once("includes/config.php"); // Include the database connection file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Email = $_POST["Email"];

    // Check if the Email exists in the database
    $sql = "SELECT password FROM users WHERE Email = :Email";
    $query = $dbh->prepare($sql);
    $query->bindParam(":Email", $Email, PDO::PARAM_STR);
    $query->execute();
    $user = $query->fetch(PDO::FETCH_ASSOC);

    if ($user) {
        $password = $user["password"];

        // Send the password to the user's email (not recommended)
        $to = $Email;
        $subject = "Your Password";
        $message = "Your password is: $password";
        $headers = "From: your_email@example.com"; // Replace with your email address
        mail($to, $subject, $message, $headers);

        echo "Password sent to your email.";
    } else {
        echo "Email not found in the database.";
    }
}
?>
