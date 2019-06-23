 <?php
  include 'checklogin.php' ;



 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Email List</title>
    <meta name="description" content="">
    <meta name="author" content="templatemo">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/templatemo-style.css" rel="stylesheet">
  </head>
  <body>


     <!-- Main content -->
      <div class="templatemo-content col-1 light-gray-bg">
        <div class="templatemo-top-nav-container">
          <h1>Email List</h1><br><br>
        <?php 

        $event_id = $_POST['eve_id'];
        if($event_id == 0){
          $select = "SELECT r_p_email FROM registrations";
        }
        else{
          $select = "SELECT r_p_email FROM registrations WHERE r_event_id = '$event_id' ";
        }

        $result = mysqli_query($conn, $select);
        while($row = mysqli_fetch_array($result)){
          echo $row['r_p_email']."; ";
        }
         ?>
        

        </div>
      </div>


</body>
</html>

<?php mysqli_close($conn); ?>
