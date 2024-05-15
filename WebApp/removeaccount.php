<?php

	include_once('farmernavbar.php');
	include_once('db.php');
	
	session_start();
	$fid=$_SESSION['mobno'];
	
	$sql="delete from registration where mobno='$fid' ";
	$res=execute( $sql );
	
	
	$sql="delete from farmers where mobno='$fid' ";
	$res=execute( $sql );
	
	
	$sql="delete from crops where fid='$fid' ";
	$res=execute( $sql );
		
	$sql="delete from bids where fid='$fid' ";
	$res=execute( $sql );
	
	echo "<center><h2>Your account got removed</h2></center>";
	

	unset( $_SESSION['mobno'] );
	
	header('Location:index.php');
?>
