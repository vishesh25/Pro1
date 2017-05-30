<!DOCTYPEhtml>
<html>
<head><title>Verification Page</title><head>
<?php include "header.php"; ?>
<marquee>Verification Page.</marquee><br>
<link rel='stylesheet' href='style.css'>
<center><p>
<?php
session_start();
include "connect.php";
$fname=$_POST['fname'];
$mname=$_POST['mname'];
$lname=$_POST['lname'];
$gen=$_POST['gen'];
$email=$_POST['email'];
$username=$_POST['username'];
$_SESSION['passwd']=$_POST['passwd'];
$_SESSION['repass']=$_POST['repass'];
$query=mysql_query("select * from user where username='$username' and email_id='$email' ");
$row=mysql_fetch_array($query);
if($_SESSION['passwd']!=$_SESSION['repass'])
{
echo "<br>Password doesnot match.<br>Please enter the password.<br>";
echo '<br/><br/><form action="signup.php">';
echo '<br/><input type="submit" value="Click here to go to Signup Page" class="button1">';
echo '</form>';
}
elseif($row['username']==$username and $row['email_id']==$email)
{
if($row['username']==$username)
{
echo "<br>Username already exists.<br>Please enter the new username.<br>";
}
elseif($row['email_id']==$email)
{
echo "<br>Email-ID already exists.<br>Please enter the new email address.<br>";
}
echo '<form action="signup.php">';
echo '<br/><input type="submit" value="Click here to go to Signup Page" class="button1">';
echo '</form>';
}
else
{
$passwd=$_POST['passwd'];
echo "<br>You have successfully created your account.<br>";
$signup="INSERT INTO user (first_name,middle_name,last_name,sex,email_id,username,password) VALUES ('$fname','$mname','$lname','$gen','$email','$username','$passwd')";
$retval = mysql_query($signup); 
if(! $retval ) {
 die('Could not create table: ' . mysql_error()); }

$u="U";
if($gen=='Male')
$u=$u. 111;
elseif($gen=='Female')
$u=$u. 110;
else
$u=$u. 100;
$q=str_split($fname,1);
$u=$u.$q[0];
$q=str_split($mname,1);
$u=$u.$q[0];
$q=str_split($lname,1);
$u=$u.$q[0];
$result=mysql_query("SELECT * FROM user WHERE username='$username'");
$row=mysql_fetch_array($result);
$i = $row['id'];
$u = $u . $i;
mysql_query("UPDATE user SET uid='$u' WHERE username='$username'");
mysql_query("INSERT INTO pdata(uid,username) VALUES ('$u','$username')");
mysql_query("INSERT INTO bdata(uid,username) VALUES ('$u','$username')");
mysql_query("INSERT INTO sdata(uid,username) VALUES ('$u','$username')");
mysql_query("INSERT INTO mdata(uid,username) VALUES ('$u','$username')");

echo '<br/><br/><br/><font color="green">UID created ..... </font><font color="red">"'.$u.'"</font><br/><br/>';

}
?>
</p>
<br/>
<form action="home.html">
<input type='submit' value="Click here to go to Home Page" class='button1'>
</form>
</center>
</html>
