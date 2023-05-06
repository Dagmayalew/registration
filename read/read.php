<?php
include_once('../connection.php');
$query="select * from students";  
 $connect=mysqli_query($conn,$query);  
 $num=mysqli_num_rows($connect);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>read data</title>
    <link rel="stylesheet" href="read.css">
</head>
<body>
    <table align="center" border="1px" style="width: 600px; line-height: 30px;">
        <tr>
            <th colspan="7"><h2>N7 STUDENTS DATA LIST</h2></th>
            
        </tr>
        <tr>
            <th>first_name</th>
            <th>last_name</th>
            <th>gender</th>
            <th>address</th>
            <th>department</th>
            <th>id no</th>
            <th>email</th>
        </tr>
        <?php
        if ($num>0){
        while($rows=mysqli_fetch_assoc($connect))
        {
            ?>
         <tr>
            <td><?php echo $rows['first_name']; ?></td>
            <td><?php echo $rows['last_name']; ?></td>
            <td><?php echo $rows['gender']; ?></td>
            <td><?php echo $rows['address']; ?></td>
            <td><?php echo $rows['department']; ?></td>
            <td><?php echo $rows['pass']; ?></td>
            <td><?php echo $rows['email']; ?></td>

         </tr> 
         <?php
        }
    }
        ?> 
       
    </table>
    <center><a href="../index.php"><h1>back</h1></a></center>
</body>
</html>