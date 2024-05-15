<?php

	include('db.php');
	
	$mobno=$_REQUEST['mobno'];
	
	$sql="select * from registration where mobno='$mobno' ";
	
	$res=execute($sql);
	
	$row=$res->fetch_object();
	
	if( $row )
	echo "1";
	else 
	echo "0";

?>
