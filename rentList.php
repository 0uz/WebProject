<?php session_start();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<title>Rent A Car</title>
<meta charset="UTF-8">
<link rel="stylesheet" href="styles/layout.css" type="text/css">
<script src="https://kit.fontawesome.com/f10e5983fc.js" crossorigin="anonymous"></script>

</head>
<body>
  <div class="form-popup" id="loginForm">
    <form action="login.php" class="form-container" method="POST">
      <h1>Login</h1>
      <label for="email"><b>Email</b></label>
      <input type="email" placeholder="Enter Email" name="email" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>

      <button type="submit" class="btn">Login</button>
      <button type="button" class="btnReg" onclick="openRegForm()">Sign Up</button>
      <button type="button" class="btn cancel" onclick="closeForm('loginForm')">Close</button>
    </form>
  </div>

  <div class="form-popup" id="regForm">
    <form action="register.php" class="form-container" method="POST">
      <h1>Register</h1>
      <label for="Fname"><b>First name</b></label>
      <input type="text" placeholder="Enter First Name" name="Fname" required>
      <label for="Lname"><b>Last Name</b></label>
      <input type="text" placeholder="Enter Second Name" name="Lname" required>
      <label for="email"><b>Email</b></label>
      <input type="email" placeholder="Enter Email" name="email" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>

      <button type="submit" class="btn">Submit</button>
      <button type="button" class="btn cancel" onclick="closeForm('regForm')">Close</button>
    </form>
  </div>

<div class="wrapper row1">
  <header id="header" class="clear">
    <div id="hgroup">
      <h1><a href="index.php">Rent A Car</a></h1>
      <h2>Affordable Rent A Car Website </h2>
    </div>
    <nav>
      <ul> 
        <li><a href="" >Cars</a></li>
        <li><a href="#">About Campaign</a></li>
        <?php
          if(isset($_SESSION['name'])){
            echo "<li><a href='index.php' onclick=".session_destroy().">Logout</a></li>
                  <li> Welcome ".$_SESSION['name']."</li>";
          }else{
            echo "<li id = 'loginButton'><a href='#' onclick='openForm()'>Login</a></li>";
          }
        ?>
      </ul>
    </nav>
  </header>
</div>



<div class="wrapper row2">
  <div id="container" class="clear">
        <?php
          $db = mysqli_connect("localhost","root","","car_rent");
          $query = "SELECT * FROM cars";
          $result = mysqli_query($db,$query);
          while($row = mysqli_fetch_array($result)){
            echo "
              <div class='card'>
              <img src='images/".$row['photoPath']."' alt='Car PNG' style='width:100%'>
              <h1>".$row['carBrand']."</h1>
              <p class='deposit'> Deposit <br> $".$row['deposit']." <p>
              <p class='pricePerDay'> Price Per Day <br> $".$row['carPrice']."</p>
              <p class='pricePerDay'> Total Price (For 30 Day) <br> $".($row['carPrice']*30)." </p>
    
              <i class='fas fa-cogs'>".$row['gear']."<i class='fas fa-gas-pump'></i> ".$row['fuel']." </i>
            
              <p><button>Rent Car Now</button></p>
            </div>
            ";
          };

        ?>
        

  </div>
</div>



<!-- Footer -->
<div class="wrapper row3">
  <footer id="footer" class="clear">
    <p class="fl_left">Rent a Car </p>
   
  </footer>
</div>
  <script src="scripts/scripts.js"></script>
</body>
</html>
 