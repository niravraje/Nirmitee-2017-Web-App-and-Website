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
