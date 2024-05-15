


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Kurshi Mitra</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>


<?php

	session_start();
	if( ! isset($_SESSION['mobno']) )
	{
		echo "<div class='container' ><center><h2>You must login to continue</h2><br/><img src='img/denied.jpg' class='img-fluid img-responsive' /><br/><br/><a href=index.php class='btn btn-danger' >Return</a></center></div>";
		exit(0);
	}
	
	$mobno=$_SESSION['mobno'];

?>


    <!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-dark primary-color">

    <!-- Navbar brand -->
    <a class="navbar-brand" href="#">Consumer</a>

    <!-- Collapse button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Collapsible content -->
    <div class="collapse navbar-collapse" id="basicExampleNav">

        <!-- Links -->
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="dealerhomepage.php">Home
                    <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="searchcrop.php">Search Crop</a>
            </li>
          			
			
		

            <!-- Dropdown -->
            <li class="nav-item dropdown nav-right">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Settings</a>
                <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="welcomedealer.php">Profile</a>
                    <a class="dropdown-item" href="logout.php">Logout</a>
                    <a class="dropdown-item" href="removeaccount.php">Remove Account</a>
                </div>
            </li>
			
			
			
			
			
			<!--
			<li class="nav-item dropdown nav-right">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Help</a>
                <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="postquery.php">Post Query</a>
					<a class="dropdown-item" href="postquery.php">View Replies</a>
					
                    
                    <a class="dropdown-item" href="logout.php">Weather Report</a>
                   
                </div>
            </li>
			-->
			

        </ul>
        <!-- Links -->

        
    </div>
    <!-- Collapsible content -->

</nav>
<!--/.Navbar-->

    
    <!-- Start your project here-->
    
	
    <!-- /Start your project here-->

    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
