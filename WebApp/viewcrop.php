

<?php

	   include_once('farmernavbar.php');
	   
	   
	   
	   include_once('db.php');
	   
	   $sql="select * from registration where mobno='$mobno'";
	   
	   	   
	   $res=execute( $sql );
	   
	   $row=$res->fetch_object();
	   
	   if( !$row )
	   {
			
			
			echo "<center><h1>You no longer a valid user</h1>";
			header('Location:logout.php');
			exit(0);
	   
	   }
	   
	?>
  <html>

	<head>

	<?php
	
	include_once('db.php');
	
	//session_start();
	$mobno=$_SESSION['mobno'];


	//$sql="select * from crops where fid='$fid'";


	$sql="select sino,cropname,quality,qnt,estprice,concat(date_format(udate,'%d'),'-',date_format(udate,'%b'),'-',date_format(udate,'%Y') ) as udate from crops where fid='$mobno'"; 

	$res=execute( $sql );

	if( !$res )
	{
	echo "Could not display uploaded details..";
	exit();
	}

	
	?>

	</head>

	<body>

	
	
	
	<div class="container-fluid table-responsive" >
	<br/>
	<h4 class="text-success font-bold"><b>Uploaded Crops Details..</h4>
	
	<table align=center class="table table-dark table-sm">
	<caption></i></caption>
	

	<tr class="bg-info">
	<th>CropName</th><th>Quality</th><th>Quantity</th><th>Estimated Price</th><th>Uploaded Date</th><th>Modify</th><th>Remove</th>
	</tr>

	<?php

	while( $row=$res->fetch_object() )
	{
	?>

	<tr>
	<td><?php echo $row->cropname; ?></td>
	<td><?php echo $row->quality; ?></td>
	<td><?php echo $row->qnt; ?></td>

	<td><?php echo $row->estprice; ?></td>
	<td><?php echo $row->udate; ?></td>

	<td>
	<a href=editcrop.php?sino=<?php echo $row->sino; ?> >
	
	<font color=white>Edit</font>
	
	</a>
	</i>
	
	
	</a>
	</td>
	
	<td>
	<a href="deletecrop.php?sino=<?php echo $row->sino; ?>" > 
	<font color=white>Delete</font>
	
	</i>
	</a>
	</td>
		
	</tr>
	<?php
	
	$sql="select count(*) as cnt from bids where( refno=$row->sino and fid='$mobno' )";
	
	$res1=execute( $sql );
	
	$row1=$res1->fetch_object();
	
	if( $row1 )
	{
		$count=$row1->cnt;
	}
	else
	{
		$count=0;
	}
	
			if( $count==0 )
			{
				echo "<tr><td colspan=7 align=center style='color:yellow;'> <b>No Bids Yet !!</b></tr>";
			}
			
			else{
			echo "<tr><td colspan=7 align=center ><a href='viewbids.php?refno=$row->sino&fid=$mobno' class='band btn btn-sm btn-primary'>$count Bids</a></td></tr>";
			}
	}
	?>	
	
	</table>
	
	</div>
	</body>

	</html>
