<?php

include '../../conn/conn.php';
$sql = "SELECT * FROM student WHERE gender = 'female'";
$fire = mysqli_query($conn,$sql);
$fetchFemaleCount = mysqli_num_rows($fire);

echo $fetchFemaleCount;

   

?>