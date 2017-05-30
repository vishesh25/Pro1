<?php
$dbhost = 'localhost:3306';
$dbuser = 'root';
$dbpass = 'root';
$dbname = 'project';
$conn = mysql_connect($dbhost, $dbuser, $dbpass,$dbname) or die('Could not connect: ' . mysql_error());
mysql_query("CREATE DATABASE project");
mysql_select_db("project");
mysql_query("drop table local");
mysql_query("CREATE DATABASE developer");
mysql_select_db("developer");
mysql_query("CREATE TABLE user(id int PRIMARY KEY,first_name char(20),last_name char(20),sex char(10),email_id varchar(50),username varchar(20),password varchar(20))");
mysql_query("INSERT INTO user (id) VALUES (1)");
mysql_query("INSERT INTO user (id) VALUES (2)");
mysql_query("INSERT INTO user (id) VALUES (3)");
mysql_query("INSERT INTO user (id) VALUES (4)");
mysql_query("UPDATE user SET first_name='Vishesh',last_name='Shah',sex='Male',email_id='visheshshah100@gmail.com',username='Vishesh96',password='vivirocks' WHERE id=1");
mysql_query("UPDATE user SET first_name='Priyanka',last_name='Raut',sex='Female',email_id='praut2607@gmail.com',username='Priyanka26',password='praut2607' WHERE id=2");
mysql_query("UPDATE user SET first_name='Somesh',last_name='Pathak',sex='Male',email_id='psomesh1297@gmail.com',username='Somesh12',password='psomesh1297' WHERE id=3");
mysql_query("UPDATE user SET first_name='Rafique',last_name='Mulla',sex='Male',email_id='rafiquesm100@gmail.com',username='Rafique29',password='rafique0496' WHERE id=4");
mysql_query("drop table local");
?>
<html>
<title>Login Page</title>
<?php include "header.php";
?>
<marquee>Login Page for Developers</marquee><br>
<p><form action='dsubmit.php' method='POST'>
<link rel='stylesheet' href='style.css'>
<table align='center' width='20%'>
<tr>
<td>Username</td>
<td>:</td> 
<td><input type='text' name=uname class='text1'></td>
</tr>
<tr>
<td>Password</td>
<td>:</td> 
<td><input type='password' name=pass class='text1'></td>
</tr>
</table>
<p><center><input type='submit' value='Login' class="button"></p><br>
</form>
</p>
<form action="home.html">
<input type='submit' value="Click here to go to Home Page" class='button1'>
</form>
</body>
</html>
