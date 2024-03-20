<!-- <?php 
// DB credentials.
define('DB_HOST','sql211.infinityfree.com');
define('DB_USER','if0_36196880');
define('DB_PASS','piyush2002');
define('DB_NAME','if0_36196880_efficiensee');
// Establish database connection.
try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
?> -->
<?php
$servername = "sql211.infinityfree.com"; // Change to your database server name
$username = "if0_36196880"; // Change to your database username
$password = "piyush2002"; // Change to your database password
$dbname = "if0_36196880_efficiensee"; // Change to your database name

// Create a connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>