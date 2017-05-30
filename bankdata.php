<html>
<title>Bank Account Data Form</title>
<link rel='stylesheet' href='style.css'>
<?php include 'header.php';
include "connect.php";
$result=mysql_query("SELECT * FROM user WHERE username=(SELECT username FROM local)") or die(mysql_error());
$row = mysql_fetch_array($result);
$result1=mysql_query("SELECT * FROM bdata WHERE username=(select username from local)") or die(mysql_error());
$row2 = mysql_fetch_array($result1); 
$fname=$row['first_name'];
$mname=$row['middle_name'];
$lname=$row['last_name'];
$sex=$row['sex'];
$email=$row['email_id'];
$uid=$row['uid'];
?>
<marquee>Bank Account Data Form year 2016-17.</marquee>
<center><h2>BANK ACCOUNT DATA </h2></center>
<marquee>UID:<?php echo $uid ?></marquee>
<br/><br/>
<form action='bdverify.php' method='POST'>
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
<p><tr>
<td><font size='5'>Occupation</td>
<td>:</td>
<td><input type='text' name='occupation'  /required class="text3" value=<?php echo $row2['occupation']?>><font color='red'>*</font></td></tr>
<tr>
<td><font size='5'>Name of the Bank</td>
<td>:</td>
<td><input type='text' name='bname'  /required class="text3" value=<?php echo $row2['bank_name']?>><font color='red'>*</font></td></tr>
<tr>
<td><font size='5'>Account Number</td>
<td>:</td>
<td><input type='text' name='baccount' pattern=[0-9]{11} /required class="text3" value=<?php echo $row2['acc_no']?>><font color='red'>*</font></td></tr>
<tr>
<td><font size='5'>Branch of the Bank</td>
<td>:</td>
<td><input type='text' name='bbranch'  /required class="text3" value=<?php echo $row2['branch']?>><font color='red'>*</font></td></tr>
<tr>
<td><font size='5'>IFSC Number</td>
<td>:</td>
<td><input type='text' name='bifsc' pattern=[A-Z]{3}[0-9]{8} /required class="text3" value=<?php echo $row2['IFSC_no']?>><font color='red'>*</font></td></tr>
<tr>
<td><font size='5'>Account Held in the Name of</td>
<td>:</td>
<td><input type='text' name='bjoint' class="text3" value=<?php echo $row2['acc_in_name']?>></td></tr>
<tr>
<td><font size='5'>Bank Card Number</td>
<td>:</td>
<td><input type='text' name='bcard' pattern='[0-9]{10}' class="text3" value=<?php echo $row2['bank_card']?>>
</p></table>
<center><p><font color='red'>*</font><font color='blue'>: All the fields are compulsary.</font></p></center>
<br><center><p><input type='submit' value='Submit' class='button'></p></center>
</form>
</html>

