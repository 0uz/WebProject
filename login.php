<?php

function getUser(){
    $db = mysqli_connect("localhost","root","","car_rent");
    $query = "Select * FROM user";
    $result = mysqli_query($db,$query);
    while($row = mysqli_fetch_array($result)){
        echo $row['F_name'];
    }
}


?>