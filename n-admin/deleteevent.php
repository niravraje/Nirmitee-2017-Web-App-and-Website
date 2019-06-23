<?php
include 'checklogin.php';
  $id = $_POST['id'];
  $query = "DELETE FROM events WHERE e_id='".$id."'";
  $result = mysqli_query($conn,$query);
  header("Location:events.php");
  mysqli_close($conn);
?>
