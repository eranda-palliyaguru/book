<?php
include("../connect.php");

$main_cat=$_POST['main_cat_s'];


if($_POST['sub_cat_s']=="new"){
  $name=$_POST['sub_cat_name'];
  $sql = "INSERT INTO sub_cat (name,main_cat) VALUES ('$name', '$main_cat')";

if ($db->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
//  echo "Error: " . $sql . "<br>" . $db->error;
}
//$db->close();
header("location:../category");
}

$sub_cat=$_POST['sub_cat_s'];
if($_POST['sub_cat_s1']=="new"){
  $name=$_POST['sub_cat_name1'];
  $sql = "INSERT INTO sub_cat1 (name,sub_cat) VALUES ('$name', '$sub_cat')";

if ($db->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
//  echo "Error: " . $sql . "<br>" . $db->error;
}
//$db->close();
header("location:../category");
}

$sub_cat1=$_POST['sub_cat_s1'];
if($_POST['sub_cat_s2']=="new"){
  $name=$_POST['sub_cat_name2'];
  $sql = "INSERT INTO sub_cat2 (name,sub_cat1) VALUES ('$name', '$sub_cat1')";

if ($db->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
//  echo "Error: " . $sql . "<br>" . $db->error;
}
//$db->close();
header("location:../category");
}
 ?>