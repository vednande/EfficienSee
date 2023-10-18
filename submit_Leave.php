<?php
// Include the database configuration from config.php
include 'includes/config.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get data from the form
    $first_name = $_POST['first-name'];
    $last_name = $_POST['last-name'];
    $days_off = $_POST['days-off'];
    $reason = $_POST['reason'];

    // Prepare and execute the SQL query to insert data into the "Leave" table
    $sql = "INSERT INTO yuvi (FName, LName, Days, Reason) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssis", $first_name, $last_name, $days_off, $reason);

    if ($stmt->execute()) {
        echo "Leave application submitted successfully!";
        echo "<script>setTimeout(function(){window.location.href='employee-landing.php';}, 1000);</script>";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement and the database connection
    $stmt->close();
    $conn->close();
}
?>
