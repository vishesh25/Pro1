<?php
$dbhost = 'localhost:3306';
$dbuser = 'root';
$dbpass = 'root';
$dbname = 'project';
$conn = mysql_connect($dbhost, $dbuser, $dbpass,$dbname) or die('Could not connect: ' . mysql_error());
mysql_query("CREATE DATABASE project") or die(mysql_error());
mysql_select_db("project") or die(mysql_error());
$user=mysql_query("CREATE TABLE user(first_name char(20),middle_name char(20),last_name char(20),sex char(10),email_id varchar(50),username varchar(20),password varchar(20))") or die(mysql_error());
$pdata=mysql_query("CREATE TABLE pdata(dob varchar(20),address varchar(50),address2 varchar(50),city char(20),state varchar(20),pincode int(6),mobile_no int(15),telephone int(15), website varchar(100))") or die(mysql_error());
$sdata=mysql_query("CREATE TABLE sdata(nationality char(30),nri char(20),migrated char(20),marital_stauts char(20),social_contri varchar(50),criminal_rec varchar(50),driving_no varchar(40))") or die(mysql_error());
$bdata=mysql_query("CREATE TABLE bdata(occupation char(50),bank_name varchar(50),acc_no varchar(50),branch char(30),IFSC_no varchar(50),acc_in_name char(50),bank_card varchar(50))") or die(mysql_error());
$mdata=mysql_query("CREATE TABLE mdata(age int(10),blood_grp varchar(10),family_doc char(50),consulting_doc char(50),consulting_hos char(50),medi_no varchar(30),general_health char(10),any_med char(50),local_an char(10),treated char(50))") or die(mysql_error());
mysql_query("CREATE DATABASE developer") or die(mysql_error());
mysql_select_db("developer") or die(mysql_error());
mysql_query("CREATE TABLE user(first_name char(20),last_name char(20),sex char(10),email_id varchar(50),username varchar(20),password varchar(20))") or die(mysql_error());
mysql_query("INSERT INTO user VALUES ('Vishesh','Shah','Male','visheshshah100@gmail.com','Vishesh96','vivirocks')") or die(mysql_error());
mysql_query("INSERT INTO user VALUES ('Priyanka','Raut','Female','praut2607@gmail.com','Priyanka26','praut2607')") or die(mysql_error());
mysql_query("INSERT INTO user VALUES ('Somesh','Pathak','Male','psomesh1297@gmail.com','Somesh12','psomesh1297')") or die(mysql_error());
?>
