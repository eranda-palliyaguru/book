<?php
include("../connect.php");
$id=$_POST['id'];






$file_name = $_FILES['pdf_file']['name'];
$file_type = $_FILES['pdf_file']['type'];
$file_size = $_FILES['pdf_file']['size'];
$temp_name = $_FILES['pdf_file']['tmp_name'];

$temp = explode(".", $file_name);
$file_name = "plan_".date('ymdhis') . '.' . end($temp);

$upload_to = '../pdf/';

// checking file size
if ($file_size > 5000000000) {
  $errors[] = 'File size should be less than 500kb.';
}

if (!$file_size) {
  $errors[] = 'File size should be less than 500kb.';
}
if (end($temp)=="pdf") {
    
  }else{ $errors[] = 'File is not PDF';}

if (empty($errors)) {
  $file_uploaded = move_uploaded_file($temp_name, $upload_to .$file_name);

  $sql = "UPDATE customer
          SET plan_pdf=?
  		WHERE id=?";
  $q = $db->prepare($sql);
  $q->execute(array($file_name,$id));

}
  header("location:../profile?id=$id");


 ?>