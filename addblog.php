

<?php

if (isset($_POST['submit'])) {

  //Connect to the database
  $dbc = mysqli_connect('localhost', 'root', '', 'practical_eric_munene')
    or die('Can\t connect to the database');

  //Grab data from the user
  $blog = mysqli_real_escape_string($dbc, trim($_POST['blog']));
  $date = mysqli_real_escape_string($dbc, trim($_POST['date']));
  $output_form = false;
//error handlers
  //check for empty fields
      
  
          $query = "INSERT INTO blog VALUES (0, '$blog','$date') ";
    mysqli_query($dbc, $query);
    mysqli_close($dbc);
  
          $error=" Blog added";
          header("location: blog.php?error=".$error);
  

          exit();
        }
    
            ?>
            <center>
<div id="form ">
  <h1 style="font-size:19px; ">Add blogs</h1>
 <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>"

  <div id="error" style="text-align: center; color: red; font-style: italic;">
<?php 
if(!empty($_GET['error'])){
  echo $_GET['error'];}
  ?>

  </div>
  <table>
    <td>
    <input type="text" name="blog" id="blog" </td></tr>
    <td>
    <input type="date" name="Date" id="date"></td></tr>
    <td>

    </table>

    <input type="submit" name="submit" value="submit"><br>
    
    </form>
  </center>
  </div>

</body>
</html>
