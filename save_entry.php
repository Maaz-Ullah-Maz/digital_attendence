<?php
include("connection.php"); // connection file

$student_id = $_POST['student_id'];
$date = $_POST['date'];
$status = $_POST['status'];
$semester = $_POST['semester'];

$sql = "INSERT INTO attendence (student_id, date, status, semester) 
        VALUES ('$student_id', '$date', '$status', '$semester')";

if (mysqli_query($conn, $sql)) {
    echo "✅ Data Saved Successfully!";
} else {
    echo "❌ Error: " . mysqli_error($conn);
}
?>
