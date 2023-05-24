<?php
include '../../conn/conn.php';
$student_id2 = $_POST["id"];





$sql3 = "DELETE FROM student WHERE student_id = {$student_id2}";
$result3 = mysqli_query($conn,$sql3);
$row = mysqli_fetch_assoc($result3);
if(unlink("images/".$row["image"])){
    echo 1;
}else{
    echo 0;
}

?>