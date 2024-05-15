

	<style>
	.avatar {
    vertical-align: middle;
    width: 150px;
    height: 150px;
    border-radius: 50%;
}

	body{
	
	background-color:green;
	}
	</style>


    <?php

	
	$cities=array("Davangere","Chitradurgha","Shivamogga","Haveri","Dharwad","Hubli","Belgavi","Udupi","Mysore","Bidar");
	
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
	   
	
	
	
	
	
	
	
	
	
	//session_start();
	$fid=$_SESSION['mobno'];
	
	
	//$fname=$_SESSION['fname'];
	//$funame=$_SESSION['funame'];


	include_once('db.php');
	
	
	if( isset($_REQUEST['submit']) )
	{
			$name=$_REQUEST['name'];
			$state=$_REQUEST['state'];
			$district=$_REQUEST['district'];
			$flag=$_REQUEST['flag'];
			
			
			if( $flag==1 )
			{
			$sql="update farmers set name='$name',district='$district',state='$state' where mobno='$fid'";
			$res=execute( $sql );
			}
			else{
			$sql="insert into farmers(name,mobno,district,state) values('$name','$fid','$district','$state')";
			$res=execute( $sql );
			}
			
			echo "<br/><br/><center><img src='img/ok.png' class='img img-responsive' /><h4 style='color:blue'>Profile got edited</h4><a href=welcome.php class='btn btn-danger'>Return</a></center>";
			
			exit(0);
	}
	else
	{
	
			$sql="select img_file from registration where mobno='$fid'";
			$res=execute( $sql );
			$row=$res->fetch_object();
			$fimg=$row->img_file;
			
			
			echo "<div align=left class='container' ><center><br/><img src='images/$fimg' class='avatar img-fluid img-responsive img-circle' /><br><a href=upload1.php class='btn btn-primary' ><br/>Change Picture</a></center></div>";

			
			$sql="select * from farmers where mobno='$fid'";
			
			//echo $sql;
			$res=execute( $sql );
			$row=$res->fetch_object();
	
			$flag=0;
			
			if( isset($row->name) )
			{
				$flag=1;
			}
	}
	
	

	?>
	
	<style>
	
	td{
	font-weight:100;
	color:blue;
	}
	
	body{ background:-webkit-linear-gradient(top,lightgreen,ivory); }
	</style>
	
	<body>
	
	<div class="container text-info" >
	<h4>Personal info</h4>
	
	<form name="f1" action="?" method="post" >
	
	<input type="hidden" name="flag" value=<?php echo $flag ?> />
	<table class="table table-sm">
	
	<tr>
	<td>
	Name<br/>
	<input type="text" name="name" value="<?php if( isset($row->name) ){echo $row->name;}else{ echo ""; } ?>" />
	</td>
	</tr>
	
	
	
	<tr>
	<td>
	Mobno<br/>
	<input type="text" name="mobno" value="<?php  echo $fid; ?>" readonly=readonly />
	</td>
	</tr>
	
	
	
	<tr>
	<td>
	State<br/>
	<input type="text" name="state" value="KARNATAKA" />
	</td>
	</tr>
	
	
	<tr>
	<td>
	
	
	<select name="district" >
	
	<?php
	
	
	for($i=0; $i<sizeof($cities); $i++ )
	
	{
	
	echo "<option value=$cities[$i]> $cities[$i] </option>";
	}
	
	?>
	
	</select>
	
	
	</td>
	</tr>
	
	
	
	
	
	<tr>
	<td>
	<input type="submit" name="submit" value="Edit" class="btn btn-success"  />
	</td>
	</tr>
	</table>
	
	</form>
	</h4>
	</div>
	
	</body>
