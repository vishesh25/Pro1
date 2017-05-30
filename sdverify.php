<link rel='stylesheet' href='style.css'>

<?php
include 'header.php'; 
echo "<marquee>Verification Page for Social Data year 2016-17.</marquee>";
session_start();
$national=$_POST['national'];
$nri=$_POST['nri'];
$migrate=$_POST['migrate'];
$marital=$_POST['marital'];
$soc=$_POST['soc'];
$crime=$_POST['crime'];
$drive=$_POST['drive'];
$photo=$_POST['photo'];
$finpri=$_POST['finpri'];
echo "<center>";

include "connect.php";
mysql_query("UPDATE sdata SET nationality='$national',nri='$nri',migrated='$migrate',marital_status='$marital',social_contri='$soc',criminal_rec='$crime',driving_no='$drive' WHERE username=(select username from local)") or die(mysql_error());
echo "<br/><br/><br/><br/><br/><br/><br/><br/>Created Successfully ......<br/><br/><br/><br/>";
echo "<table width='30%'>";
echo '<form action="socialdata.php">';
echo "<tr><td><input type='submit' value='Previous Page' class='button'></td>";
echo "</form>";
echo '<form action="bankdata.php">';
echo "<td><input type='submit' value='Next Page' class='button'></td></tr>";
echo "</form></table>";
echo '<br/><br/><br/><form action="submit.php">';
echo "<input type='submit' value='Home Page' class='button'>";
echo "</form>";
?>
