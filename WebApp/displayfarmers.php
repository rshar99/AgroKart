<?php

	include_once('db.php');
	include_once('adminnavbar.php');
	
	
	
	
	$sql="select * from farmers";
	
	$res=execute( $sql );
?>

<br/><br/>

<div class="container" >

<table class="table" >
<tr>
<th>Slno</th><th>Name</th><th>Mobno</th><th>District</th><th>State</th><th>Remove</th>
</tr>

<?php

while( $row=$res->fetch_object() )
{
	echo "<tr>";
	echo "<td>$row->slno</td>";
	echo "<td>$row->name</td>";
	echo "<td>$row->mobno</td>";
	echo "<td>$row->district</td>";
	echo "<td>$row->state</td>";
	echo "<td><a href='deletefarmer.php?slno=$row->slno&mobno=$row->mobno' class='btn btn-sm btn-danger'>Remove</a></td>";
	
	
	echo "</tr>";

}
	echo "</table>";

?>


</div>

</div>
