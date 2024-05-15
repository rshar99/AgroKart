
<?php

	   include_once('farmernavbar.php');
	?>


	<html>

	<head>
	
	<script src="check.js" >
	</script>

	<style>
	input[type='text'],select{
	
	width:150px;
	height:33px;
	border:1px solid green;
	font-size:bold;
	}
	</style>
	
	
	<body>
	
	<form name="f1" action="savequery.php"  method="post" enctype="multipart/form-data">
	<div class="container table-responsive"  style="background-color:ivory;padding:10px;">
	
	<h4 class="text-success font-bold"><b>Post query Form</h4>
	<table align=center class="table table-condensed">
	<caption></caption>

	<tr>
	<td>
	Caption<br/>
	<input type="text" name="caption" required=required />
	</td>
	</tr>


	<tr>
	<td>
	Explain in detail <br/>
	<textarea name="det" required=required></textarea>
	</td>
	
	</tr>



	<tr>
	<td>
	Add image/audio file<br/>
	<input type="file" name="image" />
	<br/>
	
	<select name="ftype" >
	<option value=".jpg">Image</option>
	<option value=".mp3">Audio</option>
	</select>
	</td>
	
	</tr>

	


	<tr>
	<td colspan=2 align=center>
	<input type="submit" class="btn btn-danger" value="submit"  />
	</td>
	</tr>	


	</table>
	</div>
	</form>
	</body>

	</html>
