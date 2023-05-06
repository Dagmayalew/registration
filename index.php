<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>student form</title>
   <link rel="stylesheet" href="index.css"> 
</head>
<body>

    <div class="container">
      <h1>SECTION N7 STUDENT LIST</h1>

      <form action="insert.php" method="post">
        <label for="fname">First Name</label>
        <input
          type="text"
          id="fname"
          name="first_name"
          placeholder="Your name.."
          required
        />

        <label for="lname">Last Name</label>
        <input
          type="text"
          id="lname"
          name="last_name"
          placeholder="Your last name.."
          required
        />
        <label for="gender">Gender</label>
        <select id="gender" name="gender">
          <option value="male">male</option>
          <option value="female">female</option>
        </select>
        <label for="address">Address</label>
        <input
          type="text"
          id="address"
          name="address"
          placeholder="your Address"
          required
        />
        <label for="department">Department</label>
        <select id="department" name="department">
          <option value="computer science">computer science</option>
        </select>
        <label for="id">ID Number</label>
        <input type="text" id="pass" name="pass" placeholder="Your Id number" required />

        <label for="email">Email</label>
        <input
          type="text"
          id="email"
          name="email"
          placeholder="Your Email address.."
          required
        />
        
        <input type="submit" value="Insert" />
        <a href="read/read.php"><input  type="button" value="read"></a>
        <a href="update/updatesearch.php"><input  type="button" value="update"></a>
        <a href="search/searchform.php"><input  type="button" value="search"></a>
        <a href="delete/deletesearch.php"><input  type="button" value="delete"></a>
        <input type="reset" value="Reset"/>
      </form>
    </div>
  </body>
</html>
