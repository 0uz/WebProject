<?php 
    $db = mysqli_connect("localhost","root","","car_rent");
    $carName = mysqli_real_escape_string($db,$_POST['carName']);
    $carPrice = mysqli_real_escape_string($db,$_POST['carPrice']);
    $deposit = mysqli_real_escape_string($db,$_POST['deposit']);
    $gear = mysqli_real_escape_string($db,$_POST['gear']);
    $fuel = mysqli_real_escape_string($db,$_POST['fuel']);
    $imageFile = mysqli_real_escape_string($db,$_POST['imageFile']);
    
    /* TODO
    $query =
    $result = mysqli_query($db,$query);
    header("Location: http://localhost/WebProject/index.php")*/
?>