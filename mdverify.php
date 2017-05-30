<link rel='stylesheet' href='style.css'>

<?php
include 'header.php'; 
echo "<marquee>Verification Page for Medical Data year 2016-17.</marquee>";
session_start();
$blood=$_POST['bloodgrp'];
$fdoc='Dr.'.$_POST['fdoc'];
$cdoc='Dr.'.$_POST['cdoc'];
$hosp=$_POST['hosp'];
$mino=$_POST['mino'];
$health=$_POST['health'];
$med=$_POST['medtime'];
$medtext=$_POST['medtext'];
$anaes=$_POST['anaes'];
$di=$_POST['d']." ".$_POST['a']." ".$_POST['k']." ".$_POST['l']." ".$_POST['h'];
echo "<center>";

include "connect.php";
mysql_query("UPDATE mdata SET blood_grp='$blood',family_doc='$fdoc',consulting_doc='$cdoc',consulting_hos='$hosp',medi_no='$mino',general_health='$health',any_med='$med',medicine='$medtext',local_an='$anaes',treated='$di'  WHERE username=(select username from local)") or die(mysql_error());
echo "<br/><br/><br/><br/><br/><br/><br/><br/>Created Successfully ......<br/><br/><br/><br/>";
echo "<table width='30%'>";
echo '<form action="medicaldata.php">';
echo "<tr><td><input type='submit' value='Previous Page' class='button'></td>";
echo "</form>";
echo '<form action="showdata.php">';
echo "<td><input type='submit' value='Next Page' class='button'></td></tr>";
echo "</form></table>";
echo '<br/><br/><br/><form action="submit.php">';
echo "<input type='submit' value='Home Page' class='button'>";
echo "</form>";
?>
