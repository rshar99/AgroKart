
<?php

	   include_once('farmernavbar.php');
	   
	  
	   
	?>


	<html>

	<head>
	
	<script src="check.js" >
	</script>

	<style>
	input[type='number'],select{
	
	width:150px;
	height:33px;
	border:1px solid green;
	font-size:bold;
	}
	</style>
	
	
	<body>
	
	<form name="f1" action="savecrop.php" method="post" >
	<div class="container"  style="background-color:ivory;padding:10px;">
	
	<h2 class="text-success font-bold"><b>Upload Crop details form</h2>
	<table align=center class="table table-condensed">
	<caption></caption>

	<!--
	<tr>
	<td>
	Choose Crop Name
	</td>

	<td>
	<select id="Choose Crop Name" name="cropname" >

	<option value="#">---- Choose Crop -------</option>
	
	<option value="Rice">Rice</option>
	<option value="Jower" >Jower</option>
	<option value="Ground nut">Ground nut</option>
	<option value="Areca nut">Areca nut</option>
	<option value="Tomato">Tomato</option>
	<option value="Green Chilli">Green Chilli</option>
	
	
	</select>


	

	</td>

	</tr>
	-->

	<input type="hidden" name="cropname" value=<?php echo $_REQUEST['cropname']; ?> />
	<tr>
	<td>
	Choose Quality
	</td>

	<td>
	<select id="Choose Quality" name="quality" >

	<option value="#">---- Choose Quality -------</option>
	
	<option value="High">High</option>
	<option value="Medium">Medium</option>
	<option value="Low">Low</option>
	</select>

	</td>

	</tr>



	<tr>
	<td>
	Quantity
	</td>
	<td>
	<input type="number" name="qnt" id="Quantity"  class="" />

	&nbsp;&nbsp;&nbsp;
	<select name="cunit" >
	<option value="Qntl">Quintal</option>
	<option value="kg">Kilo Grams</option>
	</select>
	</td>
	</tr>

	<tr>
	<td>
	Estimated Price
	</td>
	<td>
	<input type="number" name="estprice" id="Estimated Price" />

	&nbsp;

	<select  name="punit" >
	<option value="Qntl">Per Quintal</option>
	<option value="kg">Per KG</option>
	</select>
	</td>
	</tr>


	<tr>
	<td colspan=2 align=center>
	<input type="submit" class="btn btn-danger" value="submit" onClick="return validate(f1)" />
	</td>
	</tr>	


	</table>
	</div>
	</form>
	</body>

	</html>
