<?php

include_once('dealernavbar.php');

$fid=$_SESSION['mobno'];




include_once('db.php');

if(isset($_POST['Submit']))
{
$current_image=$_FILES['image']['name'];
	
$extension = substr(strrchr($current_image, '.'), 1);

$new_image = $current_image;

$myimg=$fid.".jpg";
$destination="images/".$fid.".jpg";
$action = copy($_FILES['image']['tmp_name'], $destination);
if (!$action) 
{
die('File copy failed');
}else{


$sql="update registration set img_file='$myimg' where mobno='$fid'";
$res=execute($sql);

if( !$res )
{
echo "Could not execute query";
}

echo "<center><br><br><b>File uploaded successfully</b><br><br><a href=welcomedealer.php>Return</a><br></center>";

}
}else{
?>

<div class="container " style="padding:20px;" >

<center>
<form method="post" enctype="multipart/form-data" action="?">
<input type="file" name="image"  required=required><br/>
<input type="submit" name="Submit" value="submit" class="btn btn-danger" />
</form>
</center>

</div>

<?php
}
?>
