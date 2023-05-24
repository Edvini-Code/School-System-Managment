<?php
include '../../conn/conn.php';
$library_book = $_POST['l_book'];
$library_subject = $_POST['l_subject'];
$library_writer = $_POST['l_writer'];
$library_class = $_POST['l_class'];
$library_publish = $_POST['l_publish'];
$library_creatingDate =$_POST['l_creatingDate'];
$sql = "INSERT INTO `library`(`book_name`, `subject`, `writer`, `class`, `publish`, `creating_date`) VALUES 
('$library_book','$library_subject','$library_writer','$library_class','$library_publish','$library_creatingDate')";

if(mysqli_query($conn,$sql)){
    echo 1; 
}else{
    echo 0;
}
?>

/*  kodi i dhënë është një shembull i një operacioni CRUD. 
Specifikisht, është një shembull i operacionit "Krijo", 
ku të dhëna të reja futen në një tabelë të bazës së të dhënave.
Kodi fut të dhënat e reja të lidhura me një libër bibliotekash në 
tabelën e bibliotekës. Merr vlera hyrëse nga një formë HTML dhe i ruajnë ato në variabla.
 Pastaj, krijojnë një kërkesë SQL për të futur këto vlera në tabelën e bibliotekës 
 duke përdorur deklaratën INSERT INTO. 
Për fund, ekzekutojnë kërkesën duke përdorur funksionin mysqli_query() 
dhe kthejnë 1 nëse futja është e suksesshme dhe 0 nëse dështon.*/