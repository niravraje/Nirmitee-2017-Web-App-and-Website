<?php
session_start();
$n=$_SESSION["name"];

$servername = "148.72.232.173:3306";
$username = "mitnirmitee";
$password = "mit@nirmitee17";
$dbname = "nirmitee17";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT r_id FROM registrations WHERE r_p_name='$n'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
		 $_SESSION["r_id"]=$row["r_id"];
     }
} 

else {
      echo "0 results";
     }

$conn->close();  
?>


<?php

require('fpdf.php');

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);

$pdf->Cell(40,10,"Registration ID: " . $_SESSION["r_id"]);
$pdf->Ln();
$pdf->Cell(40,10,"Registration Date: " . $_SESSION["date"]);
$pdf->Ln();
$pdf->Cell(40,10,"Name: " . $_SESSION["name"]);
$pdf->Ln();
$pdf->Cell(40,10,"Email: " . $_SESSION["email"]);
$pdf->Ln();
$pdf->Cell(40,10,"Phone: " . $_SESSION["phone"]);
$pdf->Ln();
$pdf->Cell(40,10,"Date: " . $_SESSION["date"]);
$pdf->Ln();
$pdf->Cell(40,10,"Event: " . $_SESSION["s_event"]);
$pdf->Ln();
$pdf->Cell(40,10,"Fees: " . $_SESSION["s_eventfees"]);
$pdf->Ln();
$pdf->Cell(40,10,"College: " . $_SESSION["college"]);
$pdf->Ln();

$pdf->Output();

?>