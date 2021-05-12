<?php 
    $db = mysqli_connect("localhost","root","","car_rent");
    $Fname = mysqli_real_escape_string($db,$_POST['Fname']);
    $Lname = mysqli_real_escape_string($db,$_POST['Lname']);
    $email = mysqli_real_escape_string($db,$_POST['email']);
    $password = mysqli_real_escape_string($db,$_POST['psw']);
    $query = "INSERT INTO user(F_name,L_name,email,password) VALUES ('$Fname','$Lname','$email','$password')";
    $result = mysqli_query($db,$query);
    header("Location: http://localhost/project/index.php")
?>