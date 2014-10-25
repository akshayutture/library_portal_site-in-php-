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
width: 460px;
height:20px;
padding:20px;
background-color:#66CDAA;
border-radius:20px;
font-size:20px;
color:#0000FF;
}


</style>
</head>
<body>

<?php
session_start();
$con=mysqli_connect("localhost","","","test_database");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

mysqli_query($con,"UPDATE Books SET borrowed_by='Book Available' WHERE book_name='".$_SESSION['user'][4]."' AND borrowed_by!='Book Available'");
mysqli_query($con,"UPDATE Customers SET book_borrowed_name='No book borrowed' WHERE customer_name='".$_SESSION['user'][0]."'");
$_SESSION['user'][4]='No book borrowed';
?>

<div id="container">
<div id="header">
<h1>Shaastra Library Portal</h1>
</div>

<div id="login">
<br>
<h2> Customer Return Book Page</h2>
<br>
<h3> Book successfully Returned </h3>

<a href="customerbooksort.php"><div id="goback">Click here to go back to Customer Portal</div></a> 




</body>
</html>
