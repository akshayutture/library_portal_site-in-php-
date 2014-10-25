<!DOCTYPE html>
<html>
<body>
<?php

$host="localhost"; 
$username=""; 
$password=""; 
$db_name="test_database"; 


// Connect to server and select databse.
$con=mysqli_connect("$host", "$username", "$password","$db_name")or die("cannot connect");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

// username and password sent from formname
$myusername=$_POST['user'];
$mypassword=$_POST['password'];

// To protect MySQL injection 
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);

$sql="SELECT * FROM Customers WHERE customer_name='$myusername' and password='$mypassword'";
$result = mysqli_query($con,$sql);

$row = mysqli_fetch_array($result);
if (isset($row[0]))
{session_start();
$_SESSION['user']=$row;
header("location:customerbooksort.php");}
else 
{echo 'Username or password incorrect <br> <a href="customerlogin.html"> Click here to go back to login page </a>';}


?>

</body>
</html>
