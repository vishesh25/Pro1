
<?php
	
	$conn = mysql_connect('localhost', 'root', 'root');
	$sql = "use project";
	$retval = mysql_query( $sql, $conn );
	if(!$retval )
		echo mysql_error();

	$retval = mysql_query("select uid as uid from user order by uid desc limit 1");
	$row = mysql_fetch_array($retval);
        $temp = $row['uid'];	
	
	$photo = addslashes($_GET['photo']);
	$sql = "insert into photo values('$temp','$photo')";
	$retval = mysql_query($sql,$conn);

	if(!$retval)
		echo "Error : ".mysql_error();
	echo "done";

	//$data= copy('/home/admin1/Pictures/$data','/var/www/html/Images/');
		//header("Location: http://127.0.0.1/Displayi.php");

?>

