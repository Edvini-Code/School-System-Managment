<?php

include '../../conn/conn.php';
$sql = "SELECT * FROM student WHERE gender = 'male'";
$fire = mysqli_query($conn,$sql);
$fetchMaleCount = mysqli_num_rows($fire);

echo $fetchMaleCount;

    
?>