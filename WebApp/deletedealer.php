<?php

	include_once('db.php');
	include_once('adminnavbar.php');
	$mobno=$_REQUEST['mobno'];
	
	$sql="delete from registration where mobno=$mobno";
		
	$res=execute( $sql );
	
	echo "<center><h1>Dealer got deleted</h1></center>";
?>

<br/><br/>
