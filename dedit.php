<html>
<title>Search user</title>
<link rel='stylesheet' href='style.css'>
<?php include "header.php"; ?>
<br/><br/>
<form method='GET'>
<center>
<input type='submit' name='button' value="Display UID " class='button' />
</form>
<br/><br/>
<?php
include("connect.php");
if(isset($_GET['button']))
{
$query = mysql_query("select * from user") or die(mysql_error());
$rows = mysql_num_rows($query) or die(mysql_error());
if ($rows>0) 
{
	
echo "<center><table width='50%' border='5%'><tr><td>UID</td><td>Full Name</td></tr>";

while($row=mysql_fetch_array($query))

{
echo "<tr><td>".$row["uid"]."</td><td><center>".$row["first_name"]." ".$row["middle_name"]." ".$row["last_name"]."</td></tr>";
}

echo "</table><br/><br/>";
}


}

?>

<form method=GET>
<TR>
<TD><center>
<div id="contact"> 
        <div class="input_label user"> 
            <label for="name"> 
               Enter UID</label></div> 
        <input name="uname" type="text" id="name" class="name" size="30" value=""> 
    </div> 

<br/><br/>
<input type='submit' value='Check' class='button'>
</form><br/><br/><br/>

<?php
session_start();
$uid=$_GET['uname'];
$dbhost = 'localhost:3306';
$dbuser = 'root';
$dbpass = 'root';
$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die('Could not connect: ' . mysql_error());
mysql_select_db("project") or die(mysql_error());
$result=mysql_query("SELECT * FROM user WHERE uid='$uid'") or die('This Username or E-mail id does not exist.<br>'.mysql_error());
$row = mysql_fetch_array($result) ;
$result1=mysql_query("SELECT * FROM local");
$row1 = mysql_fetch_array($result1);
if(($row['uid']==$uid) OR ($row1['uid']==$uid))
{
if(empty($uid))
{
if($row1['uid'])
{
$result=mysql_query("SELECT * FROM user WHERE uid='$uid'") or die(mysql_error());
$row2 = mysql_fetch_array($result);
echo "<br/><br/><br/>";
echo 'Edit information for '.$row2['first_name']. " " .$row2['last_name'];
echo "<br/><br/><br/>";
echo "<br/><form action='dpersonaldata.php'>
<input type='submit' value='Click here to edit personal data' class='button1'>
</form>";
echo "<br/><form action='dsocialdata.php'>
<input type='submit' value='Click here to edit social data' class='button1'>
</form>";
echo "<br/><form action='dbankdata.php'>
<input type='submit' value='Click here to edit bank data' class='button1'>
</form>";
echo "<br/><form action='dmedicaldata.php'>
<input type='submit' value='Click here to edit medical data' class='button1'>
</form>";
echo "<br/><form action='dshowdata.php'>
<input type='submit' value='Click here to see data' class='button1'>
</form>";
}
}
else{
mysql_query("CREATE TABLE local(uid varchar(20))");
mysql_query("DELETE FROM local");
$result1=mysql_query("INSERT INTO local (uid) VALUES ('$uid')");
$row1 = mysql_fetch_array($result1) ;
if(!empty($uid))
{
echo "<br/><br/><br/>";
echo 'Edit information for '.$row['first_name']. " " .$row['last_name'];
echo "<br/><br/><br/>";
echo "<br/><form action='dpersonaldata.php'>
<input type='submit' value='Click here to edit personal data' class='button1'>
</form>";
echo "<br/><form action='dsocialdata.php'>
<input type='submit' value='Click here to edit social data' class='button1'>
</form>";
echo "<br/><form action='dbankdata.php'>
<input type='submit' value='Click here to edit bank data' class='button1'>
</form>";
echo "<br/><form action='dmedicaldata.php'>
<input type='submit' value='Click here to edit medical data' class='button1'>
</form>";
echo "<br/><form action='dshowdata.php'>
<input type='submit' value='Click here to see data' class='button1'>
</form>";
}
}

}
else
{
echo "This UID does not exist.<br>";
}
echo "<br/><form action='home.html'>
<input type='submit' value='Click here to go to Home page' class='button1'>
</form>";
?>
</body>
</html>
