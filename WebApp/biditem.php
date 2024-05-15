<?php

include_once('dealernavbar.php');

$did=$_SESSION['mobno'];




include_once('db.php');

if(isset($_POST['Submit']))
{

		$fid=$_REQUEST['fid'];
		$refno=$_REQUEST['refno'];
		$cropname=$_REQUEST['cropname'];
		$amount=$_REQUEST['amount'];
		
		
		$sql="select * from  bids where( refno=$refno and  did='$did')";
		
		$sql1=$sql;
		//echo $sql;
		
		$res=execute( $sql );
		
		$row=$res->fetch_object();
		
		if( $row )
		{
		
			echo "<h2><center>sorry, You have allready made a bid on this item</center>";
			exit(0);
		}
		
		$sql="insert into bids(refno,fid,did,cropname,amount,bdate) values($refno,'$fid','$did','$cropname',$amount,curdate())";
		
		$res=execute( $sql );
		{
		echo "<center><h1>Thank you, It has got saved</h1></center";
			echo $sql1;
			exit(0);
		}

}
else{
		
		$fid=$_REQUEST['fid'];
		$refno=$_REQUEST['refno'];
		$cropname=$_REQUEST['cropname'];
		
		
		$sql="select * from  bids where( refno=$refno and  did='$did')";
		
		$sql1=$sql;
		//echo $sql;
		
		$res=execute( $sql );
		
		$row=$res->fetch_object();
		
		if( $row )
		{
		
			echo "<h2><center>sorry, You have allready made a bid on this item</center>";
			exit(0);
		}
		
		

}
?>

<div class="container " style="padding:20px;" >

<center>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="img/bid.png" class="img img-responsive img-circle" /><br/><br/>

</center>
<form method="post" enctype="multipart/form-data" action="?fid=<?php echo $fid ?>&cropname=<?php echo $cropname ?>&refno=<?php echo $refno ?> ">

<center>
<input type="number" name="amount"  required=required placeholder="Enter the amount" ><br/>
<input type="submit" name="Submit" value="submit" class="btn btn-danger" />

</center>
</form>


</div>
