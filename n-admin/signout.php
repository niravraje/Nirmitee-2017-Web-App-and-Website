<?php 
include 'checklogin.php';
unset($_SESSION['user']);
unset($_SESSION['pass']);
header("Location:index.php");
?>
<?php mysqli_close($conn); ?>