<?php
 include 'mysqlconnection.php';
 
 session_start(); 
// store session data
$_SESSION["name"] =$_POST['name'];
$_SESSION["email"] =$_POST['email'];
$_SESSION["phone"]=$_POST['phone'];
$_SESSION["date"]=$_POST['date'];

$_SESSION["college"]=$_POST['college'];
$_SESSION["nop"]=$_POST['nop'];

//$_SESSION["time"]=$_POST['time'];
$event=$_POST['event'];
$college=$_POST['college'];
$_SESSION["eventid"]=$_POST['event'];
$name=$_POST['name'];

?>

<html>
 
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Agency - Start Bootstrap Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Theme CSS -->
    <link href="css/agency.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js" integrity="sha384-0s5Pv64cNZJieYFkXYOTId2HMA2Lfb6q2nAcx2n0RTLUnCAoTTsS0nKEO27XyKcY" crossorigin="anonymous"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js" integrity="sha384-ZoaMbDF+4LeFxg6WdScQ9nnR1QC2MIRxA1O9KWEXQwns1G8UNyIEZIQidzb0T1fo" crossorigin="anonymous"></script>
    <![endif]-->

</head>
 <body>
 <section class="container-fluid" id="four">
        <div class="row">
            <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                <h2 class="text-center text-primary">Confirm Details</h2>
                <hr>
                <div class="media wow fadeInRight">
         
                    <div class="media-body media-middle">
                    <?php 
					 
					$sp_query = "SELECT * FROM events WHERE e_id=$event";
                    
                    $sp_res = mysqli_query($conn,$sp_query);
                   
                    while($col = mysqli_fetch_array($sp_res)) { 
                     ?>
					 
					 
					 
			
					 
                        <h4>Name: <?php echo $_SESSION["name"];?></h4>
                        <h4>Email: <?php echo $_SESSION["email"];?></h4>
                        <h4>Phone: <?php echo $_SESSION["phone"]?></h4>
					    <h4>college: <?php echo $_SESSION["college"]?></h4>
						<h4>Date: <?php echo $_SESSION["date"]?></h4>
					    <h4>Event: <?php $_SESSION["s_event"]=$col['e_name']; echo $col['e_name'];?></h4>
                        <h4>No of participents: <?php echo $_SESSION["nop"]?></h4>						
						<h4>Fee: <?php $_SESSION["s_eventfees"]=$col['e_fees']; echo $col['e_fees'];?></h4>

						<?php  }?> 
                    </div>
					
                    <div align="center"><a href="gpdf.php" class="btn btn-default btn-xl page-scroll" data-toggle="modal">Submit</a></div>
                    
    </section>
	

    <script src="./js/jquery.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/jquery.easing.min.js"></script>
    <script src="./js/wow.js"></script>
    <script src="./js/scripts.js"></script>
</body>
</html>