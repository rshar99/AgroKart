<?php

	include_once('db.php');
	include_once('adminnavbar.php');
	
	
	if( isset($_REQUEST['submit'] ) )
	{
	
		$refno=$_REQUEST['refno'];
		$reply=$_REQUEST['reply'];
		
		$sql="insert into replies(refno,reply,repdate) values($refno,'$reply',curdate())";
		
		$res=execute( $sql );
		
		echo "<center><h2>Reply sent</h2>";
	}
	else
	{
		$refno=$_REQUEST['refno'];
	}
	
	
	
?>

<div>

<h1>Reply form</h1>



<form name="f1" action="?" method="post">


<input type="hidden" name="refno" value=<?php echo $refno ?> />
<textarea name="reply" required=required></textarea>
<br/><br/>

<input type="submit" name="submit" class="btn btn-primary" value="Reply" />

</form>
</div>
