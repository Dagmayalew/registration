<?php
$pass = $_POST['pass'];
include_once("../connection.php");



$sql = "SELECT * FROM registration.students WHERE pass='$pass'";

$result = $conn->query($sql);

if ($result->num_rows > 0){

$row = $result->fetch_assoc();

$first_name = $row["first_name"];
$last_name = $row["last_name"];
$gender = $row["gender"];
$address = $row["address"];
$department = $row["department"];
$pass = $row["pass"];
$email = $row["email"];
echo

"<html>
<head>
<title>Delete Record</title>
<link rel='stylesheet' href='update.css'>
</head> 
<body>
<center>
<form action='update.php' method='post'>
Student ID: $pass<br>
<input type='hidden' name='student_id' value='$pass'>

First Name: <input type='text' name='first_name' value='$first_name'><br>
Last Name: <input type='text' name='last_name' value='$last_name'><br>
Gender: <select name='gender'>
	<option value='$gender'>$gender</option>
	<option value='boy'>male</option>
	<option value='girl'>female</option>
	</select><br>
Address: <input type='text' name='address' value='$address'><br>
Department: <select name='department'>
    <option value='$department'>$department</option>
    <option value='computer science'>computer science</option>
	</select><br>
Id no: <input type='text' name='pass' value='$pass' readonly><br>
Email: <input type='text' name='email' value='$email'><br>

<input type ='submit'>
<center><a href='../index.php'><h1>back</h1></a></center>
</form>
</center>
</body>
</html>";

} else {
	echo "Not Found";
}
$conn->close();

?>