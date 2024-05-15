<?php

	include_once('db.php');
	include_once('adminnavbar.php');
	$slno=$_REQUEST['slno'];
	$mobno=$_REQUEST['mobno'];
	
	$sql="delete from farmers where slno=$slno";
	$res=execute( $sql );
	
	$sql="delete from registration where mobno='$mobno' ";
	$res=execute( $sql );
	
	
	$sql="delete from crops where fid='$mobno'";
	$res=execute( $sql );
	
	$sql="delete from bids where fid='$mobno'";
	$res=execute( $sql );
		
	echo "<center><h1>Farmer got deleted</h1></center>";
?>

<br/><br/>
