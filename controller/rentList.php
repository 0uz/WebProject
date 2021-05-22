<?php
    function listFromDB($city,$takeTime,$dropTime) {
        $db = mysqli_connect("localhost","root","","car_rent");
        $takeTime = date("Y-m-d", strtotime($takeTime));
        $dropTime = date("Y-m-d", strtotime($dropTime)); 
        $query = "SELECT * from cars where id NOT IN (SELECT carID from rentedcars WHERE (('$takeTime' <= dropTime) AND ('$dropTime' >= takeTime)))";
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

    function getmail(){
      $db = mysqli_connect("localhost","root","","car_rent");
      $query = "SELECT email from user where id=".$_SESSION['user'];
      $result = mysqli_query($db,$query);
      $row = mysqli_fetch_array($result);
      echo $row['email'];
    }

    function getRentedCars(){
      $db = mysqli_connect("localhost","root","","car_rent");
      $query = "SELECT takeTime,dropTime,money,isCancelled,carBrand,photoPath FROM rentedcars,cars WHERE rentedcars.carID=cars.id AND userID=".$_SESSION['user'];
      $result = mysqli_query($db,$query);
      while($row = mysqli_fetch_array($result)){
        $photo = $row['photoPath'];
        $brand = strtoupper($row['carBrand']);
        $takeTime = $row['takeTime'];
        $dropTime = $row['dropTime'];
        $money = $row['money'];
        if($row['isCancelled']==1){
          echo "
          <div style=' margin:5px';>
            <div style='width:20%; display:inline-block'>
              <img src='./images/$photo' alt='Car PNG' style='width:100%;'>
              <p style='text-align: center; color:#232323'>$brand</p>
            </div>
            <div class='rentedCarsInfoCont' style='width:75%; display:inline-block'>
              <p class='rentedCarsInfo'>$takeTime</p>
              <p class='rentedCarsInfo'>$dropTime</p>
              <p class='rentedCarsInfo'>$money\$</p>
              <Button disabled id='rentedCarsButton'>Cancel</Button>
            </div>
          </div>
        ";
        }else{
          echo "
            <div style=' margin:5px';>
              <div style='width:20%; display:inline-block'>
                <img src='./images/$photo' alt='Car PNG' style='width:100%;'>
                <p style='text-align: center; color:#232323'>$brand</p>
              </div>
              <div class='rentedCarsInfoCont' style='width:75%; display:inline-block'>
                <p class='rentedCarsInfo'>$takeTime</p>
                <p class='rentedCarsInfo'>$dropTime</p>
                <p class='rentedCarsInfo'>$money\$</p>
                <Button id='rentedCarsButton'>Cancel</Button>
              </div>
            </div>
          ";
        }



      }
    }

?>