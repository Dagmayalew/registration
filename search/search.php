<?php
$pass = $_POST['pass'];

include_once("../connection.php");
$sql = "select * from students where pass like '%$pass%'";

$result = $conn->query($sql);

if ($result->num_rows > 0){
while($row = $result->fetch_assoc() ){
    echo $row["pass"]."<br>- ".$row["first_name"]." <br>-".$row["last_name"]." <br>-".$row["gender"]." <br>-".$row["address"]."<br>- ".$row["department"]." <br>-".$row["pass"]." <br>-".$row["email"]."<br>"."<a href='../index.php'><h1>back</h1></a>";
}
} else {
	echo "0 records";
}

$conn->close();

?>