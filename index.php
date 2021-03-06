<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<title>Rent A Car</title>
<meta charset="UTF-8">
<link rel="stylesheet" href="styles/layout.css" type="text/css">
<script src="https://kit.fontawesome.com/f10e5983fc.js" crossorigin="anonymous"></script>

<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
<script type="text/javascript" src="scripts/scripts.js"></script>

</head>
<body>

  <div class="form-popup" id="loginForm">
    <form action="controller/login.php" class="form-container" method="POST">
      <h1>Login</h1>
      <label for="email"><b>Email</b></label>
      <input type="email" placeholder="Enter Email" name="email" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
      <label id="login" style="color: red; display:none"><b>Please login</b></label>

      <button type="submit" class="btn">Login</button>
      <button type="button" class="btnReg" onclick="openRegForm()">Sign Up</button>
      <button type="button" class="btn cancel" onclick="closeForm('loginForm')">Close</button>
    </form>
  </div>

  <div class="form-popup" id="regForm">
    <form action="controller/register.php" class="form-container" method="POST">
      <h1>Register</h1>
      <label for="Fname"><b>First name</b></label>
      <input type="text" placeholder="Enter First Name" name="Fname" required>
      <label for="Lname"><b>Last Name</b></label>
      <input type="text" placeholder="Enter Second Name" name="Lname" required>
      <label for="email"><b>Email</b></label>
      <input type="email" placeholder="Enter Email" name="email" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>

      <label id="register" style="color: red; display:none"><b>User Exist</b></label>
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
        <li><a href="cars.php" >Cars</a></li>
        <li><a href="campaign.php">About Campaign</a></li>
        <?php
          if(isset($_GET['message'])) {
            if($_GET['message'] == 'login'){
              echo "<script>loginMessage();</script>";
            }
            if($_GET['message'] == 'exist'){
              echo "<script>existMessage();</script>";
            }
          }
          if(isset($_SESSION['name'])){
            if($_SESSION['user']==6){
              echo "<li><a href='admin.php'>Add Car</a></li>
              <li><a href='controller/logout.php' >Logout</a></li>
              <li><a href='profile.php' > Welcome ".$_SESSION['name']."</a></li>";
            }else{
            echo "<li><a href='rentedCars.php' >Rented Cars</a></li>
                  <li><a href='controller/logout.php' >Logout</a></li>
                  <li><a href='profile.php' > Welcome ".$_SESSION['name']."</a></li>";
            }
          }else{
            echo "<li id = 'loginButton'><a href='#' onclick='openForm()'>Login</a></li>";
          }
        ?>
        
      </ul>
    </nav>
  </header>


</div>
<!-- content -->
<div class="wrapper row2">
  <div id="container" class="clear">
    <!-- content body -->
    <div id="homepage">
                  <!-- Slideshow container -->
        <div class="slideshow-container">

        <!-- Full-width images with number and caption text -->
        <div class="mySlides fade">
          <div class="numbertext">1 / 3</div>
          <img src="images/arac1.png" style="height:550px; width:950px; object-fit:scale-down;">
          <div class="text">Caption Text</div>
        </div>

        <div class="mySlides fade">
          <div class="numbertext">2 / 3</div>
          <img src="images/arac17.png" style="height:550px; width:950px; object-fit:scale-down;">
          <div class="text">Caption Two</div>
        </div>

        <div class="mySlides fade">
          <div class="numbertext">3 / 3</div>
          <img src="images/audirs.png" style="height:550px; width:950px; object-fit:scale-down;">
          <div class="text">Caption Three</div>
        </div>

        <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <br>

        <!-- The dots/circles -->
        <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
        </div>
        
      <section id="shout">
        <p>You can rent the vehicle you want at the most affordable price between the dates you specify.</p>
      </section>
    </div>
    <!-- main content -->

    <form action="carRentPage.php" class="form-container" method="POST">
          <div class="searchrent">

           <h1 class="titleRent">Rent a car with one click </h1>
        
            <select class="takePlace" name="city" id="city" required>
              <option value="" Default>Select Place &#xf3c5; </option>
              <option value="Adana">Adana </option>
              <option value="Ad??yaman">Ad??yaman</option>
              <option value="Afyonkarahisar">Afyonkarahisar</option>
              <option value="A??r??">A??r??</option>
              <option value="Amasya">Amasya</option>
              <option value="Ankara">Ankara</option>
              <option value="Antalya">Antalya</option>
              <option value="Artvin">Artvin</option>
              <option value="Ayd??n">Ayd??n</option>
              <option value="Bal??kesir">Bal??kesir</option>
              <option value="Bilecik">Bilecik</option>
              <option value="Bing??l">Bing??l</option>
              <option value="Bitlis">Bitlis</option>
              <option value="Bolu">Bolu</option>
              <option value="Burdur">Burdur</option>
              <option value="Bursa">Bursa</option>
              <option value="??anakkale">??anakkale</option>
              <option value="??ank??r??">??ank??r??</option>
              <option value="??orum">??orum</option>
              <option value="Denizli">Denizli</option>
              <option value="Diyarbak??r">Diyarbak??r</option>
              <option value="Edirne">Edirne</option>
              <option value="Elaz????">Elaz????</option>
              <option value="Erzincan">Erzincan</option>
              <option value="Erzurum">Erzurum</option>
              <option value="Eski??ehir">Eski??ehir</option>
              <option value="Gaziantep">Gaziantep</option>
              <option value="Giresun">Giresun</option>
              <option value="G??m????hane">G??m????hane</option>
              <option value="Hakk??ri">Hakk??ri</option>
              <option value="Hatay">Hatay</option>
              <option value="Isparta">Isparta</option>
              <option value="Mersin">Mersin</option>
              <option value="??stanbul">??stanbul</option>
              <option value="??zmir">??zmir</option>
              <option value="Kars">Kars</option>
              <option value="Kastamonu">Kastamonu</option>
              <option value="Kayseri">Kayseri</option>
              <option value="K??rklareli">K??rklareli</option>
              <option value="K??r??ehir">K??r??ehir</option>
              <option value="Kocaeli">Kocaeli</option>
              <option value="Konya">Konya</option>
              <option value="K??tahya">K??tahya</option>
              <option value="Malatya">Malatya</option>
              <option value="Manisa">Manisa</option>
              <option value="Kahramanmara??">Kahramanmara??</option>
              <option value="Mardin">Mardin</option>
              <option value="Mu??la">Mu??la</option>
              <option value="Mu??">Mu??</option>
              <option value="Nev??ehir">Nev??ehir</option>
              <option value="Ni??de">Ni??de</option>
              <option value="Ordu">Ordu</option>
              <option value="Rize">Rize</option>
              <option value="Sakarya">Sakarya</option>
              <option value="Samsun">Samsun</option>
              <option value="Siirt">Siirt</option>
              <option value="Sinop">Sinop</option>
              <option value="Sivas">Sivas</option>
              <option value="Tekirda??">Tekirda??</option>
              <option value="Tokat">Tokat</option>
              <option value="Trabzon">Trabzon</option>
              <option value="Tunceli">Tunceli</option>
              <option value="??anl??urfa">??anl??urfa</option>
              <option value="U??ak">U??ak</option>
              <option value="Van">Van</option>
              <option value="Yozgat">Yozgat</option>
              <option value="Zonguldak">Zonguldak</option>
              <option value="Aksaray">Aksaray</option>
              <option value="Bayburt">Bayburt</option>
              <option value="Karaman">Karaman</option>
              <option value="K??r??kkale">K??r??kkale</option>
              <option value="Batman">Batman</option>
              <option value="????rnak">????rnak</option>
              <option value="Bart??n">Bart??n</option>
              <option value="Ardahan">Ardahan</option>
              <option value="I??d??r">I??d??r</option>
              <option value="Yalova">Yalova</option>
              <option value="Karab??k">Karab??k</option>
              <option value="Kilis">Kilis</option>
              <option value="Osmaniye">Osmaniye</option>
              <option value="D??zce">D??zce</option>
            </select>

         
         <div class="trying">
            <input class="dates" type="text" name="datetimes" id="datetimes" > </input>
        </div>

      

          <button class="loginButton" onclick="myFunction()">Find the options</button>

        </div>

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
 