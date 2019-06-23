<?php
include 'mysqlconnection.php';

$sql = "SELECT * FROM login";
$result = mysqli_query($conn, $sql);

$user = $_POST['uname'];
$pass= $_POST['pass'];

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
		if($user == $row["login_id"]&& $pass==$row["password"])
		{
			session_start();
			$_SESSION['user'] = $user;
			$_SESSION['pass'] = $pass;

			$_SESSION['pr_id'] = $row['login_id'];
			$_SESSION['pri'] = $row["login_access"];

		header("Location:registrations.php");
			break;
		}


		header("Location:index.html");
    }

}



?>
<?php mysqli_close($conn); ?>
a
