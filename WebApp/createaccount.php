
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <title>Myproject</title>

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
   <marquee><b>Select either Farmer or Consumer</b></marquee>
   <?php
   
   session_start();
   $mobno=$_SESSION['mobno'];
   
   include_once('db.php');
   
   $sql="select * from registration where mobno='$mobno'";
   $res=execute( $sql );
   $row=$res->fetch_object();
   
   if( $row )
   {
	
		if( $row->account_type=="dealer" )
		{
		
		header('Location:dealerhomepage.php');
		}
		else{
		header('Location:farmerhomepage.php');
		
		}
		
		exit(0);
   
   }
   else
   {
   
   }
   
   ?>
   
   <div class="container" >
   <center>
   <h4 class="text-primary">Select type of Account</h4>
	</center>
	<br/><br/>
	<div class="col-xs-12 text-center " >
	<b style="color:green;">Farmer</b>
	<center>
	<a href="registration.php?type=farmer ">
	<img src="img/frm.jpg" class="img img-responsive img-circle" />
	</a>
	
	</center>
	</div>
	
	
	
	<div class="col-xs-12 text-center "  style="margin-top:20px;">
	<b style="color:blue;">Consumer</b>
	<center>
	<a href="registration.php?type=dealer " >
	<img src="img/dealer.png"  class="img img-responsive img-circle" />
	</center>
	
	</a>
	
	
	</div>
	
   
   
   
   
   </div>
   
   </body>
   
   
   </html>
