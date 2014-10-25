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
if (isset($_POST['book']))
{
$bookname=$_POST['book'];
}
else
{
echo "<script>alert('Compulsory to add Book Name!')</script>";
header("location:addnewbook.html");
}

if (isset($_POST['author']))
{
$author=$_POST['author'];
}
else 
{
$author=' ';
}
if (isset($_POST['publisher']))
{
$publisher=$_POST['publisher'];
}
else 
{
$publisher=' ';
}
$orignalbook=$_POST['orignalbook'];



// To protect MySQL injection 
$bookname = stripslashes($bookname);
$author = stripslashes($author);
$bookname= mysql_real_escape_string($bookname);
$author = mysql_real_escape_string($author);
$publisher = stripslashes($publisher);
$publisher= mysql_real_escape_string($publisher);

/*validating form info

$authorErr=$publisherErr='';
if (!preg_match("/^[a-zA-Z ]*$/",$name))
  {
  $authorErr = "Only letters and white space allowed for Author Name";
  }

if (!preg_match("/^[a-zA-Z ]*$/",$name))
  {
  $publisherErr = "Only letters and white space allowed for Publisher Name";
  }
if (!($authorErr='' && $publisherErr=''))
{
echo "<script>alert('".$authorerror."<br>".$bookerror."')</script>";
header("location:addnewbook.html");
}

*/

mysqli_query($con,"UPDATE Books SET book_name='$bookname', book_author='$author',book_publisher='$publisher' WHERE book_name='$orignalbook'");
?>
<div id="container">
<div id="header">
<h1>Shaastra Library Portal</h1>
</div>

<div id="login">
<br>
<h2> Librarian Successful Edit Book Page</h2>
<br>
<h3> Book successfully Edited </h3>
<a href="librarianbooksort.php"> <div id="goback">Click here to go back to the Main Page </div></a>

</body>
</html>
