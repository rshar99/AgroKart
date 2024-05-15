
<?php

include_once('adminnavbar.php');


	include_once('db.php');
	
	if( isset($_REQUEST['submit'] ) )
	{
	
		$caption=$_REQUEST['caption'];
		$details=$_REQUEST['details'];
		
		$sql="insert into notifications(caption,details) values('$caption','$details')";
		
		$res=execute( $sql );
		
		echo "<center><h2><br/><br/>Notification got saved</h2></center>";
	
	}

?>


<br/><br/>

<div class="container bg-info" >

<h2>Add notification form</h2>

<form name="f1" id="f1" action="?" >

<table class="table table-condensed" >

<tr>

<td>
Caption
</td>
<td>
<input type="text" name="caption" required=required style="width:300px;" />
</td>

</tr>

<tr>

<td>
Details
</td>

<td>
<textarea name="details" required=required rows=5 cols=40 ></textarea>

</td>

</tr>

<tr>

<td colspan=2 align=center>

<input type="submit" name="submit" value=" Save Notification " class="btn  btn-danger" />

</td>

</tr>


</table>

</form>


</div>

</body>
