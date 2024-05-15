        <?php
    include_once('farmernavbar.php');
	include_once('db.php');

	//session_start();
	$fid=$_SESSION['mobno'];


	$sino=$_POST['sino'];

	//$cropname=$_POST['cropname'];
	//$quality=$_POST['quality'];
	
	$qnt=$_POST['qnt'].' '.$_POST['cunit'];
	
	$estprice=$_POST['estprice'].' / '.$_POST['punit'];
	
	



	$sql="update crops set qnt='$qnt',estprice='$estprice' where( sino=$sino and fid='$fid')";
	
	$res=execute( $sql );

	if( !$res )
	{
	echo "Could not run the query";
	exit();
	}

	echo "<center><b><i>Ok the crop details have been updated</i></b><br><br><a href=viewcrop.php >Return</a></center>";
	

	

	?>
