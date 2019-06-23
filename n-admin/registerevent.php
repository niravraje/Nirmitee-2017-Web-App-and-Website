<?php
include 'checklogin.php';
function php2Alert($msg) {
  echo '<script type="text/javascript">if (confirm("' . $msg . '")){document.location="fixtures.php"}else{document.location="fixtures.php"}</script>';
}
	$eventName = $_POST['eventName'];
	$eventFees  = $_POST['eventFees'];
	$eventDate = $_POST['eventDate'];
	$eventDetails = htmlspecialchars($_POST['eventDetails']);


	$query = "INSERT INTO `events`(`e_name`, `e_fees`, `e_date`, `e_details`) VALUES ('$eventName', '$eventFees',  '$eventDate',  '$eventDetails')";

	mysqli_query($conn,$query);
	header("Location:events.php");
?>
