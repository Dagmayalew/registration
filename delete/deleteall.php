<?php
// Connect to the MySQL database
$db = mysqli_connect("localhost", "root", "", "registration");

// Delete all the records from the MySQL table
$sql = "TRUNCATE TABLE students";
$result = $db->query($sql);

// Display a success message
if ($result) {
echo "<center>All records deleted successfully</center>";
echo"<a href='../index.php'><h1>back</h1></a>";
} else {
echo "Error deleting records: " . $db->error;
}

// Close the MySQL connection
$db->close();
?>