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

#customerregister
{
margin-left:260px;
width: 700px;
height:150px;
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
<h2> Customer Edit Personal Details Page</h2>
<br>
<br>
<div id="customerregister">
<form action="customereditdetailscheck.php" method="post">
<b>Username: <?php session_start();echo $_SESSION['user'][0]?></b> <br>
<b>Choose Password:</b> &nbsp <input type="password" name="password" <?php echo 'value="'.$_SESSION['user'][1].'"'?>><br>
<b>Email:</b>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <input type="text" name="email" <?php echo 'value="'.$_SESSION['user'][3].'"'?>><br>
<b>Phone Number:</b> &nbsp &nbsp &nbsp <input type="text" name="phonenumber" <?php echo 'value="'.$_SESSION['user'][2].'"'?>><br>
<br>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <input type="submit" value="EDIT DETAILS">
</form>

</div>
<a href="customerbooksort.php"> <div id="goback"><b>Click here to go back to Main page</b></div> </a>

</body>
</html>
