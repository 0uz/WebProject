<?php session_start();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<title>Rent A Car</title>
<meta charset="UTF-8">
<link rel="stylesheet" href="styles/layout.css" type="text/css">

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
      <h1><a href="#">Rent A Car</a></h1>
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
  <div id="container" class="">
    <form action="carRegister.php" class="" method="GET">
      <div>
        <label for="carName">Car name: </label>
        <input type="text" id="carName" name="carName">
      </div>

      <div>
        <label for="price">Car Price(hourly): </label>
        <input type="number" id="carPrice" name="carPrice" min=0>
      </div>

      <div>
        <label for="deposit">Deposit: </label>
        <input type="number" id="deposit" name="deposit" min=0>
      </div>

      <div>
        <p>Gear:</p>
        <input type="radio" id="auto" name="gear" value="Auto">
        <label for="auto">Auto</label>
        <input type="radio" id="manual" name="gear" value="Manual">
        <label for="manual">Manual</label>
      </div>

      <div>
        <p>Fuel:</p>
        <input type="radio" id="diesel" name="fuel" value="diesel">
        <label for="auto">Diesel</label>
        <input type="radio" id="manual" name="fuel" value="gasoline">
        <label for="gasoline">Gasoline</label>
        <input type="radio" id="manual" name="fuel" value="electric">
        <label for="electric">Electric</label>
      </div>

      <div>
        <label for="imageFile">Select car photo: </label>
        <input type='file'id="imageFile" name="imageFile" accept="image/*"/>
      </div>
      <button type="submit">Submit</button>
    </form>
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
 