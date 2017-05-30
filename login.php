<html>
<title>Login Page</title>
<?php include "header.php";
include "connect.php";
mysql_query("DROP TABLE local"); ?>
<marquee>Login Page for Project Report 2016-17</marquee><br>
<p><form action='submit.php' method='POST'>
<link rel='stylesheet' href='style.css'>
<br/><br/><br/>
<table align='center' width='20%' height='10'>
<tr>
<td><font size='4' family="times new roman">Username</font></td>
<td>:</td> 
<td><input type='text' name=uname class='text'></td>
</tr>
<tr>
<td><font size='4' family="times new roman">Password</font></td>
<td>:</td> 
<td><input type='password' name=pass class='text'></td>
</tr>
</table>
<style> 
 
</style>

<p><center><input type='submit' value='Login' class='button'></p><br>
</form>
<br/><br/>
<form action="home.html">
<input type='submit' value="Click here to go to Home Page" class='button1'>
</form>
</body>
</html>
