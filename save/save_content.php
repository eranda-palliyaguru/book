<?php
include("../connect.php");

$sub_cat=0;$sub_cat1=0;$sub_cat2=0;$sub_cat3=0;$sub_cat4=0;
$sub_cat_name='';$sub_cat1_name='';$sub_cat2_name='';$sub_cat3_name='';$sub_cat4_name='';$

$main_cat=$_REQUEST['main_cat_s'];
$sub_cat=$_REQUEST['sub_cats'];
$sub_cat1=$_REQUEST['sub_cat1s'];
$sub_cat2=$_REQUEST['sub_cat2s'];
$sub_cat3=$_REQUEST['sub_cat3s'];
$sub_cat4=$_REQUEST['sub_cat4s'];

$result = $db->prepare("SELECT name FROM sub_cat WHERE id='$sub_cat'");
$result->bindParam(':userid', $res);
$result->execute();
for($i=0; $row = $result->fetch(); $i++){ $sub_cat_name=$row['name']; }

if($sub_cat1!=0){
$result = $db->prepare("SELECT name FROM sub_cat1 WHERE id='$sub_cat1'");
$result->bindParam(':userid', $res);
$result->execute();
for($i=0; $row = $result->fetch(); $i++){ $sub_cat1_name=$row['name']; }
}

if($sub_cat2!=0){
$result = $db->prepare("SELECT name FROM sub_cat2 WHERE id='$sub_cat2'");
$result->bindParam(':userid', $res);
$result->execute();
for($i=0; $row = $result->fetch(); $i++){ $sub_cat2_name=$row['name']; }
}

if($sub_cat3!=0){
$result = $db->prepare("SELECT name FROM sub_cat3 WHERE id='$sub_cat3'");
$result->bindParam(':userid', $res);
$result->execute();
for($i=0; $row = $result->fetch(); $i++){ $sub_cat3_name=$row['name']; }
}

if($sub_cat4!=0){
$result = $db->prepare("SELECT name FROM sub_cat4 WHERE id='$sub_cat4'");
$result->bindParam(':userid', $res);
$result->execute();
for($i=0; $row = $result->fetch(); $i++){ $sub_cat4_name=$row['name']; }
}

$main_cat=$_REQUEST['main_cat_s'];
$result = $db->prepare("SELECT name FROM main_cat WHERE id='$main_cat'");
$result->bindParam(':userid', $res);
$result->execute();
for($i=0; $row = $result->fetch(); $i++){ $main_cat_name=$row['name']; }

$note=$_POST['note'];
$book=$_POST['book'];
$date=date('Y-m-d');
$time=date('H:i:s');
  $sql = "INSERT INTO content (note,date,time,book,main_cat,sub_cat,sub_cat1,sub_cat2,sub_cat3,sub_cat4,main_cat_id,sub_cat_id,sub_cat1_id,sub_cat2_id,sub_cat3_id,sub_cat4_id) VALUES ('$note', '$date','$time','$book','$main_cat_name','$sub_cat_name','$sub_cat1_name','$sub_cat2_name','$sub_cat3_name','$sub_cat4_name','$main_cat','$sub_cat','$sub_cat1','$sub_cat2','$sub_cat3','$sub_cat4')";

if ($db->query($sql) === TRUE) {
  echo "New record created successfully";
} else {

}
header("location:../book?id=$book");

 ?>