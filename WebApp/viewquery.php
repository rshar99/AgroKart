<?php

	include_once('db.php');
	include_once('farmernavbar.php');
	
	
	$sql="select * from registration where mobno='$mobno'";
	$res=execute( $sql );
	
	$row=$res->fetch_object();
	
	$img=$row->img_file;
	
	
	$sql="select  * from posts where mobno='$mobno'";
	$res=execute( $sql );
?>

<br/><br/>

<div class="container" >

<div class="media">
  <img class="mr-3" src="images/<?php echo $img ?>" class="img img-responsive" width="65px" height="65px" >
  <div class="media-body">
  
	<?php
	while( $row=$res->fetch_object() )
	{
	?>
    <h5 class="mt-0"><?php echo $row->caption ?> </h5>
    <div>
	<?php echo $row->det ?>
	</div>
	<br/>
	<div>
	
	<?php
	
	//echo $row->ftype;
	if( $row->ftype==".jpg" )
	{
	?>
	<img src="docs/<?php echo $row->file_name ?>"  class="img-fluid img-responsive" width="100px" height="100px" />
	<?php
	}
	else
	{
	
	?>
	
	<audio   controls >
	
	<source src="docs/<?php echo $row->file_name ?>" type="audio/ogg" />
	</audio>
	<?php } ?>
	</div>

    <div class="media mt-3">
    
      <div class="media-body">
        <h5 class="mt-0"></h5>
        
		<?php
			$sql="select * from replies where refno=$row->slno";
			$res1=execute($sql);
			echo "<div class=''>";
			echo "<h5>reply from admin</h5>";
			
			$row1=$res1->fetch_object();
			
			if( !$row1 )
			{
				echo "<font color=red>No reply</font>";
				
			}
			else{
			$res1=execute($sql);
			while( $row1=$res1->fetch_object() )
			{
				echo $row1->reply."<br/>";
			}
			
			echo "</div>";
			}
		?>
      </div>
    </div>
	
	<?php
	}
	?>
	
  </div>
</div>

</div>
