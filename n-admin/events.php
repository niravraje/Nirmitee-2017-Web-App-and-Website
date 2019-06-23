<?php
include 'checklogin.php' ;
function getName($table,$param,$value,$conn,$req) {
 $select = "select * from $table where $param = $value ";
 $result = mysqli_query($conn,$select);
 $row = mysqli_fetch_array($result);
 $name =  $row["$req"];
 //echo $name;
 if(mysqli_num_rows($result)>0)
 {
   return $name;
 }
 else {
   return 0;
 }
}
?>
<!DOCTYPE html>
<html lang="en">
 <head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Events</title>
   <meta name="description" content="">
   <meta name="author" content="templatemo">
   <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
   <link href="css/font-awesome.min.css" rel="stylesheet">
   <link href="css/bootstrap.min.css" rel="stylesheet">
   <link href="css/templatemo-style.css" rel="stylesheet">
 </head>
 <body>
   <!-- Left column -->
   <div class="templatemo-flex-row">
     <div class="templatemo-sidebar">

    <header class="templatemo-site-header">
      <div class="square"></div>
      <h1>Nirmitee '17</h1>
    </header>

    <div class="profile-photo-container">
    <!-- <img src="images/summit.png" alt="Profile Photo" class="img-responsive">  -->
    <div class="profile-photo-overlay"></div>
    </div>

    <div class="mobile-menu-icon">
      <i class="fa fa-bars"></i>
    </div>

    <nav class="templatemo-left-nav">
      <ul>
        <li><a href="registrations.php"><i class="fa fa-pencil-square fa-fw"></i>Registrations</a></li>
        <li><a href="events.php" class="active"><i class="fa fa-play fa-fw"></i>Events</a></li>
        <li><a href="signout.php"><i class="fa fa-sign-out fa-fw"></i>Sign Out</a></li>
      </ul>
    </nav> 

  </div>
    <!-- Main content -->
     <div class="templatemo-content col-1 light-gray-bg">
       <div class="templatemo-top-nav-container">
         <div class="row">
           <nav class="templatemo-top-nav col-lg-12 col-md-12">
             <h1>Events</h1><br>
             <div class="templatemo-content-container">
               <div class="templatemo-flex-row flex-content-row">
                 <form class="templatemo-search-form" action="" method='post'>
                   <div class="input-group">
                     <input type="text" class="form-control" placeholder="Search Event Name" name="searchterm" id="srch-term">
                     <br><br><center><input type="submit" name="submit_search" class="templatemo-blue-button"></input></center>
                   </div>
                 </form>
           </nav>
           <nav class="templatemo-top-nav col-lg-12 col-md-12">

               <ul class="text-uppercase">
               <li><a class="userd_signup" href="newevent.php">Add</a></li>
              </ul>
           </nav>
         </div>
       </div>
   <?php
   if(isset($_POST['submit_search']))
   {
     $searchterm=$_POST["searchterm"];
     $select="select * from events where `e_name` like '%".$searchterm."%' ";
   }
   else
   {
     $select="select * from events";
   }

$result = mysqli_query($conn,$select);
if(mysqli_num_rows($result)<=0)
{
 ?>
           <div class="templatemo-content-widget white-bg col-2" >
             <i class="fa fa-times"></i>
             <div class="square"></div>
             <h2 class="templatemo-inline-block">No Results Found</h2>
     </div>
     <?php
}
else
{
 while($row = mysqli_fetch_array($result))
 {
   $id = $row['e_id'];
   $eventName = $row['e_name'];
   $eventFees = $row['e_fees'];
   $eventDate = $row['e_date'];
   $eventDetails = htmlspecialchars_decode($row['e_details']);
?>
  <div class="templatemo-content-widget white-bg col-2" >
     <form action="editevent.php" method="post">
             <i class="fa fa-times"></i>
             <div class="square"></div>
             <h2 class="templatemo-inline-block"><?php echo $eventName; ?></h2>
             <br><br>
             <h3>
             <table>

             <tr>
                 <td>  Date </td><td align="center" style="width:20px">:</td> <td><?php echo $eventDate; ?></td>
            </tr>

            <tr>
            	<td>Registration Fees</td><td align="center" style="width:20px">:</td> <td><?php echo $eventFees; ?></td>
            	<td style="width:240px"></td>
            </tr>

            <tr>
                <td>  Details </td><td align="center" style="width:20px">:</td> <td><br><?php echo $eventDetails; ?></td>
            </tr>

            </table>
               </h3>
             <br>
             <table>
              <tr><td>
             <input type="hidden" name="id" value="<?php echo $id;?>"</input>
             <input type="submit" class="templatemo-blue-button" value="  Edit   " name="s"></input>
       			</form></td><td style="width:50px"></td>
       			</tr>
           </table>
       </div>
<?php
 }
}
?>
<!-- JS -->
   <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>        <!-- jQuery -->
   <script type="text/javascript" src="js/bootstrap-filestyle.min.js"></script>  <!-- http://markusslima.github.io/bootstrap-filestyle/ -->
   <script type="text/javascript" src="js/templatemo-script.js"></script>        
</body>
</html>
<?php mysqli_close($conn); ?>
