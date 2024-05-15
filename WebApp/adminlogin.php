
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
	 <link href="css/bootstrap.min.css" rel="stylesheet">
	
	<script src="js/jquery-3.2.1.min.js">
	</script>
	
	<script src="js/bootstrap.min.js">
	</script>
	
	<script>
	$(document).ready( function(){
	
	
		$("#f1").submit( function(){
		
		
		if( $("#uname").val()=="admin" && $("#pwd").val()=="admin" )
		{
			location.href="adminhomepage.php";
		}
		else
		{
			if( $("#uname").val()!="admin" )
			{
			$(".unamemsg").html("<font color=red><b>User name is wrong</font></b>");
			}
			else
			{
			$(".unamemsg").html("");
			
			}
			
			
			
			if( $("#pwd").val()!="admin" )
			{
			$(".pwdmsg").html("<font color=red><b>Password wrong</font></b>");
			}
			else
			{
			$(".pwdmsg").html("");
			
			}
			
		}
		
		
		return(false);
		});
	
	});
	</script>
	
	
	<style>
	
	html { 
  background-color:lightblue;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}


	
	</style>
	
	</head>
	
	
	<body bgcolor="lightblue">
	<div class="container col-xs-6  col-md-6 bg-light"  >
	<h1>Admin Login Form</h1>
	<img src="img/login.png" class="img img-responsive" style="height:50%;width:50%;" />
	<form name="f1" id="f1" >
	<table align=center class="table" >
	<tr>
	<td>
	User Name
	</td>
	<td>
	<input type="text" name="uname" id="uname" required=required />
	<span class="unamemsg"></span>
	</td>
	
	</tr>
	
	
	<tr>
	<td>
	Password
	</td>
	<td>
	<input type="password" name="pwd" id="pwd" required=required />
	<span class="pwdmsg"></span>
	
	</td>
	
	</tr>
	
	
	<tr>
	<td colspan="2" >
	<input type="submit" value=" Login "  class="btn btn-lg btn-primary"/>
	</td>
	</tr>
	
	
	
	</table>
	
	</form>
	
	</div>
	
	</body>
	
	</html>
