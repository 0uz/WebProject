<?php 
    $db = mysqli_connect("localhost","root","","car_rent");
    $carBrand = mysqli_real_escape_string($db,$_POST['carBrand']);
    $carName = mysqli_real_escape_string($db,$_POST['carName']);
    $carPrice = mysqli_real_escape_string($db,$_POST['carPrice']);
    $deposit = mysqli_real_escape_string($db,$_POST['deposit']);
    $gear = mysqli_real_escape_string($db,$_POST['gear']);
    $fuel = mysqli_real_escape_string($db,$_POST['fuel']);
    $imageFile = mysqli_real_escape_string($db,$_FILES["imageFile"]["name"]);
    $cityID = mysqli_real_escape_string($db,$_POST['city']);
    $query ="INSERT INTO cars (carBrand,carName,carPrice,deposit,gear,fuel,photoPath,cityID) VALUES ('$carBrand','$carName',$carPrice,$deposit,'$gear','$fuel','$imageFile',$cityID)";
    $result = mysqli_query($db,$query);

    //--------------------UPLOAD IMAGE-----------------------
    $target_dir = "images/"; // folder path
    $target_file = $target_dir . basename($_FILES["imageFile"]["name"]);
    move_uploaded_file($_FILES["imageFile"]["tmp_name"], $target_file);

    header("Location: http://localhost/WebProject/index.php");
?>