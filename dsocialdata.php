<html>
<title>Social Data Form</title>
<link rel='stylesheet' href='style.css'>
<?php include 'header.php';
include "connect.php";
$result=mysql_query("SELECT * FROM user WHERE username=(SELECT username FROM local)") or die(mysql_error());
$row = mysql_fetch_array($result);
$result1=mysql_query("SELECT * FROM sdata WHERE username=(select username from local)") or die(mysql_error());
$row2 = mysql_fetch_array($result1); 
$fname=$row['first_name'];
$mname=$row['middle_name'];
$lname=$row['last_name'];
$sex=$row['sex'];
$email=$row['email_id'];
$uid=$row['uid'];
?>
<marquee>Social Data Form year 2016-17.</marquee>
<center><h2>SOCIAL DATA </h2></center>
<marquee>UID:<?php echo $uid ?></marquee>
<br/><br/>
<form  action='dsverify.php' method='POST'>
<table width='30%'>
<tr>
<td><font size='5'>Full Name :</td>
<td><font size='5'><?php echo $fname;?>
</td>
<td><font size='5'><?php echo $mname;?>
</td>
<td><font size='5'><?php echo $lname;?>
</td>
</tr><br>
<tr>
<td> </td>
<td>First Name</td>
<td>Middle Name</td>
<td>Last Name</td>
</tr></table>
<table width='50%' height='50%'>
<tr>
<h6><td><font size='5'>Nationality</td>
<td>:</td>
<td><input type="text" name="national" /required class="text5" value=<?php echo $row2['nationality']?>><font color='red'>*</font></td></tr>
<tr>
<td><font size='5'>NRI</td>
<td>:</td>
<td><font size='5'>Yes<input type='radio' name='nri' value='Yes'>
<font size='5'>No<input type='radio' name='nri' value='No'><font color='red'>*</font></td></tr>
<tr>
<td><font size='5'>Migrated</td>
<td>:</td>
<td><input type='text' name='migrate' class="text5" value=<?php echo $row2['migrated']?>></td></tr>
<tr>
<td><font size='5'>Marital Status</td>
<td>:</td>
<td><font size='5'>Single<input type='radio' name='marital' value='Single'>
<font size='5'>Married<input type='radio' name='marital' value='Married'><font color='red'>*</font></td></tr>
<tr>
<td><font size='5'>Social Contribution</td>
<td>:</td>
<td><input type='text' name='soc' class="text5" value=<?php echo $row2['social_contri']?>></td></tr>
<tr>
<td><font size='5'>Criminal Records</td>
<td>:</td>
<td><input type='text' name='crime' class="text5" value=<?php echo $row2['crime']?>></td></tr>
<tr>
<td><font size='5'>Driving License No.</td>
<td>:</td>
<td><input type='text' name='drive' class="text5" value=<?php echo $row2['driving_no']?>><font color='red'>*</font></td></tr>
</table>
<center>
<p><center><font color='red'>*</font><font color='blue'>: All the fields are compulsary.</font></center></p><br>
<p>
<input type="submit" value="Submit" class="button"></center></p>
</form>

</html>
