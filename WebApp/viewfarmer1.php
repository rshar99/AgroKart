<?php

	include_once('adminnavbar.php');
	
	
?>



	<style>
	.avatar {
    vertical-align: middle;
    width: 150px;
    height: 150px;
    //border-radius: 50%;
}
	</style>


    <?php




	include_once('db.php');
	
	
			$fid=$_REQUEST['mobno'];
	
			$sql="select img_file from registration where mobno='$fid'";
			$res=execute( $sql );
			$row=$res->fetch_object();
			$fimg=$row->img_file;
			
			
			echo "<div align=left class='container' ><br/><img src='images/$fimg' class='avatar img-fluid img-responsive' /></div>";

			
			$sql="select * from farmers where mobno='$fid'";
			
			//echo $sql;
			$res=execute( $sql );
			$row=$res->fetch_object();
	
			
	
	
	

	?>
	
	<style>
	
	td{
	font-weight:bold;
	color:blue;
	}
	
	.st1{
	color:black;font-weight:bold; font-family:Calibri;
	}
	</style>
	
	<div class="container text-info" >
	<h4>Personal info</h4>
	
	
	
	
	<table class="table table-sm">
	
	<tr>
	<td>
	<b>Name</b><br/>
	
	<span class="st1">
	<?php if( isset($row->name) ){echo $row->name;}else{ echo ""; } ?>
	</span>
	
	</td>
	</tr>
	
	
	
	<tr>
	<td>
	<b>Mobno</b><br/>
	
	<span class="st1">
	<?php  echo $fid; ?>
	</span>
	
	</td>
	</tr>
	
	
	<tr>
	<td>
	<b>District</b><br/>
	
	<span class="st1">
	<?php if( isset($row->district) ){echo $row->district;}else{ echo ""; } ?>
	</span>
	
	</td>
	</tr>
	
	
	<tr>
	<td>
	<b>State</b><br/>
	
	
	<span class="st1">
	<?php if( isset($row->state) ){echo $row->state;}else{ echo ""; } ?>
	</span>
	
	</td>
	</tr>
	
	
	
	
	</table>
	
	
	
	</div>
