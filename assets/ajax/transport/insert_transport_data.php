<?php
include '../../conn/conn.php';
$route_name = $_POST['location_name'];
$vehicle_number = $_POST['departure_time'];
$driver_name = $_POST['driver_name'];
$license_number =$_POST['license_number'];
$phone_number  = $_POST['phone_number'];



$t_insert ="INSERT INTO `transport`(`location_name`, `departure_time`, `driver_name`, `driver_license`, `contact_number`) VALUES 
('$location_name','$departure_time','$driver_name','$license_number','$phone_number')";
$fire = mysqli_query($conn,$t_insert);
if($fire){
    echo 1;
}else{
    echo 0;
}

/*një shembull i një operacioni CRUD. 
Për të saktë, ky është një shembull i operacionit "Create" 
në të cilin të dhënat e një formë HTML për transportin 
shtohen në tabelën e bazës së të dhënave duke përdorur
 një pyetje SQL me komandën INSERT. Në fund, një mesazh 
 përgjigjjeje kthehet në varësi të suksesit ose dështimit të operacionit. */

?>

