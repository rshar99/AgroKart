
<?php

	   include_once('farmernavbar.php');
	?>
  <html>

	<head>

	<?php
	
	include_once('db.php');
	
	//session_start();
	$sino=$_REQUEST['sino'];


	//$sql="select * from crops where fid='$fid'";


	$sql="delete from crops where sino=$sino"; 

	$res=execute( $sql );

	
	echo "<center><h2>Ok,got deleted</h2></center>";
	
	
	?>

	</head>

	
