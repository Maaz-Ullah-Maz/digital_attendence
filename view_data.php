<?php
include("connection.php");

// Fetch data
$sql = "SELECT * FROM attendence";
$result = mysqli_query($conn, $sql);

echo "<h2>Attendance Records</h2>";

if (mysqli_num_rows($result) > 0) {
    echo "<table border='1' cellpadding='5'>";
    echo "<tr>
            <th>ID</th>
            <th>Student ID</th>
            <th>Date</th>
            <th>Status</th>
            <th>Semester</th>
          </tr>";

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
                <td>".$row['id']."</td>
                <td>".$row['student_id']."</td>
                <td>".$row['date']."</td>
                <td>".$row['status']."</td>
                <td>".$row['semester']."</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "No records found.";
}

mysqli_close($conn);
?>
