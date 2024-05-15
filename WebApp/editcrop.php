
   <?php
		
	include_once('farmernavbar.php');
	//session_start();
	$fid=$_SESSION['mobno'];

	
	
	
     
	include_once('db.php');	
	
	$sino=$_REQUEST['sino'];

	
	//echo $sino;


	$sql="select * from crops where( fid='$fid' and sino=$sino )";
	$res=execute($sql);
	$row=$res->fetch_object();
	

	$acname=array("Rice","Jower","Ground nut","Areca nut","Tomato","Green chilli");

	$aquality=array("High","Medium","Low");
	
		

	
	
	?>


	<html>


	<head>

	
	<h2 class="text-success font-bold"><b>Edit Crop Details Form</b></h2>
	
	
	<style>
	input[type='number'],select{
	
	width:150px;
	height:33px;
	border:1px solid green;
	font-size:bold;
	}
	</style>
	
	</head>

	<body>

	<div class="container">
	
	<form name="f1" action="updatecrop.php" method="post">

	<input type="hidden" value=<?php echo $sino; ?> name="sino" />

	<table align=center class="table">

	<tr>
	<td>
	Crop Name
	</td>
	<td>
	
	
	<?php echo "<h3 class='text-danger'>$row->cropname </h3>" ?>
	
	<input type="hidden" name="cropname" value=<?php echo $row->cropname ?> />
	</td>
	</tr>
	
	
	<tr>
	<td>
	Crop Quality
	</td>
	<td>
	
	
	<?php echo "<h3 class='text-danger'>$row->quality</h3>" ?>
	
	<input type="hidden" name="cropname" value=<?php echo $row->cropname ?> />
	</td>
	</tr>





	<tr>
	<td>
	Quantity
	</td>
	<td>
	<input type="number" name="qnt" id="Quantity" value=<?php echo $row->qnt; ?> />

	&nbsp;&nbsp;&nbsp;
	<select name="cunit" >
	<option value="kw">Kwintols</option>
	<option value="kg">Kilo Grams</option>
	</select>


	</td>
	</tr>


	<tr>
	<td>
	Estimated Price
	</td>
	<td>
	<input type="number" name="estprice" id="Estimated Price" value=<?php echo $row->estprice; ?> />


	&nbsp;

	<select  name="punit" >
	<option value="kw">Per Kwintol</option>
	<option value="kg">Per KG</option>
	</select>
	</td>
	</tr>


	<tr>
	<td colspan=2 align=center>
	<input type="submit" value=" UPDATE " onclick="" class="btn btn-primary" />
	</td>
	</tr>

	

	
	</table>

	</div>



	</form>

	</body>


	</html>



	
