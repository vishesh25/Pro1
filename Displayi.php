<html>
<?php

$conn = mysql_connect('localhost', 'root', 'root');
	$sql = "use project";
	$retval = mysql_query( $sql, $conn );
	
	if(! $retval )
		echo mysql_error();
	$retval = mysql_query("select photo from photo");
	if(!$retval)
		echo mysql_error();

//echo copy('$data','http://127.0.0.1/Images/');
while ($row = mysql_fetch_array($retval)) 
{
	$img=$row['uid'];
	$sql = mysql_query("select * from user where uid='$img'")
   if($row['uid']==$img)
    {	
	   $image=$row['photo'];
		echo $image;
	//$img= copy('$data','http://127.0.0.1/Images/');
    }
}
?>
<img src="<?php echo $image;?>" width="170" height="200">
</html>
