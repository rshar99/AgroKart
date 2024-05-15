
	<?php
	
	 include_once('farmernavbar.php');
	
		include_once('db.php');
	
		$mobno=$_SESSION['mobno'];
	  
	   
	   
	   $refno=$_REQUEST['refno'];
	   $fid=$_REQUEST['fid'];
	   
	   
	   $sql="select * from bids where( refno=$refno and fid='$fid' )";
	   $res=execute( $sql );
	?>
  <html>

	<head>

	
	</head>

	<body>

	
	
	
	<div class="container-fluid table-responsive" >
	<br/>
	<h4 class="text-success font-bold"><b>Bids details</h4>
	
	<table align=center class="table table-dark table-sm">
	<caption></i></caption>
	

	<tr class="bg-info">
	<th>CropName</th><th>Dealer</th><th>Amount</th><th>
	</tr>

	<?php

	while( $row=$res->fetch_object() )
	{
	?>

	<tr>
	<td><?php echo $row->cropname; ?></td>
	<td>
	
	<?php echo $row->did ?>
	
	<br/>
	<a href="viewdealer.php?mobno=<?php echo $row->did ?>" class="" ><span style="color:yellow;font-weight:bold;" >Info</span></a>
	</td>
	
	<td><?php echo $row->amount ?></td>

	 </tr>
	 <?php
	 }
	 ?>
	 
	</table>
	
	</div>
	</body>

	</html>
