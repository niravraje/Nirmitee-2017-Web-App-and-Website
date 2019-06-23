<?php
	include 'checklogin.php';
	function php2Alert($msg) {
    echo '<script type="text/javascript">if (confirm("' . $msg . '")){document.location="volunteer.php"}else{document.location="volunteer.php"}</script>';
}

	$id = $_POST['id'];
	$eventName = $_POST['eventName'];
	$eventFees = $_POST['eventFees'];
	$eventDate= $_POST['eventDate'];
	$eventDetails = htmlspecialchars($_POST['eventDetails']);

	$mat_query= "UPDATE events SET e_name = '$eventName', e_fees = '$eventFees', e_date = '$eventDate', e_details = '$eventDetails' WHERE e_id =  '$id'";

	$result = mysqli_query($conn, $mat_query);
	mysqli_close($conn);
  	header("Location:events.php");
?>
