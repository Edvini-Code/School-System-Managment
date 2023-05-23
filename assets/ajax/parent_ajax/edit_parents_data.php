<?php
include "../conn/conn.php";
$parents_edit_Id = $_POST["id"];
$parents_photo = $_POST['parent_photo'];
$parents_name  = $_POST['parent_name'];
$parents_gender = $_POST['parent_gender'];
$parents_occupation = $_POST['parent_occupation'];
$parents_address= $_POST['parent_address'];
$parents_phone = $_POST['parent_phone'];
$parents_email = $_POST['parent_email'];





$sql = "UPDATE parents SET p_photo='{$parents_photo}',p_name='{$parents_name}',
address='{$parents_address}',occupation='{$parents_occupation}',phone='{$parents_phone}',email='{$parents_email}',
gender='{$parents_gender}, WHERE id = {$parents_edit_Id}";

if(mysqli_query($conn,$sql)){
    echo 1;
}else{
    echo 0;
}
?>