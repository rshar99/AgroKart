<?php

	include_once('db.php');
	include_once('adminnavbar.php');
	
	
	
	
	$sql="select  p.slno as slno,r.mobno as mobno,ftype,caption,det,img_file,file_name from posts p,registration r where p.mobno=r.mobno";
	$res=execute( $sql );
?>

<br/><br/>

<div class="container" >

<?php
	while( $row=$res->fetch_object() )
	{
	?>
<div class="media">
`<a href="viewfarmer1.php?mobno=<?php echo $row->mobno ?>">
  <img class="mr-3" src="images/<?php echo $row->img_file ?>" class="img img-responsive" width="65px" height="65px" >
  </a>
  
  <div class="media-body">
  
	
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
        <a href="reply.php?refno=<?php echo $row->slno ?>" class="btn btn-success">Reply</a>
      </div>
    </div>
	
	<?php
	}
	?>
	
  </div>
</div>

</div>
