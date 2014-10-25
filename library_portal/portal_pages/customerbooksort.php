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

#customer
{
margin-top: 10px;
margin-bottom: 0px;
height:470px;
background: -webkit-linear-gradient(right,#00001A,#003300,#003300,#003300, #003300); /* For Safari 5.1 to 6.0 */
background: -o-linear-gradient(right,#00001A,#003300,#003300,#003300, #003300); /* For Opera 11.1 to 12.0 */
background: -moz-linear-gradient(right,#00001A,#003300,#003300,#003300, #003300); /* For Firefox 3.6 to 15 */
background: linear-gradient(to right,#00001A,#003300,#003300,#003300, #003300); /* Standard syntax (must be last) */
}

h2
{
text-align:center;
color:white;

border-style:solid;
border-width:5px;
border-color:white;
}

#customerinfo
{
float:left;
margin-right:20px;
width: 325px;
height:120px;
padding:20px;
padding-right:0px;
background-color:#66CDAA;
border-radius:20px;
font-size:20px;
color:#0000FF;
}

#rightside
{
float:left;
}

.sort1
{
float:left;
margin-right:10px;
margin-left:5px
width: 27px;
height:11px;
padding:10px;
padding-top:0px;
background-color:#7FFF00;
border-radius:7px;
font-size:20px;
color:#0000FF;
margin-bottom:10px;
}

.sort2
{
float:left;
margin-right:10px;
margin-left:5px
width: 27px;
height:11px;
padding:10px;
margin-bottom:10px;
padding-top:0px;
}


table,th,td
{
border:1px solid black;
border-collapse:collapse;
margin-top:20px;
}

#booktable
{
font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
border-collapse:collapse;
}

#booktable td, #booktable th 
{
font-size:1em;
border:1px solid #98bf21;
padding:3px 7px 2px 7px;
}

#booktable td
{
color:white;
}

#booktable th 
{
font-size:1.1em;
text-align:left;
padding-top:5px;
padding-bottom:4px;
background-color:#7FFF00;
color:#0000FF;
font-weight:bold;
}

#leftside
{
float:left;
}
</style>
</head>
<body>



<div id="container">
<div id="header">
<h1>Shaastra Library Portal</h1>
</div>

<div id="customer">
<br>
<h2> Customer Portal</h2>
<div id="leftside">
<div id="customerinfo">
<?php
session_start();
echo "<b>Customer Name:</b> ".$_SESSION['user'][0]."<br>";
echo "<b>Email:</b>         ".$_SESSION['user'][3]."<br>";
echo "<b>Phone Number:</b>  ".$_SESSION['user'][2]."<br>";
echo "<b>Book Borrowed:</b> ".$_SESSION['user'][4]."<br>";
?> 

<!--INCLUDE AN EDIT DETAILS OPTION-->
</div>
<p>&nbsp &nbsp &nbsp &nbsp <?php if ($_SESSION['user'][4]!='No book borrowed'){ echo '<form action="returnbook.php" method="post"><input type="submit" value="Return Book"></form>';} ?><br>
 &nbsp &nbsp &nbsp &nbsp<form action="customerlogout.php" method="post"><input type="submit" value="Logout"><br></form>
 &nbsp &nbsp &nbsp &nbsp<form action="customereditdetails.php" method="post"><input type="submit" value="Edit Personal Details"></form>
</p>
</div>

<div id="rightside">
<span class="sort1">Sorted by Book Name </span>
<form action="customerauthorsort.php" method="post"><span class="sort2"><input type="submit" name="author" value="Sort by Author Name"> </span></form>
<form action="customerdatesort.php" method="post"><span class="sort2"><input type="submit" name="date" value="Sort by Date Added"> </span></form>

<!-- BOOK TABLE-->
<table id="booktable">
<tr>
<th> Book Name </th>
<th> Author </th>
<th> Publisher </th>
<th> Date Added</th>
<th> Avaiable/Borrowed by </th>
</tr>
<?php
$con=mysqli_connect("localhost","","","test_database");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$result = mysqli_query($con,"SELECT * FROM Books ORDER BY book_name ");

while($row = mysqli_fetch_array($result))
  {
  echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td><td>".$row[4]."</td><td>";
	if ($row[4]=='Book Available' && $_SESSION['user'][4]=='No book borrowed')
		{echo '<form action="borrow.php" method="post"><input type="submit" value="Borrow"><input type="hidden" name="book" value="'.$row[0].'"></td></form>';}
	if ($row[4]=='Book Available' && $_SESSION['user'][4]!='No book borrowed')
		{echo 'Return Current Book to Borrow</td>';}
	echo '</tr>';
	}

mysqli_close($con);
?> 
</div>
</body>
</html>


