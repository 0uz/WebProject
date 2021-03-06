<?php
  session_start();
  if(!isset($_SESSION['user'])){
    header("Location: http://localhost/WebProject/index.php?message=login");
  }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<title>Rent A Car</title>
<meta charset="UTF-8">
<link rel="stylesheet" href="styles/layout.css" type="text/css">
<link rel="stylesheet" href="styles/admin.css" type="text/css">
<script src="scripts/scripts.js"></script>
</head>
<body>
  <div class="form-popup" id="loginForm">
    <form action="controller/login.php" class="form-container" method="POST">
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

      <button type="submit" class="btn">Submit</button>
      <button type="button" class="btn cancel" onclick="closeForm('regForm')">Close</button>
    </form>
  </div>

<div class="wrapper row1">
  <header id="header" class="clear">
    <div id="hgroup">
      <h1><a href="">Rent A Car</a></h1>
      <h2>Affordable Rent A Car Website </h2>
    </div>
    <nav>
      <ul> 
        <li><a href="cars.php" >Cars</a></li>
        <li><a href="campaign.php">About Campaign</a></li>
        <?php
          if(isset($_SESSION['name'])){
            echo "<li><a href='admin.php'>Add Car</a></li>
                  <li><a href='controller/logout.php' >Logout</a></li>
                  <li><a href='profile.php' > Welcome ".$_SESSION['name']."</a></li>";
          }else{
            echo "<li id = 'loginButton'><a href='#' onclick='openForm()'>Login</a></li>";
          }
        ?>
      </ul>
    </nav>
  </header>
</div>



<div class="wrapper row2">
  <div id="container">
    <div style="display:inline-block; width: 60%;">
      <form action="controller/carRegister.php"class="" method="POST" enctype="multipart/form-data">
        <div >
          <label class='inputContainer' for="carBrand">Car brand: </label>
          <input class='inputContainer' type="text" id="carBrand" name="carBrand" required>
          <label class='inputContainer' for="carName">Car name: </label>
          <input class='inputContainer' type="text" id="carName" name="carName" required>
          <label class='inputContainer' for="carPrice">Car Price(daily): </label>
          <input class='inputContainer' type="number" id="carPrice" name="carPrice" min=0 required>
          <label class='inputContainer' for="deposit">Deposit: </label>
          <input class='inputContainer' type="number" id="deposit" name="deposit" min=0 required>
        </div>
        <div class='container'>
          <p>Gear:</p>
          <label class="">Auto
          <input type="radio" id="auto" name="gear" value="Auto" required>
           <span class="radio"></span>
          </label>
          <label class="">Manual
          <input type="radio" id="manual" name="gear" value="Manual" required>
           <span class="radio"></span>
          </label>
        </div>
        <div class='container'>
          <p>Fuel:</p>
          <label class="">Diesel
          <input type="radio" name="fuel" value="Diesel" required>
           <span class="radio"></span>
          </label>
          <label class="">Gasoline
          <input type="radio" name="fuel" value="Gasoline" required>
           <span class="radio"></span>
          </label>
          <label class="">Electric
          <input type="radio" name="fuel" value="Electric" required>
           <span class="radio"></span>
          </label>
        </div>
        <div class="container" >
          <label for="city">Take Place:</label>
          <select name="city" id="city"  >
            <option value="Adana">Adana</option>
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
        </div>
        <div class='container'>
          <label for="imageFile">Select car photo: </label>
          <input type='file' id="imageFile" name="imageFile" accept="image/*"/ required>
          <script>
              document.getElementById("imageFile").onchange = function(evt) {
                var tgt = evt.target || window.event.src,
                    files = tgt.files;
                if (FileReader && files && files.length) {
                    var fr = new FileReader();
                    fr.onload = function () {
                        document.getElementById("carImage").src = fr.result;
                    }
                    fr.readAsDataURL(files[0]);
                }
              }
          </script>
        </div>
              <button type="submit" class='registerbtn' >Submit</button>
      </form>
    </div>

    <div style="display:inline-block; width:39%; position:relative; bottom:45px">
      <img id="carImage" width="100%">
    </div>

  </div>
</div>



<!-- Footer -->
<div class="wrapper row3">
  <footer id="footer" class="clear">
    <p class="fl_left">Rent a Car </p>
   
  </footer>
</div>
  

</body>
</html>
 