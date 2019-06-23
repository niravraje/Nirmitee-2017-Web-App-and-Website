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
    <!-- Header -->


	<section id="gallery">
	<div class="container">
    <div class="row">
        <div class="text-center">
            <h1 style="color: black">Vedzen</h1>
        </div>
	
<div class="col-lg-12 text-center">
            
                                 <p >
                                                   <h4>SEMINAR DETAILS</h4>
‘LEAN KAIZEN FOR SMART CONSTRUCTION’ will be a two day seminar, organized by the ‘VEDZEN’<br> institute in collaboration with ‘NIRMITEE 2017’ and will have following structure:<br><br>
<h5>KEYNOTE SESSION</h5>
<h6>TOPIC:</h6> 
ACADEMIC RIGOUR IN REAL LIFE CONSTRUCTION <br>  
The keynote will focus on embedding the theoretical attitude of research and application in the real world <br><br>
<h5>PANEL DISCUSSION</h5>
<h5>TOPIC:</h5>
ADOPTING LEAN MANAGEMENT FOR SMART CONDSTRUCTION IN INFRASTRUCTION PROJECTS.<br>
CULTURE AT YOUR CONSTRUCTION SITE<br><br>

<h5>KNOWLADGE SESSIONS</h5>
<h6>TOPIC:</h6>
LAST PLANNER<br>
IN – BUILT QUALITY<br>
JUST IN TIME (JIT)<br>
VISUAL MANAGEMENT THROUGH 5S AND 8 WASTES<br>

SUCCESS CASE STUDIES FROM CONSTRUCTION COMPANIES ACROSS INDIA<br><br><br>

                                     
								  
                                 
                                  <h2>Schedule : </h2>
								  <br><br><br>
								<table align="center">
								<tr><td colspan="9"><b>24th February 2017,Friday</b></td></tr>
								<tr><td colspan="2"><b>Time</b></td><td colspan="7"><b>Sessions</b></td></tr>
								<tr><td>9.30 AM</td><td>10.00 AM</td><td colspan="7">Registration,Tea,Cookies</td></tr>
								<tr><td>10.00 AM</td><td>10.20 AM</td><td colspan="7">Welcome note by VEDZEN</td></tr>
								<tr><td>10.20 AM</td><td>10.45 AM</td><td colspan="7">Keynote session</td></tr>
								<tr><td>10.45 AM</td><td>11.30 AM</td><td colspan="7">Panel Discussion 1</td></tr>
								<tr><td>11.30 AM</td><td>11.45 AM</td><td colspan="7"><b>Tea break</b></td></tr>
								<tr><td>11.45 AM</td><td>12.30 PM</td><td colspan="6">Panel Discussion 2</td><td rowspan="7">Town<br>Planning<br>Event<br></td></tr>
								<tr><td>1.00 PM</td><td>2.00 PM</td><td colspan="5"><b>Lunch</b></td><td rowspan="6">RYLA</td></tr>
								<tr><td>2.00 PM</td><td></td><td rowspan="5">Technified<br> Solutions<br> Event<br> (Workshop by<br> Prof. Abhijeet<br> Gandage)</td><td rowspan="5">Paper <br>presentation</td></tr>
								<tr><td>3.00 PM</td><td></td></tr>
								<tr><td>4.00 PM</td><td></td></tr>
								<tr><td>5.00 PM</td><td></td></tr>
								<tr><td>6.00 PM</td><td></td></tr>
								</table>
								<br><br><br>
								<table align="center">
								<tr><td colspan="3"><b>25th February 2017,Friday</b></td></tr>
								<tr><td colspan="2"><b>Time</b></td><td><b>Sessions</b></td></tr>
								<tr><td>9.30 AM</td><td>10.00 AM</td><td>Registration,Tea,Cookies</td></tr>
								<tr><td>10.00 AM</td><td>10.10 AM</td><td>Introductory session</td></tr>
								<tr><td>10.10 AM</td><td>10.30 AM</td><td>Success Case Study 1</td></tr>
								<tr><td>10.30 AM</td><td>10.50 AM</td><td>Success Case Study 2</td></tr>
								<tr><td>10.50 AM</td><td>11.15 AM</td><td>Success Case Study 3</td></tr>
								<tr><td>11.15 AM</td><td>11.40 AM</td><td>Knowledge Session 1</td></tr>
								<tr><td>11.40 AM</td><td>12.00 PM</td><td><b>Tea Break</b></td></tr>
								<tr><td>12.00 PM</td><td>12.25 PM</td><td>Knowledge Session 2</td></tr>
								<tr><td>12.25 PM</td><td>12.50 PM</td><td>Knowledge Session 3</td></tr>
								<tr><td>12.50 PM</td><td>01.15 PM</td><td>Knowledge Session 4</td></tr>
								<tr><td>1.15 PM</td><td>02.15 PM</td><td><b>Lunch</b></td></tr>
								<tr><td>2.00 PM</td><td>03.00 PM</td><td></td></tr>
								<tr><td>3.00 PM</td><td>06.00 PM</td><td>Valedictory Function and Prize Distribution</td></tr>
								</table>

                               <br><br><br>
              <h3>REGISTRATION FEE</h3><br>

	<h4>FOR PROFESSIONALS</h4> : INR 3000/-<br>
(Inclusive of Lunch & Refreshments)<br>
(Early Bird and Group Discounts Available)<br><br>

Please fill in the following form with your details to complete the registration process for the VEDZEN seminar on ‘Lean Kaizen for Smart Construction’ and resend the completed form to us on:<br>

<a href="./down/nir.xlsx" download>Download</a><br>
<br>nirmitee.mit@gmail.com<br><br>
A confirmation email will be sent to you within 24 hrs of your entry.<br>



NOTE: The above form is for Professionals only.<br>


	<h4>FOR STUDENTS</h4> : INR 200/-<br>
	(Valid Student ID Cards Compulsory)<br> <br>

							   <button type="submit" class="btn btn-xl" onClick="window.location='index.php#registration'">Registration</button></a>
        
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