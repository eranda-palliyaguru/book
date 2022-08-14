<?php
include("../connect.php");

$id=$_POST['id'];
$plan_no=$_POST['plan_no'];
$size=$_POST['size'];
$land_name=$_POST['land_name'];
$issu_date=$_POST['issu_date'];
$serveye_date=$_POST['serveye_date'];
$village=$_POST['village'];
$districts_id=$_POST['district'];
$provinces_id=$_POST['province'];
$city_id=$_POST['city'];
$old_plan_no=$_POST['old_plan_no'];
$old_is=$_POST['old_is'];

$date=date('Y-m-d');

$stmt = $db->query("SELECT * FROM cities WHERE id='$city_id'");
while ($row = $stmt->fetch())
{ $city=$row['name_en']; }

$stmt = $db->query("SELECT * FROM provinces WHERE id='$provinces_id'");
while ($row = $stmt->fetch())
{ $provinces=$row['name_en']; }

$stmt = $db->query("SELECT * FROM districts WHERE id='$districts_id'");
while ($row = $stmt->fetch())
{ $districts=$row['name_en']; }

$sql = "UPDATE customer SET plan_no=?,land_size=?,land_name=?,issu_date=?,serveye_date=?,village=?,district=?,province=?,city=?,district_id=?,province_id=?,city_id=?,old_plan_no=?,old_is=?,action=?	WHERE id=?";
$q = $db->prepare($sql);
$q->execute(array($plan_no,$size,$land_name,$issu_date,$serveye_date,$village,$districts,$provinces,$city,$districts_id,$provinces_id,$city_id,$old_plan_no,$old_is,'2',$id));




header("location:../profile?id=$id");
 ?>