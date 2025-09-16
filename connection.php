<?php
$db_server = "localhost";
$db_user   = "root";
$db_pass   = "";
$db_name   = "digital_attendence";

// Create connection
$conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);

// Check connection
if ($conn) { 
    echo "Connection successful!";
} else {
    echo "Sorry, your connection to MySQL was not successful.";
}
?>
