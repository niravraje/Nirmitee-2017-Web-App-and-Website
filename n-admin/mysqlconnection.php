<?php
$servername = "148.72.232.173:3306";
$username = "mitnirmitee";
$password = "mit@nirmitee17";
$dbname = "nirmitee17";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


?>
