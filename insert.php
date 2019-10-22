<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>www.project.com</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="index.css">
    
<h1 style="font-family:Times New Roman, Times, serif;">Project</h1><hr>
<header class="mainheader">
<nav>
            <ul style="font-size: 14px;">
             <li><a href="login.php">login</a></li>
             <li><a href="addblog.php">Add Blogs</a></li>
             <li><a href="report.php">View Blogs</a></li>
             
         </ul>
     </nav> 
</header>

   
</body>
</html>

<?php

if (isset($_POST['submit'])) {

  //Connect to the database
  $dbc = mysqli_connect('localhost', 'root', '', 'practical_eric_munene')
    or die('Can\t connect to the database');

  //Grab data from the user
  $username = mysqli_real_escape_string($dbc, trim($_POST['username']));
  $firstname = mysqli_real_escape_string($dbc, trim($_POST['firstname']));
  $lastname = mysqli_real_escape_string($dbc, trim($_POST['lastname']));
  $password = mysqli_real_escape_string($dbc, trim($_POST['password']));
  $image = mysqli_real_escape_string($dbc, trim($_POST['image']));
  $output_form = false;
//error handlers
  //check for empty fields
      
  
          $query = "INSERT INTO user VALUES (0, '$user','$firstname', '$lastname', '$password', '$image') ";
    mysqli_query($dbc, $query);
    mysqli_close($dbc);
  
          $error="User Inserted";
          header("location: insert.php?error=".$error);
  

          exit();
        }
    
            ?>
            <center>
<div id="form ">
  <h1 style="font-size:19px; ">Add users</h1>
 <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>"

  <div id="error" style="text-align: center; color: red; font-style: italic;">
<?php 
if(!empty($_GET['error'])){
  echo $_GET['error'];}
  ?>

  </div>
  <table>
    <td>
    <input type="text" name="username" placeholder="username" id="username"> </td></tr>
    <td>
    <input type="firstname" name="firstname" placeholder="firstname" id="firstname"></td></tr>
    <td>
      <input type="lastname" name="lastname" placeholder="lastname" id="lastname"></td></tr>
    <td>
      <input type="password" name="password" placeholder= "password" id="password"></td></tr>
    <td>
      <input type="file" name="image" placeholder="image" id="image"></td></tr>
    <td>

    </table>

    <input type="submit" name="submit" value="submit"><br>
    
    </form>
  </center>
  </div>

</body>
</html>