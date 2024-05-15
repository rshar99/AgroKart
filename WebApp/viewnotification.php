<?php

include_once('db.php');
include_once('adminnavbar.php');

$sql="select * from notifications order by slno";
$res=execute( $sql );

?>

<br/><br/>

<div class="container" >
<h2>Notifications details</h2>
<table class='table table-condensed' >



<tr class="info" >
<th>Slno</th><th>Caption</th><th>Notification</th><th>Remove</th>
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


<td>
<a href="deletenotification.php?sino=<?php echo $row->slno ?>"  onclick="return confirm('Are you sure ????'); " ><span style="color:red; font-weight:bold;" >Remove</span>
</a>
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
