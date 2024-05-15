
<?php
        include_once('farmernavbar.php');
	include_once('db.php');

	//session_start();
	$fid=$_SESSION['mobno'];



	$cropname=$_POST['cropname'];
	$quality=$_POST['quality'];
	
	$qnt=$_POST['qnt'].' '.$_POST['cunit'];
	
	$estprice=$_POST['estprice'].' /'.$_POST['punit'];

	$sql2="select sino from crops where fid='$fid' and cropname='$cropname' and quality='$quality'";
	
	$res=execute($sql2);
	$row=$res->fetch_object();
	if($row)
	{
	echo "<center><br/><br/><h1 class='text-danger'><i>This crop details already uploaded</i></b></h1><br><br><a href=selectcrop.php class='btn btn-primary' >Return</a></center>";
	exit(0);
	}
	$sql="insert into crops(fid,cropname,quality,qnt,estprice,udate) values('$fid','$cropname','$quality','$qnt','$estprice',curdate())";
	
	$res=execute( $sql );

	if( !$res )
	{
	echo "Could not run the query";
	exit();





	}

	echo "<center><br/><br/><h1 class='text-danger'><i>The crop details have been uploaded</i></b></h1><br><br><a href=selectcrop.php class='btn btn-primary' >Return</a></center>";
	

	

	?>
