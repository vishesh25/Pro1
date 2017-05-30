<link rel='stylesheet' href='style.css'>

<?php
include 'header.php'; 
echo "<marquee>Verification Page for Bank Data year 2016-17.</marquee>";
session_start();
$occupation=$_POST['occupation'];
$bname=$_POST['bname'];
$baccount=$_POST['baccount'];
$bbranch=$_POST['bbranch'];
$bifsc=$_POST['bifsc'];
$bjoint=$_POST['bjoint'];
$bcard=$_POST['bcard'];
echo "<center>";

include "connect.php";
mysql_query("UPDATE bdata SET occupation='$occupation',bank_name='$bname',acc_no='$baccount',branch='$bbranch',IFSC_no='$bifsc',acc_in_name='$bjoint',bank_card='$bcard' WHERE username=(select username from local)") or die(mysql_error());
echo "<br/><br/><br/><br/><br/><br/><br/><br/>Created Successfully ......<br/><br/><br/><br/>";
echo "<table width='30%'>";
echo '<form action="dbankdata.php">';
echo "<tr><td><input type='submit' value='Previous Page' class='button'></td>";
echo "</form>";
echo '<form action="dmedicaldata.php">';
echo "<td><input type='submit' value='Next Page' class='button'></td></tr>";
echo "</form></table>";
echo '<br/><br/><br/><form action="dedit.php">';
echo "<input type='submit' value='Home Page' class='button'>";
echo "</form>";


?>
