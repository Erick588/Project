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
             <li><a href="addblog.php>">Add Blogs</a></li>
             <li><a href="report.php">View Blogs</a></li>
             
         </ul>
     </nav> 
</header>

   
</body>
</html>


<?php

$link=mysqli_connect("localhost","root" ,"");
mysqli_select_db($link,"practical_eric_munene");
?>
<center>
<div class="grid_10">
	<div class="box round first">
		<h2> Display Blogs</h2>
		<div class="block">
			<?php
$res=mysqli_query($link,"select *from blog");

 echo "<table border='1'>";
 echo "<tr>";
 echo "<th>"; echo "blog"; echo"</th>";
 echo "<th>"; echo "Date"; echo"</th>";
   
 echo "</tr>";
while($row=mysqli_fetch_array($res))
{

 echo "<tr border>";
 echo "<td>"; echo $row["blog"];echo "</td>";
 echo "<td>"; echo $row["Date"];echo "</td>";
 
 


 echo"</tr>";




}
echo "</table>";



    ?> 
		</div>
	</center>
		<?php


