<?
mysql_query("CREATE TABLE user(first_name char(20),last_name char(20),sex char(10),email_id varchar(50),username varchar(20),password varchar(20))") or die(mysql_error());
mysql_query("INSERT INTO user VALUES ('Vishesh','Shah','Male','visheshshah100@gmail.com','Vishesh96','vivirocks')") or die(mysql_error());
mysql_query("INSERT INTO user VALUES ('Priyanka','Raut','Female','praut2607@gmail.com','Priyanka26','praut2607')") or die(mysql_error());
mysql_query("INSERT INTO user VALUES ('Somesh','Pathak','Male','psomesh1297@gmail.com','Somesh12','psomesh1297')") or die(mysql_error());
?>
