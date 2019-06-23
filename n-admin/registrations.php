 <?php
  include 'checklogin.php' ;
  function getName($table,$param,$value,$conn,$req) {
  $select = "select * from $table where $param = $value ";
  $result = mysqli_query($conn,$select);
  $row = mysqli_fetch_array($result);
  $name =  $row["$req"];
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
    <title>Registrations</title>
    <meta name="description" content="">
    <meta name="author" content="templatemo">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/templatemo-style.css" rel="stylesheet">
    <link href="css/table-style.css" rel="stylesheet">
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
        <li><a href="registrations.php" class="active"><i class="fa fa-pencil-square fa-fw"></i>Registrations</a></li>
        <li><a href="events.php"><i class="fa fa-play fa-fw"></i>Events</a></li>
        <li><a href="signout.php"><i class="fa fa-sign-out fa-fw"></i>Sign Out</a></li>
      </ul>
    </nav> 

  </div>

     <!-- Main content -->
      <div class="templatemo-content col-1 light-gray-bg">
        <div class="templatemo-top-nav-container">
          <div class="row">

          <nav class="templatemo-top-nav col-lg-12 col-md-12">
            <h1>Registrations</h1><br>
            <div class="templatemo-content-container">
              <div class="templatemo-flex-row flex-content-row">

                <form class="templatemo-search-form" action="" method='post'>

                  <label for="inputBusNum">Select Event</label>
                    <select name="event_selection" class="form-control">
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
                        while($event_row = mysqli_fetch_array($sp_res))
                        {
                          ?>
                          <option value="<?php echo $event_row['e_id'];?>" > <?php echo $event_row['e_name'];?> </option>
                          <?php
                        }
                      }
                      ?>
                  </select>

                  <br><br>
                  <center><input type="submit" name="submit_event" class="templatemo-blue-button"></input></center>

                </form>
                </div>
              </div>
            
            </nav>  
          </div>
        </div>



<!-- MAIN CONTENT -->

<?php
$reg_count = 0;

if(isset($_POST['submit_event']))     
{
  $event_id = $_POST['event_selection'];
  $eventName = getName("events", "e_id", $event_id, $conn, "e_name" );

  $select= "SELECT * FROM registrations WHERE `r_status_del` = 0 AND `r_event_id` = '$event_id' ";

  $count_query = "SELECT count(r_id) AS regcount FROM registrations WHERE r_event_id = '$event_id' ";
  $count_res = mysqli_query($conn, $count_query);
  $count_row = mysqli_fetch_array($count_res);
  $reg_count = $count_row['regcount'];

  //Not optimized queries. I know.


}
else
{
  $eventName = "All Events";

  $select="SELECT * FROM registrations WHERE `r_status_del` = 0";
  $count_query = "SELECT count(r_id) AS regcount FROM registrations";
  $count_res = mysqli_query($conn, $count_query);
  $count_row = mysqli_fetch_array($count_res);
  $reg_count = $count_row['regcount'];
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
  
  
?>

<div class="templatemo-content-widget white-bg col-2" >
            
              <i class="fa fa-times"></i>
              <div class="square"></div>
              <h2 class="templatemo-inline-block"><?php echo $eventName; ?></h2>
              <br><br>
              <h2 class="templatemo-inline-block">Registrations received: &nbsp; <?php echo $reg_count; ?></h2>
              <br><br>
              <form action="email_list.php" method="post">
                <?php 
                if(isset($_POST['submit_event'])) { 
                  ?>
                  <input name="eve_id" type="hidden" value = "<?php echo $event_id; ?>" >
                  <?php 
                }
                else{ ?>
                  <input name="eve_id"  type="hidden" value = "0" >
                  <?php 
                }
                 ?>
                <input type="submit" name="getEmailList" value="Get Email List" class="templatemo-blue-button"></input>
              </form>
         <br><br> 

<table class="bordered">
    <thead>

    <tr>
        <th>Registration ID</th>        
        <th>Name</th>
        <th>Mobile</th>
        <th>E-mail</th>
        <th>College</th>
        <th>No. of Participants</th>
        <th>Registration Date</th>
    </tr>
    </thead>


<?php

  while($row = mysqli_fetch_array($result))
  {
    $r_id = $row['r_id'];
    $r_p_name = $row['r_p_name'];
    $r_p_mobile = $row['r_p_mobile'];
    $r_p_email = $row['r_p_email'];
    $r_p_college = $row['r_p_college'];
    $r_no_of_p = $row['r_no_of_p'];
    $r_date = $row['r_date'];
    //$r_time = $row['r_time'];
    

?>
    <tr>
        <td><?php echo $r_id; ?></td>        
        <td><?php echo $r_p_name; ?></td>
        <td><?php echo $r_p_mobile; ?></td>
        <td><?php echo $r_p_email; ?></td>
        <td><?php echo $r_p_college; ?></td>
        <td><?php echo $r_no_of_p; ?></td>
        <td><?php echo $r_date; ?></td>
    </tr>   

<?php 
  }
 ?>   

</table>

<?php 
}
 ?>

<br><br>

</div>





            
    

 <!-- JS -->
    <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>        <!-- jQuery -->
    <script type="text/javascript" src="js/bootstrap-filestyle.min.js"></script>  <!-- http://markusslima.github.io/bootstrap-filestyle/ -->
    <script type="text/javascript" src="js/templatemo-script.js"></script>        <!-- Templatemo Script -->
</body>
</html>

<?php mysqli_close($conn); ?>
