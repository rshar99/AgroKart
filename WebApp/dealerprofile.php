        <?php
	
    include_once('dealernavbar.php');
	session_start();
	$did=$_SESSION['did'];
		


	include_once('db.php');
	$sql="select imgname from dealer where did='$did'";
	$res=execute( $sql );

	$row=$res->fetch_object();

	$fimg=$row->imgname;
		
	echo "<div align=left><img src=images/$fimg /><br><a href=uploaddealer.php >Change Picture</a></div>";
	

	?>
