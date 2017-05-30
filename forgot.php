<html>
<head>
<title>Forgot password</title>
</head>
<body>
<center>
<?php include "header.php"?> 
<marquee>Forgot Page</marquee>
<link rel='stylesheet' href='style.css'>
<form method=GET>
<TR>
<TD><center>
<div id="contact"> 
        <div class="input_label user"> 
            <label for="name"> 
                Username</label></div> 
        <input name="uname" type="text" id="name" class="name" size="30" value=""> 
    </div> 
<br> 
<div id="contact"> 
        <div class="input_label user"> 
            <label for="name"> 
                Email-ID</label></div> 
        <input name="mail" type="text" id="name" class="name" size="30" value=""> 
    </div> 
 
<p><input type='submit' value='Check' class='button'></p>
</form><br/>

<?php
session_start();
$mail=$_GET['mail'];
$uname=$_GET['uname'];
$dbhost = 'localhost:3306';
$dbuser = 'root';
$dbpass = 'root';
$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die('Could not connect: ' . mysql_error());
mysql_select_db("project") or die(mysql_error());
$result=mysql_query("SELECT * FROM user WHERE email_id='$mail' and username='$uname'") or die('This Username or E-mail id does not exist.<br>'.mysql_error());
$row = mysql_fetch_array($result) ;

if(!empty($_GET['mail']) and !empty($_GET['uname']))
{
if($row['email_id']==$mail and $row['username']==$uname)
{
mysql_query("CREATE TABLE local1(username varchar(20),email varchar(50))");
mysql_query("DELETE FROM local1");
$result1=mysql_query("INSERT INTO local1(username,email) VALUES ('$uname','$mail')");
$row1 = mysql_fetch_array($result1) ;
echo "<br/><br/>";
echo $row['first_name']. " " .$row['last_name'];
echo '<form method="GET"><br/><br/><div id="contact"> 
        <div class="input_label user"> 
            <label for="name"> 
                Password</label></div> 
        <input name="passwd" type="password" id="name" class="name" size="30" pattern=[a-z,A-Z,$,@,#,_,-,0-9]{8,16}> 
    </div> 
<br> 
<div id="contact"> 
        <div class="input_label user"> 
            <label for="name"> 
                Re-enter</label></div> 
        <input name="repass" type="password" id="name" class="name" size="30" pattern=[a-z,A-Z,$,@,#,_,-,0-9]{8,16}>
    </div><br/> <font size="4" color="green">Password must contain min. of 8 characters and max. of 16 characters.</font><br/><br/>';
echo "<input type='submit' value='Verify' class='button'>";
}
else
{
echo "This Username and E-mail id does not exist.<br>";
echo "Please try again or Create a new account <a href='http://localhost/signup.php'>here.</a>";
}
}
echo "<br/><br/></form>";
echo "<form method=GET>";
$passwd=$_GET['passwd'];
$repass=$_GET['repass'];
if(!empty($passwd) and !empty($repass))
{
if($passwd==$repass)
{
mysql_query("UPDATE user SET password='$passwd' WHERE username=(SELECT username FROM local1) and email_id=(SELECT email FROM local1)");
echo "<form action='login.php'>";
echo "Password sucessfully changed.....<br/><br/>";
echo "<input type='submit' value='Click here to go to Login Page' class='button1'>";
echo "</form>";	

}
else{
echo "<br>Password doesnot match.<br>Please enter the password.<br>";

}
}
echo "</form>";
?>
<br/><br/><br/>
<form action="home.html">
<input type='submit' value="Click here to go to Home Page" class='button1'>
</form>
</body>
</html>
