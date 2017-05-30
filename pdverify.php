<link rel='stylesheet' href='style.css'>

<?php 
include 'header.php'; 
echo "<marquee>Verification Page for Personal Data year 2016-17.</marquee>";
session_start();
$date=$_POST['date'];
$month=$_POST['month'];
$year=$_POST['year'];
$address=$_POST['address'];
$address2=$_POST['address2'];
$city=$_POST['city'];
$state=$_POST['state'];
$pincode=$_POST['pincode'];
$mbno=$_POST['mbno'];
$teleno=$_POST['teleno'];
$website=$_POST['website'];
$mof=$_POST['mofname'];
$mom=$_POST['momname'];
$mol=$_POST['molname'];
$faf=$_POST['fafname'];
$fam=$_POST['famname'];
$fal=$_POST['falname'];
$gff=$_POST['gffname'];
$gfl=$_POST['gflname'];
$gmf=$_POST['gmfname'];
$gml=$_POST['gmlname'];

echo "<center>";
$dob = $date."/".$month."/".$year; 
$result=true;
if(($year%4)==0)
{
if($month=='02')
{
if($date>29)
{
echo "<p>Invalid input of Date of Birth.<br>";
echo "Please enter a valid date between 1 to 29.";
$result=false;
}
}
}
elseif(($year%4)!=0)
{
if($month=='02' and $date>'28')
{
echo "<p>Invalid input of Date of Birth.<br>";
echo "Please enter a valid date between 1 to 28.";
$result=false;
}
}
if($month=='04' or $month=='06' or $month=='09' or $month=='11')
{
if($date>30)
{
echo "<p>Invalid input of Date of Birth.<br>";
echo "Please enter a valid date between 1 to 30.";
$result=false;
}
}
if($result==true)
{
include "connect.php";
mysql_query("UPDATE pdata SET dob='$dob',address='$address',address2='$address2',city='$city',state='$state',pincode='$pincode',mbno='$mbno',telephone='$teleno',website='$website',mofname='$mof',momname='$mom',molname='$mol',fafname='$faf',famname='$fam',falname='$fal',gff='$gff',gfl='$gfl',gmf='$gmf',gml='$gml'  WHERE username=(select username from local)") or die('Sorry');
echo "<br/><br/><br/><br/><br/><br/><br/><br/>Created Successfully ......<br/><br/><br/><br/>";
echo "<table width='30%'>";
echo '<form action="personaldata.php">';
echo "<tr><td><input type='submit' value='Previous Page' class='button'></td>";
echo "</form>";
echo '<form action="socialdata.php">';
echo "<td><input type='submit' value='Next Page' class='button'></td></tr>";
echo "</form></table>";
echo '<br/><br/><br/><form action="submit.php">';
echo "<input type='submit' value='Home Page' class='button'>";
echo "</form>";
}
$sql=mysql_query("select * from user where username=(select username from local)");
$img=mysql_fetch_array($sql);
$photo=$_FILES['photo']['tmp_name'];
$fin=$_FILES['fin']['tmp_name'];
$target_dir='Images/';
$file0=$target_dir.basename($img['uid'].'p');
$file1=$target_dir.basename($img['uid'].'f');
fopen($file0);
fopen($file1);
$ans=move_uploaded_file($photo,$file0);
$ans1=move_uploaded_file($fin,$file1);
if(isset($_FILES['photo'])){
echo "true";
}
if(isset($_FILES['fin'])){
echo "true";
}

?>	

