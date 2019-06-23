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
                <a class="navbar-brand page-scroll" href="#page-top" style="font-family:Helvetica, Arial">NIRMITEE</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-left">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
				   <li>
                        <a class="page-scroll" href="#aboutn">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#event">Events</a>
                    </li> 
					<li>
                        <a class="page-scroll" href="schedule.php">Schedule</a>
                    </li> 
					<li>
                        <a class="page-scroll" href="#registration">Register</a>
                    </li> 
					<li>
                        <a class="page-scroll" href="gallery.php">Gallery</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="sponsors.php">Sponsors</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#accomodation">Accommodation</a>
                    </li>
					
                    <li>
                        <a class="page-scroll" href="#contact1">Contact</a>
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
 
<div id="schedule" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                             <div class="modal-dialog">
                              <div class="modal-content">
                               <div class="modal-body">
                                <h2 class="text-center">Schedule</h2>
            
                                 <p class="text-justify">
                                  Coming soon!<br>
                                 </p>
                               </div>
                               <br>
                               <button class="btn btn-primary btn-lg center-block" data-dismiss="modal" aria-hidden="true">OK</button><br>
                              </div>
                             </div>
                            </div>

 
  <header>
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in"></div>
                <div class="intro-heading"></div>
                
            </div>
        </div>

	<footer>
    <ul class="list-inline social-buttons"><li><a href="https://www.google.co.in/maps/place/Maharashtra+Institute+of+Technology/@18.5181191,73.8128384,17z/data=!4m5!3m4!1s0x3bc2bfa3ae7cb5d1:0xdf39fc995c8355f9!8m2!3d18.5181191!4d73.8150271" target="_blank"><i class="fa fa-map-marker"></i></a></li></ul>
  <div><h4 style="color: black">Follow us on:</h4></div>
		<ul class="list-inline social-buttons">
                            <li><a href="https://www.instagram.com/nirmitee_2017/" target="_blank"><i class="fa fa-instagram"></i></a>
                            </li>
                            <li><a href="https://www.facebook.com/Nirmitee2016/" target="_blank"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="https://twitter.com/nirmitee_2016" target="_blank"><i class="fa fa-twitter"></i></a>
                            </li>
							
                        </ul></footer>
    </header>
	

	
	 <section id="aboutn">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">About Nirmitee</h2>
                    
                </div>
            </div>
            <div class="row text-center">
			<div class="col-md-3"></div>
                <div class="col-md-6">
				<p>
				Civil Engineering Student Association (CESA) of MAEER’s Maharashtra Institute of Technology,Pune brings to you NIRMITEE , the national level Civil Engineering Technical Event.
				This event aspires to bridge the distance between the working industry and the academia.</p>
				<p>We proudly present to you the 18th year of NIRMITEE in all its glory. 
				This event reaches out to a massive population and experiences the participation of almost 3500 students .
				It provides an opportunity for amateurs to interact with the profound members of the budding civil industry and the teaching faculty of 300 colleges across the country.</p>
                <p>“The best way to predict the future is to create it”</p>
                <p align="right">-Abraham Lincoln</p>
				<p>NIRMITEE meaning  nirman or creation symbolises our attempt to strengthen the future creators with the help of the present experience , knowledge and healthy competition. 
				This can only be done by providing a platform for students to perform , which will be evaluated by renowned personnel of Civil Engineering.</p>

                <p>
				Begun in 1999 , this event has grown to become more professional in its approach and is hence gaining popularity. 
				This year we intended to grow in a leap , to set new standards and to achieve new heights. NIRMITEE 2017</p>

                </div>
				<div class="col-md-3"></div>

            </div>
        </div>
    </section>		

    <section id="event">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Events</h2>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="timeline">
                        <li>
                            <div class="timeline-image">
                             <a href="#aboutEvent1" data-toggle="modal">
                                	<img class="img-circle img-responsive" src="img/about/paperp.png" alt=""></a>
                            </div>

                            <div id="aboutEvent1" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                             <div class="modal-dialog">
                              <div class="modal-content">
                               <div class="modal-body">
                                <h2 class="text-center">Paper Presentation</h2>
                               
					<p class="text-justify">
                                        <h4> Registration Fees:</h4> Rs.									                             
									 <?php
											$sp_query ="SELECT e_fees FROM events WHERE e_id=20";
											$sp_res = mysqli_query($conn,$sp_query);
												while($row = mysqli_fetch_array($sp_res))
												{
													echo $row['e_fees'] . "<br />";										 						
												}
                                     ?>
       										
											
								 <h4>Date:</h4>
								 
	                                <?php
										$sp_query ="SELECT e_date FROM events WHERE e_id=20";
											$sp_res = mysqli_query($conn,$sp_query);
												while($row = mysqli_fetch_array($sp_res))
												{
													echo $row['e_date'] . "<br />";										 						
												}
									?>						
								 
								 <h4>Details:</h4>
								    <?php
										$sp_query ="SELECT e_details FROM events WHERE e_id=20";
											$sp_res = mysqli_query($conn,$sp_query);
												while($row = mysqli_fetch_array($sp_res))
												{
													echo htmlspecialchars_decode($row['e_details']) . "<br />";										 						
												}
									?>															
                                 </p>
                               </div>
                               <br>
                               <button class="btn btn-primary btn-lg center-block" data-dismiss="modal" aria-hidden="true">OK</button><br>
                              </div>
                             </div>
                            </div>
                            
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4 class="subheading">Paper Presentation</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">This event presents a National level platform to participants for presenting their technical papers in various fields of civil engineering.</p>
                                </div>
                               
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                              <a href="#aboutEvent2" data-toggle="modal">
                                <img class="img-circle img-responsive" src="img/about/town.png" alt=""> </a>
                            </div>

                            <div id="aboutEvent2" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                             <div class="modal-dialog">
                              <div class="modal-content">
                               <div class="modal-body">
                                <h2 class="text-center">Township Planning</h2>
            
                                 <p class="text-justify">
                                        <h4> Registration Fees:</h4> Rs.									                             
									 <?php
											$sp_query ="SELECT e_fees FROM events WHERE e_id=21";
											$sp_res = mysqli_query($conn,$sp_query);
												while($row = mysqli_fetch_array($sp_res))
												{
													echo $row['e_fees'] . "<br />";										 						
												}
                                     ?>
       										
											
								 <h4>Date:</h4>
								 
	                                <?php
										$sp_query ="SELECT e_date FROM events WHERE e_id=21";
											$sp_res = mysqli_query($conn,$sp_query);
												while($row = mysqli_fetch_array($sp_res))
												{
													echo $row['e_date'] . "<br />";										 						
												}
									?>						
								 
								 <h4>Details:</h4>
								    <?php
										$sp_query ="SELECT e_details FROM events WHERE e_id=21";
											$sp_res = mysqli_query($conn,$sp_query);
												while($row = mysqli_fetch_array($sp_res))
												{
													echo htmlspecialchars_decode($row['e_details']) . "<br />";									 						
												}
									?>						</p>
                               </div>
                               <br>
                               <button class="btn btn-primary btn-lg center-block" data-dismiss="modal" aria-hidden="true">OK</button><br>
                              </div>
                             </div>
                            </div>

                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4 class="subheading">Township Planning</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Participants will design a futuristic, technologically advanced and sustainable model of a township or part of it, infusing their creativity and innovation. Participants will design a patch of the city which incorporates principles of design, utility and optimisation.</p>
                                     <a href="./down/townshipPS.pdf" download>PROBLEM STATEMENT</a><br></p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-image">
                              <a href="#aboutEvent3" data-toggle="modal">
                                <img class="img-circle img-responsive" src="img/about/smartc.png" alt=""></a>
                            </div>

                            <div id="aboutEvent3" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                             <div class="modal-dialog">
                              <div class="modal-content">
                               <div class="modal-body">
                                <h2 class="text-center">Cube Crete</h2>
            
                                 <p class="text-justify">
                                        <h4> Registration Fees:</h4>Rs.									                             
									 <?php
											$sp_query ="SELECT e_fees FROM events WHERE e_id=22";
											$sp_res = mysqli_query($conn,$sp_query);
												while($row = mysqli_fetch_array($sp_res))
												{
													echo $row['e_fees'] . "<br />";										 						
												}
                                     ?>
       										
											
								 <h4>Date:</h4>
								 
	                                <?php
										$sp_query ="SELECT e_date FROM events WHERE e_id=22";
											$sp_res = mysqli_query($conn,$sp_query);
												while($row = mysqli_fetch_array($sp_res))
												{
													echo $row['e_date'] . "<br />";										 						
												}
									?>						
								 
								 <h4>Details:</h4>
								    <?php
										$sp_query ="SELECT e_details FROM events WHERE e_id=22";
											$sp_res = mysqli_query($conn,$sp_query);
												while($row = mysqli_fetch_array($sp_res))
												{
													echo htmlspecialchars_decode($row['e_details']) . "<br />";									 						
												}
									?>						</p>
                               </div>
                               <br>
                               <button class="btn btn-primary btn-lg center-block" data-dismiss="modal" aria-hidden="true">OK</button><br>
                              </div>
                             </div>
                            </div>

                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4 class="subheading">Cube Crete</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">This event will test participants’ ability to come up with a Concrete Mix Design under the given problem statement to achieve the targeted strength.
                                    <br></p><a href="./down/cubecrete.docx" download>PROBLEM STATEMENT</a>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                              <a href="#aboutEvent4" data-toggle="modal">
                                <img class="img-circle img-responsive" src="img/about/bob.png" alt=""></a>
                            </div>

                            <div id="aboutEvent4" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                             <div class="modal-dialog">
                              <div class="modal-content">
                               <div class="modal-body">
                                <h2 class="text-center">Bob the Builder 2.0</h2>
            
                                 <p class="text-justify">
								 
                                        <h4> Registration Fees:</h4> Rs.									                             
									 <?php
											$sp_query ="SELECT e_fees FROM events WHERE e_id=23";
											$sp_res = mysqli_query($conn,$sp_query);
												while($row = mysqli_fetch_array($sp_res))
												{
													echo $row['e_fees'] . "<br />";										 						
												}
                                     ?>
       										
											
								 <h4>Date:</h4>
								 
	                                <?php
										$sp_query ="SELECT e_date FROM events WHERE e_id=23";
											$sp_res = mysqli_query($conn,$sp_query);
												while($row = mysqli_fetch_array($sp_res))
												{
													echo $row['e_date'] . "<br />";										 						
												}
									?>						
								 
								 <h4>Details:</h4>
								    <?php
										$sp_query ="SELECT e_details FROM events WHERE e_id=23";
											$sp_res = mysqli_query($conn,$sp_query);
												while($row = mysqli_fetch_array($sp_res))
												{
													echo htmlspecialchars_decode($row['e_details']) . "<br />";									 						
												}
									?>						</p>
                               </div>
                               <br>
                               <button class="btn btn-primary btn-lg center-block" data-dismiss="modal" aria-hidden="true">OK</button><br>
                              </div>
                             </div>
                            </div>

                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4 class="subheading">Bob the Builder 2.0</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">This industry oriented version of the event is a joyride of learning to design steel structures on Staad Pro to experiencing the thrill of seeing the forces in action.</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-image">
                              <a href="#aboutEvent5" data-toggle="modal">
                                <img class="img-circle img-responsive" src="img/about/survey.png" alt=""></a>
                            </div>

                            <div id="aboutEvent5" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                             <div class="modal-dialog">
                              <div class="modal-content">
                               <div class="modal-body">
                                <h2 class="text-center">Line'em Out</h2>
            
                                 <p class="text-justify">
								 
                                        <h4> Registration Fees:</h4>Rs.									                             
									 <?php
											$sp_query ="SELECT e_fees FROM events WHERE e_id=30";
											$sp_res = mysqli_query($conn,$sp_query);
												while($row = mysqli_fetch_array($sp_res))
												{
													echo $row['e_fees'] . "<br />";										 						
												}
                                     ?>
       										
											
								 <h4>Date:</h4>
								 
	                                <?php
										$sp_query ="SELECT e_date FROM events WHERE e_id=30";
											$sp_res = mysqli_query($conn,$sp_query);
												while($row = mysqli_fetch_array($sp_res))
												{
													echo $row['e_date'] . "<br />";										 						
												}
									?>						
								 
								 <h4>Details:</h4>
								    <?php
										$sp_query ="SELECT e_details FROM events WHERE e_id=30";
											$sp_res = mysqli_query($conn,$sp_query);
												while($row = mysqli_fetch_array($sp_res))
												{
													echo htmlspecialchars_decode($row['e_details']) . "<br />";									 						
												}
									?>							 
								 
                                 </p>
                               </div>
                               <br>
                               <button class="btn btn-primary btn-lg center-block" data-dismiss="modal" aria-hidden="true">OK</button><br>
                              </div>
                             </div>
                            </div>

                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4 class="subheading">Line'em Out</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">The event is a hands on challenge to convert a line plan into a actual on site line out, using instruments such as theodolite, tapes, total-station etc.</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                              <a href="#aboutEvent6" data-toggle="modal">
                                <img class="img-circle img-responsive" src="img/about/softcon.png" alt=""></a>
                            </div>

                            <div id="aboutEvent6" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                             <div class="modal-dialog">
                              <div class="modal-content">
                               <div class="modal-body">
                                <h2 class="text-center">SOFTCON</h2>
            
                                 <p class="text-justify">
                                        <h4> Registration Fees: </h4>Rs.									                             
									 <?php
											$sp_query ="SELECT e_fees FROM events WHERE e_id=24";
											$sp_res = mysqli_query($conn,$sp_query);
												while($row = mysqli_fetch_array($sp_res))
												{
													echo $row['e_fees'] . "<br />";										 						
												}
                                     ?>
       										
											
								 <h4>Date:</h4>
								 
	                                <?php
										$sp_query ="SELECT e_date FROM events WHERE e_id=24";
											$sp_res = mysqli_query($conn,$sp_query);
												while($row = mysqli_fetch_array($sp_res))
												{
													echo $row['e_date'] . "<br />";										 						
												}
									?>						
								 
								 <h4>Details:</h4>
								    <?php
										$sp_query ="SELECT e_details FROM events WHERE e_id=24";
											$sp_res = mysqli_query($conn,$sp_query);
												while($row = mysqli_fetch_array($sp_res))
												{
													echo htmlspecialchars_decode($row['e_details']) . "<br />";									 						
												}
									?>						</p>
                               </div>
                               <br>
                               <button class="btn btn-primary btn-lg center-block" data-dismiss="modal" aria-hidden="true">OK</button><br>
                              </div>
                             </div>
                            </div>

                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4 class="subheading">SOFTCON (Software in Construction)</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Constructions sector is entering into a new era and as a result of there is a need to use various types of software to reduce the human effort. Hence, we are encouraging the students by introducing this event to show their talent in using software such as AutoCAD, Primavera, GIS, ERP and MSP.</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-image">
                              <a href="#aboutEvent7" data-toggle="modal">
                                <img class="img-circle img-responsive" src="img/about/quiz.png" alt=""></a>
                            </div>

                            <div id="aboutEvent7" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                             <div class="modal-dialog">
                              <div class="modal-content">
                               <div class="modal-body">
                                <h2 class="text-center">Technical Quiz</h2>
            
                                 <p class="text-justify">
                                        <h4> Registration Fees:</h4> Rs.									                             
									 <?php
											$sp_query ="SELECT e_fees FROM events WHERE e_id=25";
											$sp_res = mysqli_query($conn,$sp_query);
												while($row = mysqli_fetch_array($sp_res))
												{
													echo $row['e_fees'] . "<br />";										 						
												}
                                     ?>
       										
											
								 <h4>Date:</h4>
								 
	                                <?php
										$sp_query ="SELECT e_date FROM events WHERE e_id=25";
											$sp_res = mysqli_query($conn,$sp_query);
												while($row = mysqli_fetch_array($sp_res))
												{
													echo $row['e_date'] . "<br />";										 						
												}
									?>						
								 
								 <h4>Details:</h4>
								    <?php
										$sp_query ="SELECT e_details FROM events WHERE e_id=25";
											$sp_res = mysqli_query($conn,$sp_query);
												while($row = mysqli_fetch_array($sp_res))
												{
													echo htmlspecialchars_decode($row['e_details']) . "<br />";									 						
												}
									?>						</p>
                               </div>
                               <br>
                               <button class="btn btn-primary btn-lg center-block" data-dismiss="modal" aria-hidden="true">OK</button><br>
                              </div>
                             </div>
                            </div>

                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4 class="subheading">Technical Quiz</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">This event judges know-how of the fundamentals which form the core of civil engineering.</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                              <a href="#aboutEvent8" data-toggle="modal">
                                <img class="img-circle img-responsive" src="img/about/ryla.png" alt=""></a>
                            </div>

                            <div id="aboutEvent8" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                             <div class="modal-dialog">
                              <div class="modal-content">
                               <div class="modal-body">
                                <h2 class="text-center">RYLA</h2>
            
                                 <p class="text-justify">
                                        <h4> Registration Fees:</h4> Rs.									                             
									 <?php
											$sp_query ="SELECT e_fees FROM events WHERE e_id=26";
											$sp_res = mysqli_query($conn,$sp_query);
												while($row = mysqli_fetch_array($sp_res))
												{
													echo $row['e_fees'] . "<br />";										 						
												}
                                     ?>
       										
											
								 <h4>Date:</h4>
								 
	                                <?php
										$sp_query ="SELECT e_date FROM events WHERE e_id=26";
											$sp_res = mysqli_query($conn,$sp_query);
												while($row = mysqli_fetch_array($sp_res))
												{
													echo $row['e_date'] . "<br />";										 						
												}
									?>						
								 
								 <h4>Details:</h4>
								    <?php
										$sp_query ="SELECT e_details FROM events WHERE e_id=26";
											$sp_res = mysqli_query($conn,$sp_query);
												while($row = mysqli_fetch_array($sp_res))
												{
													echo htmlspecialchars_decode($row['e_details']) . "<br />";									 						
												}
									?>						</p>
                               </div>
                               <br>
                               <button class="btn btn-primary btn-lg center-block" data-dismiss="modal" aria-hidden="true">OK</button><br>
                              </div>
                             </div>
                            </div>

                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4 class="subheading">RYLA</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">This event will give you a chance to test your leadership qualities and communication skills. Let us come together to express and discuss our thoughts on ‘peace’ and be a change we want to see in the society.
</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-image">
                              <a href="#aboutEvent9" data-toggle="modal">
                                <img class="img-circle img-responsive" src="img/about/tender.png" alt=""></a>
                            </div>

                            <div id="aboutEvent9" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                             <div class="modal-dialog">
                              <div class="modal-content">
                               <div class="modal-body">
                                <h2 class="text-center">Tendering</h2>
            
                                 <p class="text-justify">
                                        <h4> Registration Fees:</h4>Rs.									                             
									 <?php
											$sp_query ="SELECT e_fees FROM events WHERE e_id=27";
											$sp_res = mysqli_query($conn,$sp_query);
												while($row = mysqli_fetch_array($sp_res))
												{
													echo $row['e_fees'] . "<br />";										 						
												}
                                     ?>
       										
											
								 <h4>Date:</h4>
								 
	                                <?php
										$sp_query ="SELECT e_date FROM events WHERE e_id=27";
											$sp_res = mysqli_query($conn,$sp_query);
												while($row = mysqli_fetch_array($sp_res))
												{
													echo $row['e_date'] . "<br />";										 						
												}
									?>						
								 
								 <h4>Details:</h4>
								    <?php
										$sp_query ="SELECT e_details FROM events WHERE e_id=27";
											$sp_res = mysqli_query($conn,$sp_query);
												while($row = mysqli_fetch_array($sp_res))
												{
													echo htmlspecialchars_decode($row['e_details']) . "<br />";									 						
												}
									?>						
                                 </p>
                               </div>
                               <br>
                               <button class="btn btn-primary btn-lg center-block" data-dismiss="modal" aria-hidden="true">OK</button><br>
                              </div>
                             </div>
                            </div>

                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4 class="subheading">Tendering</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">A well-executed project is a result of good contracting skills involved. So here we provide a platform for Civil Engineering students to present their contracting skills based on drawings, use of DSR and 3 Bid System.</p>
                                    <a href="./down/Tendering.zip" download>PROBLEM STATEMENT</a><br>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                              <a href="#aboutEvent10" data-toggle="modal">
                                <img class="img-circle img-responsive" src="img/about/tech.png" alt=""></a>
                            </div>

                            <div id="aboutEvent10" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                             <div class="modal-dialog">
                              <div class="modal-content">
                               <div class="modal-body">
                                <h2 class="text-center">Technified Solution</h2>
            
                                 <p class="text-justify">
                                        <h4> Registration Fees:</h4> Rs.									                             
									 <?php
											$sp_query ="SELECT e_fees FROM events WHERE e_id=28";
											$sp_res = mysqli_query($conn,$sp_query);
												while($row = mysqli_fetch_array($sp_res))
												{
													echo $row['e_fees'] . "<br />";										 						
												}
                                     ?>
       									
											
								 <h4>Date:</h4>
								 
	                                <?php
										$sp_query ="SELECT e_date FROM events WHERE e_id=28";
											$sp_res = mysqli_query($conn,$sp_query);
												while($row = mysqli_fetch_array($sp_res))
												{
													echo $row['e_date'] . "<br />";										 						
												}
									?>						
								 
								 <h4>Details:</h4>
								    <?php
										$sp_query ="SELECT e_details FROM events WHERE e_id=28";
											$sp_res = mysqli_query($conn,$sp_query);
												while($row = mysqli_fetch_array($sp_res))
												{
													echo htmlspecialchars_decode($row['e_details']) . "<br />";									 						
												}
									?>						
                                 </p>
                               </div>
                               <br>
                               <button class="btn btn-primary btn-lg center-block" data-dismiss="modal" aria-hidden="true">OK</button><br>
                              </div>
                             </div>
                            </div>

                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4 class="subheading">Technified Solution</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">This event focusses on solving complex technical civil engineering problems to enhance the competitive spirit and practical approach of a budding civil engineer.</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-image">
                              <a href="#aboutEvent11" data-toggle="modal">
                                <img class="img-circle img-responsive" src="img/about/bp.png" alt=""></a>
                            </div>

                            <div id="aboutEvent11" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                             <div class="modal-dialog">
                              <div class="modal-content">
                               <div class="modal-body">
                                <h2 class="text-center">Business Plan</h2>
            
                                 <p class="text-justify">
                                        <h4> Registration Fees:</h4>Rs.									                             
									 <?php
											$sp_query ="SELECT e_fees FROM events WHERE e_id=29";
											$sp_res = mysqli_query($conn,$sp_query);
												while($row = mysqli_fetch_array($sp_res))
												{
													echo $row['e_fees'] . "<br />";										 						
												}
                                     ?>
       										
											
								 <h4>Date:</h4>
								 
	                                <?php
										$sp_query ="SELECT e_date FROM events WHERE e_id=29";
											$sp_res = mysqli_query($conn,$sp_query);
												while($row = mysqli_fetch_array($sp_res))
												{
													echo $row['e_date'] . "<br />";										 						
												}
									?>						
								 
								 <h4>Details:</h4>
								    <?php
										$sp_query ="SELECT e_details FROM events WHERE e_id=29";
											$sp_res = mysqli_query($conn,$sp_query);
												while($row = mysqli_fetch_array($sp_res))
												{
													echo htmlspecialchars_decode($row['e_details']) . "<br />";										 						
												}
									?>						
                                 </p>
                               </div>
                               <br>
                               <button class="btn btn-primary btn-lg center-block" data-dismiss="modal" aria-hidden="true">OK</button><br>
                              </div>
                             </div>
                            </div>

                            <div class="timeline-panel">
                                <div class="timeline-heading">

                                    <h4 class="subheading">Business Plan</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Business is one of the foremost professions in Civil Engineering and this event aims to test the acumen of young entrepreneurial minds of the country.</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

   

 <section id="registration">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
				<h2 class="section-heading">Register</h2>	
				
                    <hr class="primary">
                </div>
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <form class="contact-form row" method="post" action="registration.php" >
                  
                        <div class="col-md-4 col-md-offset-4">
                            <label></label>
                            <input type="text" class="form-control" placeholder="Name" name="name" required>
                        </div>
                        

                        <div class="col-md-4 col-md-offset-4">
                            <label></label>
                            <input type="email" class="form-control" placeholder="Email" name="email" required>
                        </div>
                        
                        <div class="col-md-4 col-md-offset-4">
                            <label></label>
                        
                        <input type="text" class="form-control" placeholder="Phone" name="phone" required>                        
                        </div>
						
						<div class="col-md-4 col-md-offset-4">
                            <label></label>
                        
                        <input type="text" class="form-control" placeholder="College" name="college" required>                        
                        </div>
						
                        
						<div class="col-md-4 col-md-offset-4">
                            <label></label>
                        
                        <input type="date" class="form-control" placeholder="Date" id="date" name="date" readonly>                      
                        </div> 

 						<div class="col-md-4 col-md-offset-4">
                            <label></label>
                      

	  <select required id="event" name="event" class="form-control"" required>
                    <option hidden >Event</option>
                    <?php
                    $sp_query = "SELECT * FROM events";
                    $sp_res = mysqli_query($conn,$sp_query);

                    if(mysqli_num_rows($sp_res)<=0)
                    {
                        ?>
                        <option value="0">No Option Available</option>
                    <?php
                    }
                    else
                    {
                        while($eve = mysqli_fetch_array($sp_res))
                        {
                        ?>
                        <option value="<?php echo $eve['e_id'];?>"> <?php echo $eve['e_name'];?> </option>
                        <?php
					
						
                        }
                    }
                    ?>
					
                </select>
				        </div>   

                        <div class="col-md-4 col-md-offset-4">
                            <label></label>                       
								<select required id="sel1" class="form-control" name="nop">
								<option hidden >No. of participants</option>
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
								  </select>                        

						</div>
						
						
                                                             
-                        <div class="col-md-4 col-md-offset-4">
                            <label></label>
                            <button type="submit" data-toggle="modal" data-target="#alertModal" class="btn btn-primary btn-block btn-lg">Proceed <i class="ion-android-arrow-forward"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
	
 		

<section id="accomodation">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Accommodation</h2>
                    
                </div>
            </div>
            <div class="row text-center">
			<div class="col-md-3"></div>
                <div class="col-md-6">
				<p>
				<br>NIRMITEE witnesses a lot of participation from students all over the country and hence to facilitate their stay MIT, Pune provides FREE Accommodation. We will make sure that your short stay with us will be pleasant and comfortable. We need your utmost co-operation.
</p><br><br>
				<p><b>ACCOMMODATION IN-CHARGE  - </b></p>

				<p>PRASHANT JEJURKAR :<br>
                   +919423048528<br><br>
				</p>
               <p><b>ACCOMMODATION RULES AND REGULATIONS - </b></p>
               Accommodation and transportation facility will be provided for participants coming from 50kms or more distance from Pune city.<br><br>
               Only those applying for accommodation shall get a concession in transportation for one-way travel after submitting the original ticket.
          (Concession only for travel by MSRTC bus travel and Railways)<br><br>
               Those who apply for accommodation but cancel at the last minute will not  get any concession for transportation.<br><br>
              Accommodations shall be provided only on the days of the events.<br><br>
                Priority for accommodation shall be given to participants participating in maximum events.<br><br>
               Accommodation will be provided on a first come first serve basis.<br><br>
               Responsibility of luggage is upon the participant.<br><br>
               Any kind of misbehaviour at the accommodation facilities will lead to further strict action against the suspects.<br><br>
			   <b>Note.: Rights of admission reserved by the organisers.</b><br><br>


               <a href="https://www.google.co.in/maps/place/Maharashtra+Institute+of+Technology/@18.5181191,73.8128384,17z/data=!4m5!3m4!1s0x3bc2bfa3ae7cb5d1:0xdf39fc995c8355f9!8m2!3d18.5181191!4d73.8150271" target="_blank"><h4>Location</h4></a>

                </div>
				<div class="col-md-3"></div>

            </div>
        </div>
    </section>	


   <section id="contact1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Contact Us</h2>
                    <h3 class="section-subheading text-muted">Email-Address : nirmitee.mit@gmail.com</h3>
					<h4 class="service-heading">Event heads</h4>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-6">
                   
                   
                    <h4 class="service-heading">Harshavardhan Kalbhor</h4>
                    <p class="text-muted">harshkalbhor11@gmail.com</p>
					<p class="text-muted">+919764546259</p>
					<br>
					<h4 class="service-heading">Rama Pandkar</h4>
                    <p class="text-muted">ramarpandkar@gmail.com</p>
					<p class="text-muted">+91-9421900414</p>
                </div>
                <div class="col-md-6">
                    
                    
                    <h4 class="service-heading">Rushikesh Awate</h4>
                    <p class="text-muted">rushikesh.awate55@gmail.com</p>
					<p class="text-muted">+917276257889</p>
					<br>
					<h4 class="service-heading">Rishi Shah</h4>
                    <p class="text-muted">rishishah105@gmail.com</p>
					<p class="text-muted">+91-995808780</p>
                </div>

            </div>
        </div>
</section>
 	
	
    <footer>
        <div class="container">
		  <h4>Web developers : </h4>
		  <h5><br> Ranjeet Rayamane<br><br>Manasi Gosavi<br><br>Nirav Raje<br><br>Saisanju Sreevalsakumar </h5>
		
        </div>
    </footer>

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
