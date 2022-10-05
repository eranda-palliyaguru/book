<?php
include("../connect.php");

$name=$_POST['name'];
$date=date('Y-m-d');

$sql = "INSERT INTO poth (name, action, up_date) VALUES ('$name', '1', '$date')";

if ($db->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
//  echo "Error: " . $sql . "<br>" . $db->error;
}
//$db->close();

header("location:../home");
 ?>
