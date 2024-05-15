    
	
	<style>
	
	th{
		color:white;
		
		font-weight:bold;
		font-size:20px;
	}
	
	
	</style>
	
	<?php


	$cname=$_REQUEST['cname'];
	$quality=$_REQUEST['quality'];
	//$district=$_REQUEST['district'];
	
	include_once('db.php');
	$sql="select * from crops where (cropname='$cname' and quality='$quality')";


	//echo $sql;
	
	$res=execute( $sql );
	$row=$res->fetch_object();


	if( !$row )
	{
	echo "<center><font color=red><b>Sorry No records found !!</font></center>";
	
	return;
	}

	$res=execute( $sql );
	echo "<div class='container' >";
	echo "<table align=center class='table table-sm' style='border:1px solid red;'>";
	echo "<tr class=''  style='background-color:green;color:white;font-weight:bold;'><th>Cropname</th><th>Quality</th><th>Qantity</th><th>Price</th><th>Date</th></tr>";
	
	echo "<div class='row bg-success' >";
	while( $row=$res->fetch_object() )
	{
		echo "<div  class='bg-success'>";
		
		echo "<tr >";
		echo "<td style='font-weight:bold;color:red;'><b>$row->cropname</b></td>";
		echo "<td style='font-weight:bold;color:blue;'>$row->quality</td>";
		echo "<td style='font-weight:bold;color:blue;'>$row->qnt</td>";
		echo "<td style='font-weight:bold;color:blue;'>$row->estprice</td>";
		echo "<td style='font-weight:bold;color:blue;'>$row->udate</td>";
		
		echo "<tr><td colspan=4 align=left>";
		echo "<a href=viewfarmer.php?mobno=$row->fid class='btn btn-info btn-sm'>Owner</a>";
		
		echo "<span style='float:right;'><a href='biditem.php?fid=$row->fid&refno=$row->sino&cropname=$row->cropname' class='btn btn-danger btn-sm'>Bid this</a></span>";
		
		
		echo "<td></tr>";
		
		echo "</div>";
		
	}
		
	echo "</table></div>";
	
	echo "</div>";
	
?>
