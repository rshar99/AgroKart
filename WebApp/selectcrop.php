
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

	<style>
	img{
		width:120px; height:120px;
	}
	</style>
	
	
	<div class="container text-danger" >
	<br/>
	
	<center>
	<h3>Select crop</h3>
	</center>
	<br/>
	
	<div class="row"  style="text-align:center;" >
	
	<div class="col-xs-6" style=""  >
	
	<a href="addnewcrop.php?cropname=tomato">
	<img src="img/tomato.jpg" class="img img-responisve img-full" />
	</a>
	
	
	</div>
	
	
	
	<div class="col-xs-6"  style="">
	
	
	<a href="addnewcrop.php?cropname=greenchilli">
	<img src="img/greenchilli.jpg" class="img img-responisve" />
	</a>
	
	
	</div>
	
	

	
	<div class="col-xs-6"  style="">
	
	<a href="addnewcrop.php?cropname=groundnut">
	<img src="img/groundnut.jpg" class="img img-responisve" />
	</a>
	
	
	</div>
	</div>
	
	

	
	<div class="row"  style="text-align:center;" >
	
	<div class="col-xs-6" style=""  >
	
	<a href="addnewcrop.php?cropname=maze">
	<img src="img/maze.jpg" class="img img-responisve img-full" />
	</a>
	
	
	</div>
	
	
	
	<div class="col-xs-6"  style="">
	
	
	<a href="addnewcrop.php?cropname=paddy">
	<img src="img/paddy.jpg" class="img img-responisve" />
	</a>
	
	
	</div>
	
	

	
	<div class="col-xs-6"  style="">
	
	<a href="addnewcrop.php?cropname=jower">
	<img src="img/jower.jpg" class="img img-responisve" />
	</a>
	
	</div>
	
	
	
	
	

	
	
	
	<div class="col-xs-6"  style="">
	
	<a href="addnewcrop.php?cropname=onion">
	<img src="img/onion.jpg" class="img img-responisve" />
	</a>


	
	

	</div>
	
	<div class="col-xs-6"  style="">
	
	<a href="addnewcrop.php?cropname=areca-nut">
	<img src="img/arcnt.jpg" class="img img-responisve" />
	</a>


	
	
	
	</div>
	
	<div class="col-xs-6"  style="">
	
	<a href="addnewcrop.php?cropname=potato">
	<img src="img/potato.jpg" class="img img-responisve" />
	</a>

	


	
	
	</div>


	<div class="col-xs-6"  style="">
	
	<a href="addnewcrop.php?cropname=tea">
	<img src="img/tea.jpg" class="img img-responisve" />
	</a>
	
</div>





<div class="col-xs-6"  style="">
	
	<a href="addnewcrop.php?cropname=coffe">
	<img src="img/coffe.jpg" class="img img-responisve" />
	</a>	
	
	</div>
	
	
	
	
	
	<div class="col-xs-6"  style="">
	
	<a href="addnewcrop.php?cropname=coco">
	<img src="img/coco.jpg" class="img img-responisve" />
	</a>
	
	</div>
	
	
	
	
	
	<div class="col-xs-6"  style="">
	
	<a href="addnewcrop.php?cropname=wheat">
	<img src="img/wheat.jpg" class="img img-responisve" />
	</a>
	
	</div>
	
	
	
	<div class="col-xs-6"  style="">
	
	<a href="addnewcrop.php?cropname=cottonn">
	<img src="img/cottonn.jpg" class="img img-responisve" />
	</a>
	
	
	</div>
	
	
	<div class="col-xs-6"  style="">
	
	<a href="addnewcrop.php?cropname=sunflower">
	<img src="img/sun.jpg" class="img img-responisve" />
	</a>
	
	
	</div>
	
	
