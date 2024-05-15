


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Krushi Mitra</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">

	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>

	<script>
$(document).ready(function(){

	$(".verification").hide();
	
	
	
	$("#f1").submit(function(){
	
	
				if( $("#mobno").val().length <10 )
				{
				
					$('.notice').html("<font color=red>Mobile number must have 10 digits </font>");
					return(false);
					
				}
				
				
				$.get("verifymobile.php",{mobno:$("#mobno").val()},
				
				
				function(data)
				{
				
					if( data==1 )
					{
						$('.notice').html("<img src=loading37.gif  width=200  align=center /><br/>Sending sms....");
								
								$.get(
								
								"sendSMS.php",
								{mobno:$("#mobno").val() },
								
								
								function(data)
								{
									alert(data);
									var d=$.trim(data);
									//alert(d);
									
									$("#hveri").val(d);	
									
									$('.notice').html("<b>OTP has been sent your mobile ,please enter that code in the above text box for verfication</b>");
									
									$(".contact").hide();
									$(".verification").show();
								
								}
								
								);
	
					
					}
					else
					{
					
								$('.notice').html("<img src=loading37.gif  width=200  align=center /><br/>Sending sms....");
								
								$.get(
								
								"sendSMS.php",
								{mobno:$("#mobno").val() },
								
								
								function(data)
								{
									//alert(data);
									var d=$.trim(data);
									//alert(d);
									
									$("#hveri").val(d);	
									
									$('.notice').html("<b>OTP has been sent to your mobile ,please enter that code in the above text box for verfication</b>");
									
									$(".contact").hide();
									$(".verification").show();
								
								}
								
								);
	
	
					
					
					
					}
				
				}
				
				);
				
				
				
			
	
	return(false);
	});
	
	
	
	
	$("#f2").submit( function(){
	
	
	
		//alert( $("#hveri").val() );
		
		//alert( $("#veri").val() );
		
		
		if( $("#hveri").val() != $("#veri").val() )
		{
		$('.notice').html("<font color=red><b>Verfication code does not match ! try again</b> </font>");
	return(false);
		}
		else
		{
		
			location.href="createaccount.php";
		
		}
		
	
		return false;
	
	
	});
	
	
	
	
	
	
	
	
		
	
	
});
</script>


<style>

body{

background-image:url(bg1.jpg);

background-size:cover;
 background-repeat:no-repeat;
}
</style>

</head>
<body>

	<div class="container" style="background-color:green;padding:5px;" >

	<center>
	<h3 class="color:white;" ><font color=white size="5" ><b>Welcome to Agro-Kart</b></font></h3>
	</center>
	
	</div>
	
	<div class="container col-xs-12" >
<center>
	<img src="farmerlogo.jpg" class="img img-responsive img-thumbnail"  style="" /></center>
	</div>
<div class="container">
<p> <b><marquee><font color="white">To continue using this application please enter you mobile number<font></marquee></b></p>
</div>

<div align=center class="container bg-info" style="padding:20px;opacity:1.0;" >

<input type=hidden name=hveri id="hveri" />

<span class="contact">
<form name=f1 id=f1 >
<!--<i class="fa fa-mobile" aria-hidden="true" style="font-size:50px;"></i>--> 
<input type=text name=mobno id=mobno required="required" onkeypress="return isDigit();" maxlength=10 style="height:40px; font-weight:bold; width:200px; padding:10px; font-size:15px;border:2px solid black;" placeholder="Your Mobile number"   class="form-control" />

<br/><br/>
<input type=submit name=submitmob id=submitmob  value="Verify"  class="btn btn-danger btn-lg" />
</form>
</span>

<br/>
<span class="verification">
<form name="f2" id="f2" >
<b><font color=green>Enter the verifaction code</font>&nbsp;&nbsp;&nbsp;
</b>


<input type=text name=veri id=veri required="required"  style="height:40px; font-weight:bold; width:200px; padding:10px; "/>
&nbsp;&nbsp;&nbsp;
<input type=submit name=submitveri id="submitveri"  value="Verfiy" class="btn btn-danger"  />
</form>

</span>




</div>


</body>

<div id=note align=left class="container"  style="opacity:1.0;" >
<p align=left><font color=red size=4>Note:-</font></p>
<p align=left>
<h6 style="color:red;font-weight:bold;">This mobile number will be used for further transaction's </h6>
</p>
</div>

<div id=result >
<span class=notice></span>
</div>



</html>
