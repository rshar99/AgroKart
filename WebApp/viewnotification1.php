<?php

include_once('db.php');
include_once('farmernavbar.php');

$sql="select * from notifications order by slno";
$res=execute( $sql );

?>

<br/><br/>

<div class="container" >
<h2>Notifications details</h2>
<table class='table table-condensed' >



<tr class="info" >
<th>Slno</th><th>Caption</th><th>Notification</th>
</tr>

<?php
$sino=1;
while( $row=$res->fetch_object() )
{
?>

<tr>

<td><?php echo $sino; ?> </td>


<td>
<?php echo $row->caption ?>
</td>


<td>
<?php echo $row->details ?>
</td>



</tr>

<?php
$sino++;
}
?>



</table>

</div>

</body>

</html>
