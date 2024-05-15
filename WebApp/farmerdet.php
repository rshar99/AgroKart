      <?php
    include_once('dealernavbar.php');
	include_once('db.php');

	$fid=$_REQUEST['fid'];

	$sql="select * from farmer where fid='$fid'";

	$res=execute($sql);

	if( !$res )
	{
	echo "Sorry could not run the query";
	exit();
	}


	$row=$res->fetch_object();


	?>


	<html>
	<body>

	<table align=center class="table">
	<tr>
	<th>Name</th><th>Address</th><th>Contact No</th><th>District</th><th>State</th>
	</tr>

	<?php
	echo "<tr><td>$row->name</td><td>$row->addr</td><td>$row->contno</td><td>$row->dist</td><td>$row->state</td></tr>";
	?>
	</body>

	</html>

	


	
	
