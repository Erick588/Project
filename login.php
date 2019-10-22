<?php
session_start();

$error_msg = "";

if (!isset($_SESSION['userid'])) {
  if (isset($_POST['submit'])) {
    
  $dbc = mysqli_connect('localhost', 'root', '', 'practical_eric_munene');

 
  $username = mysqli_real_escape_string($dbc, trim($_POST['username']));
  $password = mysqli_real_escape_string($dbc, trim($_POST['password']));

  if (!empty($username) && !empty($password)) {
    
    $query = "SELECT id, username FROM user WHERE username = '$username' AND 
      password = '$password'";
    $result = mysqli_query($dbc, $query);

    }
    else {
      //The username/password are incorrect so set an error message
      $error_msg = 'Sorry, you must provide the right username and password combination to login.';
    }
  }
  

  }



?>
<?php

//If the session is not set, show any error message and the login form; otherwise confirm the login
if (!isset($_SESSION['user_id'])) {
  echo '<p class="error"> ' . $error_msg . '</p>';

?>
<h1 style="font-size:19px">User Login</h1>
<center>
  <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  <table>
    <tr><td>
    <label for="Username">Username:*</label></td>
    <td>
    <input type="text" name="username" placeholder="Username"></td></tr>
    <tr><td>
    <label for="password">Password:*</label></td>
    <td>
    <input type="password" name="password" placeholder="Password"></td></tr>
   </table>
   <input type="submit" name="submit" value="Login">
 </form>
</center>
 <?php

}
else {
  //Confirm the successful login
  echo '<p>You are logged in as ' . $_SESSION['username'] . '</p>';
  $url = 'http:// ' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '#';
  header("Location: #");
} 

 ?>
 <center>
 Register here:
    <li><a href="insert.php">login</a></li>
    </center>

 </body>
</html>   