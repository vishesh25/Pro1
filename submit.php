<html>
<head><title>Home Page</title></head>
<body>
<?php include "header.php"; ?>
<marquee>Form for year 2016-17.</marquee><br>
<link rel='stylesheet' href='style.css'>
<center><p>
<?php
session_start();
$uname=$_POST['uname'];
$pass=$_POST['pass'];
include "connect.php";
$result=mysql_query("SELECT * FROM user WHERE username='$uname' AND password='$pass'") or die(mysql_error());
$row = mysql_fetch_array($result);	
$result1=mysql_query("SELECT * FROM local");
$row1 = mysql_fetch_array($result1);
if(($row['username'] AND $row['password']) OR ($row1['username'] AND $row1['password']))
{
if($row1['username'] AND $row1['password'])
{
$result=mysql_query("SELECT * FROM user WHERE username=(select username from local) AND password=(select password from local)") or die(mysql_error());
$row = mysql_fetch_array($result);	
}
else
{
mysql_query("CREATE TABLE local(username varchar(20),password varchar(20))");
mysql_query("DELETE FROM local");
mysql_query("INSERT INTO local(username,password) VALUES ('$uname','$pass')");
}
$name=$row['first_name']." ".$row['middle_name']." ".$row['last_name'];
echo "<center><h3>HOME PAGE </h3></center>";
echo "<marquee><h4>UID:".$row['uid'] ."</h4></marquee>";
echo "Welcome " .$name.".<br>";
echo "<p> ";
echo "<br/><form action='personaldata.php'>
<input type='submit' value='Click here to add data' class='button1'>
</form>";
echo "<br/><form action='showdata.php'>
<input type='submit' value='Click here to see data' class='button1'>
</form>";
echo "<br/><form action='home.html'>
<input type='submit' value='Logout' class='button1'>
</form>";
echo "</p>";

}
else
{
echo 'Password or Username is invalid<br>Please try again or signup<br><form action="home.html"><input type="submit" value="Click here to go to Home page" class="button1"></form>';
}

?>
</p>
</center>

</body>
</html>

