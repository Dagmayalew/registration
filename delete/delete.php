<?php
// Connect to the MySQL database
$db = mysqli_connect("localhost", "root", "", "registration");

// Retrieve the data from the HTML form
$pass = $_POST["pass"];

// Delete the record from the MySQL table
$sql = "DELETE FROM students WHERE pass='$pass'";

$result = $db->query($sql);

// Display a success message
if ($result) {
echo "Record deleted successfully"."<a href=../index.php><h1>back</h1></a>";
} else {
echo "Error deleting record: " . $db->error;
}

// Close the MySQL connection
$db->close();
?>