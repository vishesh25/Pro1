<?php include 'header.php';
include "connect.php";
$result=mysql_query("SELECT * FROM user WHERE username=(SELECT username FROM local)") or die(mysql_error());
$row = mysql_fetch_array($result);
$result1=mysql_query("SELECT * FROM pdata WHERE username=(SELECT username FROM local)") or die(mysql_error());
$row1 = mysql_fetch_array($result1);
$result2=mysql_query("SELECT * FROM sdata WHERE username=(SELECT username FROM local)") or die(mysql_error());
$row2 = mysql_fetch_array($result2);
$result3=mysql_query("SELECT * FROM bdata WHERE username=(SELECT username FROM local)") or die(mysql_error());
$row3 = mysql_fetch_array($result3);
$result4=mysql_query("SELECT * FROM mdata WHERE username=(SELECT username FROM local)") or die(mysql_error());
$row4 = mysql_fetch_array($result4);
$name=$row['first_name']." ".$row['middle_name']." ".$row['last_name'];
$fname=$row1['fafname']." ".$row1['famname']." ".$row1['falname'];
$mname=$row1['mofname']." ".$row1['momname']." ".$row1['molname'];
$gfname=$row1['gff']." ".$row1['gfl'];
$gmname=$row1['gmf']." ".$row1['gff']." ".$row1['gml'];
$sex=$row['sex'];
$email=$row['email_id'];
$username=$row['username'];
$uid=$row['uid'];
$dob=$row1['dob'];
$addr=$row1['address'];
$addr2=$row1['address2'];
$city=$row1['city'];
$state=$row1['state'];
$pincode=$row1['pincode'];
$mbno=$row1['mbno'];
$teleno=$row1['telephone'];
$website=$row1['website'];
$national=$row2['nationality'];
$nri=$row2['nri'];
$migrated=$row2['migrated'];
$marital=$row2['marital_status'];
$soc=$row2['social_contri'];
$crime=$row2['criminal_rec'];
$drive=$row2['driving_no'];
$occupation=$row3['occupation'];
$bname=$row3['bank_name'];
$baccount=$row3['acc_no'];
$bbranch=$row3['branch'];
$bifsc=$row3['IFSC_no'];
$bjoint=$row3['acc_in_name'];
$bcard=$row3['bank_card'];  
$blood=$row4['blood_grp'];
$fdoc=$row4['family_doc'];
$cdoc=$row4['consulting_doc'];
$hosp=$row4['consulting_hos'];
$mino=$row4['medi_no'];
$health=$row4['general_health'];
$med=$row4['any_med'];
$medicine=$row4['medicine'];
$anaes=$row4['local_an'];
$treated=$row4['treated'];
?>
<html>
<title>User Information </title>
<body>
<marquee>UID:<?php echo $uid ?></marquee>
<br/><br/>
<div align='center'><h2>PERSONAL DATA</h2></div>
<table width='60%' height='50%'>
<tr>
<td><font size='5'>Full Name</td>
<td>:</td>
<td><font size='5'><?php echo $name ?></td>
</tr>
<tr>
<td><font size='5'>Sex</td>
<td>:</td>
<td><font size='5'><?php echo $sex ?></td>
</tr>
<tr>
<td><font size='5'>E-mail ID</td>
<td>:</td>
<td><font size='5'><?php echo $email ?></td>
</tr>
<tr>
<td><font size='5'>Username</td>
<td>:</td>
<td><font size='5'><?php echo $username ?></td>
</tr>
<tr>
<td><font size='5'>Date Of Birth</td>
<td>:</td>
<td><font size='5'><?php echo $dob ?></td>
</tr>
<tr>
<td><font size='5'>Address</td>
<td>:</td>
<td><font size='5'><?php echo $addr ?></td>
</tr>
<?php
if(!empty($row1['address2']))
{
echo "<tr><td><font size='5'>Address Line 2</td><td>:</td><td><font size='5'>".$addr2 ."</td></tr>";
}
?>
<tr>
<td><font size='5'>City</td>
<td>:</td>
<td><font size='5'><?php echo $city ?></td>
</tr>
<tr>
<td><font size='5'>State</td>
<td>:</td>
<td><font size='5'><?php echo $state ?></td>
</tr>
<tr>
<td><font size='5'>Pincode</td>
<td>:</td>
<td><font size='5'><?php echo $pincode ?></td>
</tr>
<tr>
<td><font size='5'>Mobile Number</td>
<td>:</td>
<td><font size='5'><?php echo $mbno ?></td>
</tr>
<?php
if(!empty($row1['telephone']))
{
echo "<tr><td><font size='5'>Telephone Number</td><td>:</td><td><font size='5'>".$teleno ."</td></tr>";
}
?>
<?php
if(!empty($row1['website']))
{
echo "<tr><td><font size='5'>Website</td><td>:</td><td><font size='5'>".$website ."</td></tr>";
}
?>
<tr><td><font size='5'>Photograph</td><td>:</td>
<td><img id="photo" width='30%'></img></td></tr>
<tr><td><font size='5'>Fingerprint</td><td>:</td>
<td><img id="fin"></img></td></tr>
</table>
<br/><br/>
<div align='center'><h2>SOCIAL DATA</h2></div>
<table width='38%' height="30%">
<tr>
<td><font size='5'>Nationality</td>
<td>:</td>
<td><font size='5'><?php echo $national ?></td>
</tr>
<tr>
<td><font size='5'>NRI</td>
<td>:</td>
<td><font size='5'><?php echo $nri ?></td>
</tr>
<?php
if(!empty($row2['migrated']))
{
echo "<tr><td><font size='5'>Migrated</td><td>:</td><td><font size='5'>".$migrated ."</td></tr>";
}
?>
<tr>
<td><font size='5'>Marital Status</td>
<td>:</td>
<td><font size='5'><?php echo $marital ?></td>
</tr>
<?php
if(!empty($row2['social_contri']))
{
echo "<tr><td><font size='5'>Social Contribution</td><td>:</td><td><font size='5'>".$soc."</td></tr>";
}
?>
<?php
if(!empty($row2['criminal_rec']))
{
echo "<tr><td><font size='5'>Criminal Records</td><td>:</td><td><font size='5'>".$crime ."</td></tr>";
}
?>
<tr>
<td><font size='5'>Driving License no.</td>
<td>:</td>
<td><font size='5'><?php echo $drive ?></td>
</tr>
</table>
<br/><br/>
<div align='center'><h2>BANK DATA</h2></div>
<table width='40%' height='40%'>
<tr>
<td><font size='5'>Occupation</td>
<td>:</td>
<td><font size='5'><?php echo $occupation ?></td>
</tr>
<td><font size='5'>Name of Bank</td>
<td>:</td>
<td><font size='5'><?php echo $bname ?></td>
</tr>
<td><font size='5'>Account No.</td>
<td>:</td>
<td><font size='5'><?php echo $baccount ?></td>
</tr>
<td><font size='5'>Branch Name</td>
<td>:</td>
<td><font size='5'><?php echo $bbranch ?></td>
</tr>
<td><font size='5'>IFSC No.</td>
<td>:</td>
<td><font size='5'><?php echo $bifsc ?></td>
</tr>
<?php
if(!empty($row3['acc_in_name']))
{
echo "<tr><td><font size='5'>Account Held With</td><td>:</td><td><font size='5'>".$bjoint ."</td></tr>";
}
?>
<?php
if(!empty($row3['bank_card']))
{
echo "<tr><td><font size='5'>Bank Card No.</td><td>:</td><td><font size='5'>".$bcard ."</td></tr>";
}
?>
</table>
<br/><br/>
<div align='center'><h2>MEDICAL DATA</h2></div>
<table width='32%' height='40%'>
<tr>
<td><font size='5'>Blood Group</td>
<td>:</td>
<td><font size='5'><?php echo $blood ?></td>
</tr>
<tr>
<td><font size='5'>Family Doctor</td>
<td>:</td>
<td><font size='5'><?php echo $fdoc ?></td>
</tr>
<tr>
<td><font size='5'>Consulting Doctor</td>
<td>:</td>
<td><font size='5'><?php echo $cdoc ?></td>
</tr>
<tr>
<td><font size='5'>Consulting Hospital</td>
<td>:</td>
<td><font size='5'><?php echo $hosp ?></td>
</tr>
<?php
if(!empty($row4['medi_no']))
{
echo "<tr><td><font size='5'>Medical Insurance No.</td><td>:</td><td><font size='5'>".$mino ."</td></tr>";
}
?>
<?php
if(!empty($row4['general_health']))
{
echo "<tr><td><font size='5'>About your General Health</td><td>:</td><td><font size='5'>".$health ."</td></tr>";
}
?>
<?php
if(!empty($row4['any_med']))
{
echo "<tr><td><font size='5'>Medicines</td><td>:</td><td><font size='5'>".$med ."</td></tr>";
}
?>
<?php
if($med=='Yes')
{
if(!empty($row4['medicine']))
{
echo "<tr><td><font size='5'>Medicine which you are taking</td><td>:</td><td><font size='5'>".$medicine ."</td></tr>";
}
}
?>
<?php
if(!empty($row4['local_anaes']))
{
echo "<tr><td><font size='5'>Difficulties with Local Anaesthesia </td><td>:</td><td><font size='5'>".$anaes ."</td></tr>";
}
?>
<?php
if(!empty($row4['treated']))
{
echo "<tr><td><font size='5'>Treated with Diseases</td><td>:</td><td><font size='5'>".$treated ."</td></tr>";
}
echo "</table>";

?>
<div align='center'><h2>FAMILY DETAILS</h2></div>
<table width='32%' height='30%'>
<tr>
<td><font size='5'>Father's Name</td>
<td>:</td>
<td><font size='5'><?php echo $fname ?></td>
</tr>
<tr>
<td><font size='5'>Mother's Name</td>
<td>:</td>
<td><font size='5'><?php echo $mname ?></td>
</tr>
<tr>
<td><font size='5'>Grandfather's Name:</td>
<td>:</td>
<td><font size='5'><?php echo $gfname ?></td>
</tr>
<tr>
<td><font size='5'>Grandmother's Name</td>
<td>:</td>
<td><font size='5'><?php echo $gmname ?></td>
</tr>
</table>

<br/><br/><br/>
<link rel='stylesheet' href='style.css'>
<center>
<br/><br/><br/><form action="submit.php">
<input type='submit' value="Home Page" class='button'>
</form>
</body>
</html>

<script>
document.getElementById('photo').src="Images/"+"<?php echo $uid.'p';?>";
document.getElementById('fin').src="Images/"+"<?php echo $uid.'f';?>";
</script>
