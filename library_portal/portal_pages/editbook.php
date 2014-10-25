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

#register
{
margin-top: 10px;
margin-bottom: 0px;
height:470px;
background: -webkit-linear-gradient(right,white,#00001A,#00001A,#00001A, white); /* For Safari 5.1 to 6.0 */
background: -o-linear-gradient(right,white,#00001A,#00001A,#00001A, white); /* For Opera 11.1 to 12.0 */
background: -moz-linear-gradient(right,white,#00001A,#00001A,#00001A, white); /* For Firefox 3.6 to 15 */
background: linear-gradient(right,white,#00001A,#00001A,#00001A, white); /* Standard syntax (must be last) */
}

h2
{
text-align:center;
color:white;

border-style:solid;
border-width:5px;
border-color:white;
}

#librarianregister
{
margin-left:260px;
width: 700px;
height:165px;
padding:20px;
background-color:#66CDAA;
border-radius:20px;
font-size:20px;
color:#0000FF;
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



<div id="container">
<div id="header">
<h1>Shaastra Library Portal</h1>
</div>

<div id="register">
<br>
<h2> Librarian Edit Book Page</h2>
<br>
<br>
<div id="librarianregister">

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

$sql="SELECT * FROM Books WHERE book_name='".$_POST['book']."'";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);
?>

<form action="editbookcheck.php" method="post">
<b>Book Name:</b> <input type="text" name="book" <?php echo 'value="'.$row[0].'"'?>> <br>
<b>Author:&nbsp &nbsp &nbsp</b> &nbsp <input type="text" name="author" <?php echo 'value="'.$row[1].'"'?>><br>
<b>Publisher:</b> &nbsp<input type="text" name="publisher" <?php echo 'value="'.$row[2].'"'?>><br>
<input type="hidden" name="orignalbook" <?php echo 'value="'.$row[0].'"'?> >
<br>
<br>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <input type="submit" value="EDIT BOOK">
</form>

</div>
<br>
<a href="librarianbooksort.php"> <div id="goback"><b>Click here to go back to Main page</b></div> </a>


</body>
</html>
