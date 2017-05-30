<html>
<title>Personal Data Form</title>
<link rel='stylesheet' href='style.css'>
<?php include 'header.php';
include "connect.php";
$result=mysql_query("SELECT * FROM user WHERE username=(SELECT username FROM local)") or die(mysql_error());
$row = mysql_fetch_array($result);
$result1=mysql_query("SELECT * FROM pdata WHERE username=(select username from local)");
$row1=mysql_fetch_array($result1);
$fname=$row['first_name'];
$mname=$row['middle_name'];
$lname=$row['last_name'];
$sex=$row['sex'];
$email=$row['email_id'];
$uid=$row['uid'];
$addr=$row1['address'];
?>
<marquee>Personal Data Form year 2016-17.</marquee>
<center><h2>PERSONAL DATA </h2></center>
<marquee>UID:<?php echo $uid ?></marquee>
<br/><body>
<form action='dpverify.php' method='POST'>
<table width='30%'>
<tr>
<td><font size='5'>Full Name :</font></td>
<td><font size='5'><?php echo $fname ?>
</td>
<td><font size='5'><?php echo $mname ?>
</td>
<td><font size='5'><?php echo $lname ?>
</td></font>
</tr><br>
<tr>
<td> </td>
<td>First Name</td>
<td>Middle Name</td>
<td>Last Name</td>
</tr></table>
<table width='60%'>
<tr>
<td><font size='5'>Mother's Name :</font></td>
<td><font size='5'><input type='text' name='mofname' class="text5" placeholder="First Name"  /required value=<?php echo $row1['mofname']?>>
</td>
<td><font size='5'><input type='text' name='momname' class="text5" placeholder="Middle Name"  /required value=<?php echo $row1['momname']?>>
</td>
<td><font size='5'><input type='text' name='molname' class="text5" placeholder="Last Name"  /required value=<?php echo $row1['molname']?>>
</td></font>
</tr><br>
</table>
<table width='60%'>
<tr>
<td><font size='5'>Father's Name :</font></td>
<td><font size='5'><input type='text' name='fafname' class="text5" placeholder="First Name"  /required value=<?php echo $row1['fafname']?>>
</td>
<td><font size='5'><input type='text' name='famname' class="text5" placeholder="Middle Name"  /required value=<?php echo $row1['famname']?>>
</td>
<td><font size='5'><input type='text' name='falname' class="text5" placeholder="Last Name"  /required value=<?php echo $row1['falname']?>>
</td></font>
</tr><br>
</table>
<table width='60%'>
<tr>
<td><font size='5'>Grandmother's Name :</font></td>
<td><font size='5'><input type='text' name='gmfname' class="text5" placeholder="First Name"  /required value=<?php echo $row1['gmf']?>>
</td>
<td><font size='5'><input type='text' name='gmlname' class="text5" placeholder="Last Name"  /required value=<?php echo $row1['gml']?>>
</td></font>
</tr><br>
</table>
<table width='60%'>
<tr>
<td><font size='5'>Grandfather's Name :</font></td>
<td><font size='5'><input type='text' name='gffname' class="text5" placeholder="First Name"  /required value=<?php echo $row1['gff']?>>
</td>

<td><font size='5'><input type='text' name='gflname' class="text5" placeholder="Last Name"  /required value=<?php echo $row1['gfl']?>>
</td></font>
</tr><br>
</table>
<p><table width='10%'>
<tr></tr>
<tr>
<td><font size='5'>Sex :</td>
<td><font size='5'><?php echo $sex ?></td>
</tr>
</table>
<table width='50%' height='50%'>
<tr>
<td><font size='5'>Date of Birth
</td>
<td>:</td>
<td>
<select name='date' /required>
<option value=''>DD</option>
<option value='01'>01</option>
<option value='02'>02</option>
<option value='03'>03</option>
<option value='04'>04</option>
<option value='05'>05</option>
<option value='06'>06</option>
<option value='07'>07</option>
<option value='08'>08</option>
<option value='09'>09</option>
<option value='10'>10</option>
<option value='11'>11</option>
<option value='12'>12</option>
<option value='13'>13</option>
<option value='14'>14</option>
<option value='15'>15</option>
<option value='16'>16</option>
<option value='17'>17</option>
<option value='18'>18</option>
<option value='19'>19</option>
<option value='20'>20</option>
<option value='21'>21</option>
<option value='22'>22</option>
<option value='23'>23</option>
<option value='24'>24</option>
<option value='25'>25</option>
<option value='26'>26</option>
<option value='27'>27</option>
<option value='28'>28</option>
<option value='29'>29</option>
<option value='30'>30</option>
<option value='31'>31</option>
</select>

<select name='month' /required>
<option value=''>MM</option>
<option value='01'>01</option>
<option value='02'>02</option>
<option value='03'>03</option>
<option value='04'>04</option>
<option value='05'>05</option>
<option value='06'>06</option>
<option value='07'>07</option>
<option value='08'>08</option>
<option value='09'>09</option>
<option value='10'>10</option>
<option value='11'>11</option>
<option value='12'>12</option>
</select>

<select name='year' /required>
<option value=''>YYYY</option>
<option value='1991'>1991</option>
<option value='1992'>1992</option>
<option value='1993'>1993</option>
<option value='1994'>1994</option>
<option value='1995'>1995</option>
<option value='1996'>1996</option>
<option value='1997'>1997</option>
<option value='1998'>1998</option>
<option value='1999'>1999</option>
<option value='2000'>2000</option>
<option value='2001'>2001</option>
<option value='2002'>2002</option>
<option value='2003'>2003</option>
<option value='2004'>2004</option>
<option value='2005'>2005</option>
<option value='2006'>2006</option>
<option value='2007'>2007</option>
<option value='2008'>2008</option>
<option value='2009'>2009</option>
<option value='2010'>2010</option>
<option value='2011'>2011</option>
<option value='2012'>2012</option>
<option value='2013'>2013</option>
<option value='2014'>2014</option>
<option value='2015'>2015</option>
<option value='2016'>2016</option>
</select>
<font color='red'>*</td>
</tr>
<tr>
<td><font size='5'>Address</td>
<td>:</td>
<td><input type='text' name='address'  class="text5" /required  value="<?php echo $addr?>">
<font color='red'>*</td>
</tr>
<tr><td><font size='5'>Address line 2</td>
<td>:</td>
<td><input type='text' name='address2' class="text5"  value="<?php echo $row1['address2']?>">
</td>
</tr>
<tr><td><font size='5'>City</td>
<td>:</td>
<td><input type='text' name='city' /required class="text5"  value=<?php echo $row1['city']?>><font color='red'>*</font>
</td>
</tr>
<tr><td><font size='5'>State</td>
<td>:</td>
<td><input type='text' name='state' /required class="text5"  value=<?php echo $row1['state']?>>
<font color='red'>*</td>
</tr>
<tr><td><font size='5'>Pincode</td>
<td>:</td>
<td><input type='text' name='pincode' /required pattern='[1-9]{1}[0-9]{5}' class="text5"  value=<?php echo $row1['pincode']?>>
<font color='red'>*</td>
</tr>
<tr><td><font size='5'>Mobile No.</td>
<td>:</td>
<td><font size='4'>+91<input type='text' name='mbno' /required pattern='[7-9]{1}[0-9]{9}' class="text5"  value=<?php echo $row1['mbno']?>>
<font color='red'>*</td>
</tr>
<tr><td><font size='5'>Telephone No.</td>
<td>:</td>
<td><input type='text' name='teleno' pattern='[0]{1}[0-9]{3}[0-9]{7}' class="text5"  value=<?php echo $row1['telephone']?>>
</td>
</tr>
<tr>
<td><font size='5'>E-mail Address</td>
<td>:</td>
<td><font size='5'><?php echo $email ?>
</td></p></tr>
<tr><td><font size='5'>Website</td>
<td>:</td>
<td><input type='text' name='website' pattern="[w]{3}+\.+[a-z,A-z,0-9,.,_]+\.[a-z]" title="Website" placeholder='www.abc.com' class="text5"  value=<?php echo $row1['website']?>>
</td>
</tr>
<p>
</p></table>
<center><font color='red'>*</font><font color='blue'>: All the fields are compulsary.</font></center>
<br><center><input type='submit' value='Submit' class='button'>
</form>
</body>
</html>
