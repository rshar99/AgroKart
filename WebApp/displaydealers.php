<?php

	include_once('db.php');
	include_once('adminnavbar.php');
	
	
	
	
	$sql="select * from registration where account_type='dealer' ";
	
	$res=execute( $sql );
?>

<br/><br/>

<div class="container" >

<table class="table" >
<tr>
<th>Slno</th><th>Mobno</th><th>Image</th><th>Remove</th>
</tr>

<?php
$slno=1;
while( $row=$res->fetch_object() )
{
	echo "<tr>";
	echo "<td>$slno</td>";
	echo "<td>$row->mobno</td>";
	echo "<td><img src='images/$row->img_file' width='100px' height='100px' /></td>";
	
	echo "<td><a href='deletedealer.php?mobno=$row->mobno' class='btn btn-sm btn-danger'>Remove</a></td>";
	
	
	echo "</tr>";
	$slno++;
}
	echo "</table>";

?>


</div>

</div>
