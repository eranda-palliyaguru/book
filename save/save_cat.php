<?php
include("../connect.php");

$main_cat=$_POST['main_cat_s'];


if($_POST['sub_cats']=="new"){
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

$sub_cat=$_POST['sub_cats'];
if($_POST['sub_cat1s']=="new"){
  $name=$_POST['sub_cat_name1'];
  $sql = "INSERT INTO sub_cat1 (name,cat_id) VALUES ('$name', '$sub_cat')";

if ($db->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
//  echo "Error: " . $sql . "<br>" . $db->error;
}
//$db->close();
header("location:../category");
}

$sub_cat1=$_POST['sub_cat1s'];
if($_POST['sub_cat2s']=="new"){
  $name=$_POST['sub_cat_name2'];
  $sql = "INSERT INTO sub_cat2 (name,cat_id) VALUES ('$name', '$sub_cat1')";

if ($db->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
//  echo "Error: " . $sql . "<br>" . $db->error;
}
//$db->close();
header("location:../category");
}

$sub_cat1=$_POST['sub_cat2s'];
if($_POST['sub_cat3s']=="new"){
  $name=$_POST['sub_cat_name3'];
  $sql = "INSERT INTO sub_cat3 (name,cat_id) VALUES ('$name', '$sub_cat1')";

if ($db->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
//  echo "Error: " . $sql . "<br>" . $db->error;
}
//$db->close();
header("location:../category");
}

$sub_cat1=$_POST['sub_cat3s'];
if($_POST['sub_cat4s']=="new"){
  $name=$_POST['sub_cat_name4'];
  $sql = "INSERT INTO sub_cat4 (name,cat_id) VALUES ('$name', '$sub_cat1')";

if ($db->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
//  echo "Error: " . $sql . "<br>" . $db->error;
}
//$db->close();
header("location:../category");
}
 ?>