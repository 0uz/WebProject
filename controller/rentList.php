<?php
    function listFromDB($city,$takeTime,$dropTime) {
        $db = mysqli_connect("localhost","root","","car_rent");
        $query = "SELECT * FROM cars";
        $result = mysqli_query($db,$query);
        while($row = mysqli_fetch_array($result)){
          $brand = $row['carBrand'];
          $carID = $row['id'];
          $userID = $_SESSION['user'];
          echo "
            <div class='card'>
            <img src='images/".$row['photoPath']."' alt='Car PNG' style='width:100%'>
            <h1>".$row['carBrand']."</h1>
            <p class='deposit'> Deposit <br> $".$row['deposit']." <p>
            <p class='pricePerDay'> Price Per Day <br> $".$row['carPrice']."</p>
            <p class='pricePerDay'> Total Price (For 30 Day) <br> $".($row['carPrice']*30)." </p>
        
            <i class='fas fa-cogs'>".$row['gear']."<i class='fas fa-gas-pump'></i> ".$row['fuel']." </i>

            <p><button onclick=overlayON(\"$city\",$userID,$carID,\"$brand\",\"$takeTime\",\"$dropTime\")> Rent Car Now </button></p>
          </div>
          
          ";
        }
    }

?>