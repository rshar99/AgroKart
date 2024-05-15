
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <title>Krushi Mitra</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

	<script src="js/jquery-3.1.0.js">
	</script>
	
	<script src="js/bootstrap.min.js" >
	</script>
	
	
	<style>
	
	
	body{
	
	background:url('img/bg.png');
	background-size:auto;
	background-repeat: no-repeat;
	
	}
	
	img{
	
	width:150px;
	height:150px;
	margin-bottom:10px;
	
	}
	
	</style>
	
	
   </head>
   
   
   <body>
   


	<?php

	include_once('db.php');
	
	session_start();
	$mobno=$_SESSION['mobno'];
	
	$type=$_REQUEST['type'];
	//echo "$mobno - $type ";
	
	$sql="insert into registration values('$mobno','$type','images.jpg')";
	$res=execute( $sql );
	
	$sql="insert into farmers(name,mobno,district,state) values('nil','$mobno','nil','nil')";
	$res=execute( $sql );
	
	
	
	if( $type=="dealer")
	header('Location:dealerhomepage.php');
	else
	header('Location:farmerhomepage.php');

	?>


	</body>
	
	</html>
