<?php

include_once('farmernavbar.php');

$fid=$_SESSION['mobno'];
include_once('db.php');


$current_image=$_FILES['image']['name'];

$ftype=$_REQUEST['ftype'];

$caption=$_REQUEST['caption'];
$det=$_REQUEST['det'];

	
$extension = substr(strrchr($current_image, '.'), 1);

$new_image = $current_image;

$myimg=$fid.rand(100,500).$ftype;
$destination="docs/".$myimg;

$action = copy($_FILES['image']['tmp_name'], $destination);
if (!$action) 
{
die('File copy failed');
}else{



$sql="insert into posts(caption,det,file_name,mobno,ftype) values('$caption','$det','$myimg','$fid','$ftype')";

//echo $sql;

//$sql="update registration set img_file='$myimg' where mobno='$fid'";
$res=execute($sql);

if( !$res )
{
echo "Could not execute query";
}

echo "<center><br><br><b>Query has been posted successfully</b><br><br><a href=farmerhomepage.php>Return</a><br></center>";

}


?>
