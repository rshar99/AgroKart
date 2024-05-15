
<?php
	
	include_once('dealernavbar.php');
?>


      <?php

	include_once('db.php');
	$sql="select distinct cropname from crops order by sino";

	?>


	

	

	<script>

	$(document).ready( function(){
	
		$(".f1").submit( function(){
		
		
		$(".result").load(
		
				"displaycrops.php",
				{cname:$(".cname").val(),quality:$(".quality").val()}
		
			);
		
		return false;
		});
		
	});

	</script>
	
	<style>
	select{
	width:140px;height:43px;font-weight:bold;
	border-radius:10%;
	}
	
	th{
		font-weight:bold;
		font-family:Calibri;
		font-size:20px;
		color:green;
	}
	</style>
	</head>

	<body>
	
	<br/>
	<div class="container "  style="background-color:lightblue;" >
	
	<form name="f1" class="f1" method="post" action="#" >

	<table align=center class="table  table-sm">
	<tr class="">
	<th><h3>CropName</h3></th><th><h3>Quality</h3></th>
	</tr>

	<tr>
	<td>
	<select name="cname" id="CropName" class="cname" >
	<?php
	$res=execute($sql);

	while( $row=$res->fetch_object() )
	{
	?>

	<option value='<?php echo $row->cropname; ?>' > <?php echo $row->cropname; ?> </option>
	<?php
	}
	?>

	</select>

	</td>

	<td>
	<select name="quality" id="Quality" class="quality" >
	<?php

	$sql="select distinct quality from crops";
	$res=execute($sql);

	while( $row=$res->fetch_object() )
	{
	?>

	<option value=<?php echo $row->quality; ?> > <?php echo $row->quality; ?> </option>
	<?php
	}
	?>

	</select>

	</td>


	

	</tr>

	<tr class="" >
	<td colspan=2 align=center>
	<input type="submit" value=" SEARCH " class="btn btn-primary"  />
	</td>
	</tr>

	</table>

	</form>

	</div>
	
	
	<style>
	td{
	
		color:black;
		font-weight:bold;
		font-size:20px;
	}
	</style>
	<div class="result" style="text-color:black;" >
	
	
	</div>
	
	


	</body>

	</html>
