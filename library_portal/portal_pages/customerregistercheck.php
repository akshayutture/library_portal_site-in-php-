<!DOCTYPE html>
<html>
<head>
<style>
h1
{
text-align:center;
height:80px;
color: #00CED1;
 padding-top:25px;
font-size: 55px;
margin-bottom: 0px;
padding-bottom:0px;

background: -webkit-linear-gradient(right,white, black, black, black,black, white); /* For Safari 5.1 to 6.0 */
background: -o-linear-gradient(right,white, black,black, black, black, white); /* For Opera 11.1 to 12.0 */
background: -moz-linear-gradient(right,white, black,black, black, black, white); /* For Firefox 3.6 to 15 */
background: linear-gradient(to right,white, black,black, black, black, white); /* Standard syntax (must be last) */
}

#login
{
margin-top: 10px;
margin-bottom: 0px;
height:470px;
background: -webkit-linear-gradient(right,white,#003300,#003300,#003300, white); /* For Safari 5.1 to 6.0 */
background: -o-linear-gradient(right,white,#003300,#003300,#003300, white); /* For Opera 11.1 to 12.0 */
background: -moz-linear-gradient(right,white,#003300,#003300,#003300, white); /* For Firefox 3.6 to 15 */
background: linear-gradient(to right,white,#003300,#003300,#003300, white); /* Standard syntax (must be last) */
text-allign:center;
}

h2
{
text-align:center;
color:white;

border-style:solid;
border-width:5px;
border-color:white;
}

h3
{
text-align:center;
color:white;
}

#goback
{
margin-left:400px;
width: 420px;
height:20px;
padding:20px;
background-color:#66CDAA;
border-radius:20px;
font-size:20px;
color:#0000FF;
text-decoration:none;
}


</style>
</head>
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


// book details sent from formname
if (isset($_POST['name']))
{
$name=$_POST['name'];
}
else
{
echo "<script>alert('Compulsory to add Name!')</script>";
header("location:customerregister.html");
}

if (isset($_POST['password']))
{
$password=$_POST['password'];
}
else 
{
$password=' ';
}
if (isset($_POST['email']))
{
$email=$_POST['email'];
}
else 
{
$email=' ';
}
if (isset($_POST['phonenumber']))
{
$phonenumber=$_POST['phonenumber'];
}
else 
{
$phonenumber=' ';
}


// To protect MySQL injection 
$name = stripslashes($name);
$password = stripslashes($password);
$name= mysql_real_escape_string($name);
$password = mysql_real_escape_string($password);
$email = stripslashes($email);
$email= mysql_real_escape_string($email);
$phonenumber = stripslashes($phonenumber);
$phonenumber= mysql_real_escape_string($phonenumber);


/*validating form info

$passwordErr=$emailErr='';
if (!preg_match("/^[a-zA-Z ]*$/",$name))
  {
  $passwordErr = "Only letters and white space allowed for Author Name";
  }

if (!preg_match("/^[a-zA-Z ]*$/",$name))
  {
  $emailErr = "Only letters and white space allowed for Publisher Name";
  }
if (!($passwordErr='' && $emailErr=''))
{
echo "<script>alert('".$passworderror."<br>".$bookerror."')</script>";
header("location:addnewbook.html");
}

*/

$sql="SELECT * FROM Customers WHERE customer_name='$name'";
$result = mysqli_query($con,$sql);

$row = mysqli_fetch_array($result);
if ($row[0]==$name)
{
$status='Failed';
$statusmessage='Username in Use. Please go Back and select another username';
}
else
{
mysqli_query($con,"INSERT INTO Customers (customer_name, password, email,phone_number) VALUES ('".$name."', '".$password."','".$email."','".$phonenumber."')");
$status='Successful';
$statusmessage='Successfully Registered';
}
?>

<div id="container">
<div id="header">
<h1>Shaastra Library Portal</h1>
</div>

<div id="login">
<br>
<h2> Customer <?php echo $status; ?> Registration Page</h2>
<br>
<h3> <?php echo $statusmessage; ?> </h3>
<a href="index.html"> <div id="goback">Click here to go back to the Home Page </div></a>

</body>
</html>
