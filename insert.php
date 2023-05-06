<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>
	<center>
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		include_once('connection.php');
		
		// Taking all 7 values from the form data(input)
		$first_name = $_REQUEST['first_name'];
		$last_name = $_REQUEST['last_name'];
		$gender = $_REQUEST['gender'];
		$address = $_REQUEST['address'];
		$department = $_REQUEST['department'];
		$pass = $_REQUEST['pass'];
		$email = $_REQUEST['email'];
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO students VALUES ('$first_name','$last_name',
			'$gender','$address','$department','$pass','$email')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in a database successfully.";
				

			echo nl2br("\n$first_name\n $last_name\n "
				. "$gender\n $address\n $department\n $pass\n $email");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
		<br>
		<a href="index.php"><h1>back</h1></a>
	</center>
    
	
</body>

</html>
