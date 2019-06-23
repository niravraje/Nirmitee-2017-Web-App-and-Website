<?php
include 'mysqlconnection.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
<style>

.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 15%;
    left: 0;
    background-color: white;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
}

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: black;
    display: block;
    transition: 0.3s
}

.sidenav a:hover, .offcanvas a:focus{
    color: #F24824;
}

.sidenav a:hover{
    text-decoration: none;
}

.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}

</style>



    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Nirmitee 2017</title>

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

<script type="text/javascript">
function SetDate()
{
var date = new Date();

var day = date.getDate();
var month = date.getMonth() + 1;
var year = date.getFullYear();

if (month < 10) month = "0" + month;
if (day < 10) day = "0" + day;

var today = year + "-" + month + "-" + day;


document.getElementById('date').value = today;
}
</script>


<body id="page-top" class="index" onload="SetDate();">
        
    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container">
        
        <a href="http://www.mitpune.com/" target="_blank"><img src="./img/mitlogo.png" style="float:left;width:5%;height:5%;margin-top:0.3%; margin-right:0.3%"></a>
                <!--<img src="./img/cesa.jpg" style="float:right;width:5%;height:5%;margin-top:0.5%">-->
        
            <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header page-scroll">
  
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="index.php#page-top" style="font-family:Helvetica, Arial">NIRMITEE</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-left">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                     <li>
                        <a class="page-scroll" href="index.php#aboutn">About</a>
                    </li>
                    
                    <li>
                        <a class="page-scroll" href="index.php#event">Events</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="schedule.php">Schedule</a>
                    </li> 
                    <li>
                        <a class="page-scroll" href="index.php#registration">Register</a>
                    </li> 
                    <li>
                        <a class="page-scroll" href="gallery.php">Gallery</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="sponsors.php">Sponsors</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="index.php#accomodation">Accommodation</a>
                    </li>
                    
                    <li>
                        <a class="page-scroll" href="index.php#contact1">Contact</a>
                    </li>
                   
                  
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
        
        
        <!--Start of side nav-->
  <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="vedzen.php">Lean-Kaizen Seminar</a>
  <a href="imperial.php">Overseas Education Seminar</a>
  
 </div>
<span style="font-family:Helvetica,Arial;font-size:25px;cursor:pointer" onclick="openNav()">&#9776; WHAT'S NEW!</span>

<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
</script>

    </nav>

    <section id="schedule">
        <div class="container">

            <div class="row text-center">

                <div class="col-lg-12 text-center"><br>
                    <h2 class="section-heading">Schedule</h2>
                </div>          
            <div class="row text-center">
            <div class="col-md-1"></div>
                <div class="col-md-10">
                <h3 class="section-heading">24th Feb 2017</h3>
                <img src="./sponsers/sw.png" class="responsive-image">
                <h3 class="section-heading">25th Feb 2017</h3>
                <img src="./sponsers/s25th.png" class="responsive-image">         
                </div>

            </div>
        </div>

    </section>      

     <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" integrity="sha384-mE6eXfrb8jxl0rzJDBRanYqgBxtJ6Unn4/1F7q4xRRyIw7Vdg9jP4ycT7x1iVsgb" crossorigin="anonymous"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/agency.min.js"></script>
</body>
</html>