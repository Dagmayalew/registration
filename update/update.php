<?php
include_once("../connection.php");

$first_name = $_POST["first_name"];
$last_name = $_POST["last_name"];
$gender = $_POST["gender"];
$address = $_POST["address"];
$department = $_POST["department"];
$pass = $_POST["pass"];
$email = $_POST["email"];



$sql = "UPDATE students set first_name='$first_name',last_name='$last_name',
gender='$gender',address='$address',department='$department',pass='$pass',email='$email' where pass='$pass'";

if ($conn->query($sql) === TRUE) {
	echo "Records updated: ".$pass."<br>- ".$first_name."<br>- ".$last_name."<br>- ".$gender."<br>- ".$address."<br>- ".$department."<br>- ".$email."<br><center><a href=../index.php><h1>back</h1></a></center>";
} else {
	echo "Error: ".$sql."<br>".$conn->error;
}

$conn->close();

?>