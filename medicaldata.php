<html>
<title>Medical Data Form</title>
<link rel='stylesheet' href='style.css'>
<?php include 'header.php';
include "connect.php";
$result=mysql_query("SELECT * FROM user WHERE username=(SELECT username FROM local)") or die(mysql_error());
$row = mysql_fetch_array($result);
$result1=mysql_query("SELECT * FROM pdata WHERE username=(select username from local)") or die(mysql_error());
$row1 = mysql_fetch_array($result1);
$result2=mysql_query("SELECT * FROM mdata WHERE username=(select username from local)") or die(mysql_error());
$row2 = mysql_fetch_array($result2);
$fname=$row['first_name'];
$mname=$row['middle_name'];
$lname=$row['last_name'];
$sex=$row['sex'];
$email=$row['email_id'];
$uid=$row['uid'];
$address=$row1['address'].", ".$row1['address2'].", ".$row1['city'].", ".$row1['state']; 
$mbno=$row1['mbno'];
?>
<marquee>Medical Data Form year 2016-17.</marquee>
<center><h2>MEDICAL DATA </h2></center>
<marquee>UID:<?php echo $uid ?></marquee>
<br/><br/>
<form action='mdverify.php' method='POST'>
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
<table width='10%'>
<tr>
<td><font size='5'>Sex</td> <td>:</td>
<td><font size='5'><?php echo $sex?></td>
</tr><br>
</p>
</table>
<table width='50%' height='50%'>
<tr><td><font size='5'>Blood Group</td>
<td>:</td>
<td><select name='bloodgrp' /required >
<option value=''>Select Blood Group</option>
<option value='O+ve'>O+ve</option>
<option value='A+ve'>A+ve</option>
<option value='B+ve'>B+ve</option>
<option value='AB+ve'>AB+ve</option>
<option value='O-ve'>O-ve</option>
<option value='A-ve'>A-ve</option>
<option value='B-ve'>B-ve</option>
<option value='AB-ve'>AB-ve</option>
</select>
<font color='red'>*</td>
</tr>
<tr>
<td><font size='5'>Address</td>
<td>:</td>
<td><font size='5'><?php echo $address?></td>
</tr>
<tr><td><font size='5'>Mobile No.</td>
<td>:</td>
<td><font size='5'><?php echo $mbno?></td>
</tr>
<tr><td><font size='5'>Name of Family Doctor</td>
<td>:</td>
<td><font size='5'>Dr.<input type='text' name='fdoc' class='text4' /required value=<?php echo $row2['family_doc']?>>
<font color='red'>*</td>
</tr>
<tr><td><font size='5'>Name of Consulting Doctor</td>
<td>:</td>
<td><font size='5'>Dr.<input type='text' name='cdoc' class='text4' /required value=<?php echo $row2['consulting_doc']?>>
<font color='red'>*</td>
</tr>
<tr><td><font size='5'>Name of Consulting Hospital</td>
<td>:</td>
<td><input type='text' name='hosp' class='text4' /required value=<?php echo $row2['consulting_hos']?>>
<font color='red'>*</td>
</tr>
<tr><td><font size='5'>Medical Insurance No.</td>
<td>:</td>
<td><input type='text' name='mino' class='text4' value=<?php echo $row2['medi_no']?>></td>
</tr>
</table>
<table width='50%'>
<tr><td><font size='5'>How is your General Health ?</td>
<td><font size='5'>Good<input type='radio' name='health' value='Good'></td>
<td><font size='5'>Fair<input type='radio' name='health' value='Fair'></td>
<td><font size='5'>Poor<input type='radio' name='health' value='Poor'></td>
</tr><br>
</p>
</table>
<table width='60%'>
<tr>
<td><font size='5'>Are you taking any medicine at present time ?</td><?php $present=false ?>
<td><font size='5'>Yes<input type='radio' name='medtime' value='Yes'></td><td><font size='5'>If Yes?<input type='text' name='medtext' class='text4'></td>
<td><font size='5'>No<input type='radio' name='medtime' value='No'></td>
</tr><br>
</p>
</table>
<table width='40%'>
<tr>
<td><font size='5'>Do you have any Difficulties with Local anaesthesia ?</td>
<td><font size='5'>Yes<input type='radio' name='anaes' value='Yes'></td>
<td><font size='5'>No<input type='radio' name='anaes' value='No'></td>
</tr><br>
</p>
</table>
<table width='90%'>
<tr>
<td><font size='5'>Have you ever had or been treated for any of the following ?</td>
<p><td><input type='checkbox' name='d' value='diabetes'><font size='5'>Diabetes</p></td>
<p><td><input type='checkbox' name='a' value='asthama'><font size='5'>Asthama</p></td>
<p><td><input type='checkbox' name='k' value='kidney'><font size='5'>Kidney Problem</p></td>
<p><td><input type='checkbox' name='l' value='liver'><font size='5'>Liver Problem</p></td>
<p><td><input type='checkbox' name='h' value='heart'><font size='5'>Heart Problem</p></td>
</tr><br>
</p>
</table>
<p>
<center><font color='red'>*</font><font color='blue'>: All the fields are compulsary.</font></center>
<br><center><input type='submit' value='Submit' class='button'>
</form>
</html>
