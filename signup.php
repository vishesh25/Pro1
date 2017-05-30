<?php
$dbhost = 'localhost:3306';
$dbuser = 'root';
$dbpass = 'root';
$dbname = 'project';
$conn = mysql_connect($dbhost, $dbuser, $dbpass,$dbname) or die('Could not connect: ' . mysql_error());
mysql_query("CREATE DATABASE project");
mysql_select_db("project");
$user=mysql_query("CREATE TABLE user(id int AUTO_INCREMENT PRIMARY KEY,uid varchar(20),first_name char(20),middle_name char(20),last_name char(20),sex char(10),email_id varchar(50),username varchar(20),password varchar(20))");
mysql_query("ALTER TABLE user AUTO_INCREMENT=1001");
$pdata=mysql_query("CREATE TABLE pdata(uid varchar(20),username varchar(20),dob varchar(50),address varchar(50),address2 varchar(50),city char(20),state varchar(20),pincode int(6),mbno varchar(20),telephone varchar(15), website varchar(100),mofname char(20),momname char(20),molname char(20), fafname char(20),famname char(20),falname char(20),gmf char(20),gml char(20),gff char(20),gfl char(20))");
$sdata=mysql_query("CREATE TABLE sdata(uid varchar(20),username varchar(20),nationality char(30),nri char(20),migrated char(20),marital_status char(20),social_contri varchar(50),criminal_rec varchar(50),driving_no varchar(40),photograph varchar(50),fingerprint varchar(50))");
$bdata=mysql_query("CREATE TABLE bdata(uid varchar(20),username varchar(20),occupation char(50),bank_name varchar(50),acc_no varchar(50),branch char(30),IFSC_no varchar(50),acc_in_name char(50),bank_card varchar(50))");
$mdata=mysql_query("CREATE TABLE mdata(uid varchar(20),username varchar(20),blood_grp varchar(10),family_doc char(50),consulting_doc char(50),consulting_hos char(50),medi_no varchar(30),general_health char(10),any_med char(50),medicine varchar(50),local_an char(10),treated char(50))");
?>
<html>
<head>
<title>Sign-Up Page</title>
</head>
<?php include "header.php" ?>
<marquee>Sign-Up Page for year 2016-17</marquee><br>
<link rel='stylesheet' href='style.css'>

<form action='verify.php' method='POST' method='GET'>
<table width='70%'>
<tr>
<td><font size='5'>Full Name :</td>
<td><input type='text' name='fname' class="text4" placeholder="First Name"  /required></td>
<td><input type='text' name='mname' class="text4" placeholder="Middle Name"   /required></td>
<td><input type='text' name='lname' class="text4" placeholder="Last Name"   /required></td>
</tr><br>
</table>
<table width='25%'>
<tr>
<td><font size='5'>Sex :</td>
<td><font size='5'>Male<input type='radio' name='gen' value='Male'></td>
<td><font size='5'>Female<input type='radio' name='gen' value='Female'></td>
<td><font size='5'>Other<input type='radio' name='gen' value='Other'></td>
</tr><br>
</p>
</table>
<table width='60%' height='30%'>
<p><tr>
<td><font size='5'>E-mail Address</td>
<td>:</td>
<td><input type='text' name='email' /required pattern=[a-z,A-Z,0-9]+\@+[a-z]+\.+[a-z]{3} class="text4" placeholder="xyz@abc.com"></td></tr>
<tr>
<td><font size='5'>Username</td>
<td>:</td>
<td><input type='text' name='username' class="text4" /required></td></tr>
<tr><td><font size='5'>Password</td>
<td>:</td>
<td><input type='password' name='passwd' class="text4" pattern=[a-z,A-Z,$,@,#,_,-,0-9]{8,16} title="Password must contain min. of 8 characters and max. of 16 characters"  /required><font size='4' color='green'>Password must contain min. of 8 characters and max. of 16 characters.</td></tr>
<tr><td><font size='5'>Re-enter password</td>
<td>:</td>
<td><input type='password' name='repass' class="text4" pattern=[a-z,A-Z,$,@,#,_,-,0-9]{8,16} title="Password must contain min. of 8 characters and max. of 16 characters" /required></td></tr>
</p></table>
<p><center><input type='submit' value='Submit' class="button"></p><br>
</form>
<form action="home.html">
<input type='submit' value="Click here to go to Home Page" class='button1'>
</form>
</body>
</html>
