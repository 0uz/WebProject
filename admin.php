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
    <form action="carRegister.php" class="" method="POST" enctype="multipart/form-data">
      <div>
        <label for="carBrand">Car brand: </label>
        <input type="text" id="carBrand" name="carBrand" required>
      </div>  

      <div>
        <label for="carName">Car name: </label>
        <input type="text" id="carName" name="carName" required>
      </div>

      <div>
        <label for="price">Car Price(hourly): </label>
        <input type="number" id="carPrice" name="carPrice" min=0 required>
      </div>

      <div>
        <label for="deposit">Deposit: </label>
        <input type="number" id="deposit" name="deposit" min=0 required>
      </div>

      <div>
        <p>Gear:</p>
        <input type="radio" id="auto" name="gear" value="Auto" required>
        <label for="auto">Auto</label>
        <input type="radio" id="manual" name="gear" value="Manual">
        <label for="manual">Manual</label>
      </div>

      <div>
        <p>Fuel:</p>
        <input type="radio" id="diesel" name="fuel" value="diesel" required>
        <label for="auto">Diesel</label>
        <input type="radio" id="manual" name="fuel" value="gasoline">
        <label for="gasoline">Gasoline</label>
        <input type="radio" id="manual" name="fuel" value="electric">
        <label for="electric">Electric</label>
      </div>

      <div class="selectTakePlace" >
            <label for="city">Take Place:</label>
            <select name="city" id="city"  >
              <option value="1">Adana</option>
              <option value="2">Adıyaman</option>
              <option value="3">Afyonkarahisar</option>
              <option value="4">Ağrı</option>
              <option value="5">Amasya</option>
              <option value="6">Ankara</option>
              <option value="7">Antalya</option>
              <option value="8">Artvin</option>
              <option value="9">Aydın</option>
              <option value="10">Balıkesir</option>
              <option value="11">Bilecik</option>
              <option value="12">Bingöl</option>
              <option value="13">Bitlis</option>
              <option value="14">Bolu</option>
              <option value="15">Burdur</option>
              <option value="16">Bursa</option>
              <option value="17">Çanakkale</option>
              <option value="18">Çankırı</option>
              <option value="19">Çorum</option>
              <option value="20">Denizli</option>
              <option value="21">Diyarbakır</option>
              <option value="22">Edirne</option>
              <option value="23">Elazığ</option>
              <option value="24">Erzincan</option>
              <option value="25">Erzurum</option>
              <option value="26">Eskişehir</option>
              <option value="27">Gaziantep</option>
              <option value="28">Giresun</option>
              <option value="29">Gümüşhane</option>
              <option value="30">Hakkâri</option>
              <option value="31">Hatay</option>
              <option value="32">Isparta</option>
              <option value="33">Mersin</option>
              <option value="34">İstanbul</option>
              <option value="35">İzmir</option>
              <option value="36">Kars</option>
              <option value="37">Kastamonu</option>
              <option value="38">Kayseri</option>
              <option value="39">Kırklareli</option>
              <option value="40">Kırşehir</option>
              <option value="41">Kocaeli</option>
              <option value="42">Konya</option>
              <option value="43">Kütahya</option>
              <option value="44">Malatya</option>
              <option value="45">Manisa</option>
              <option value="46">Kahramanmaraş</option>
              <option value="47">Mardin</option>
              <option value="48">Muğla</option>
              <option value="49">Muş</option>
              <option value="50">Nevşehir</option>
              <option value="51">Niğde</option>
              <option value="52">Ordu</option>
              <option value="53">Rize</option>
              <option value="54">Sakarya</option>
              <option value="55">Samsun</option>
              <option value="56">Siirt</option>
              <option value="57">Sinop</option>
              <option value="58">Sivas</option>
              <option value="59">Tekirdağ</option>
              <option value="60">Tokat</option>
              <option value="61">Trabzon</option>
              <option value="62">Tunceli</option>
              <option value="63">Şanlıurfa</option>
              <option value="64">Uşak</option>
              <option value="65">Van</option>
              <option value="66">Yozgat</option>
              <option value="67">Zonguldak</option>
              <option value="68">Aksaray</option>
              <option value="69">Bayburt</option>
              <option value="70">Karaman</option>
              <option value="71">Kırıkkale</option>
              <option value="72">Batman</option>
              <option value="73">Şırnak</option>
              <option value="74">Bartın</option>
              <option value="75">Ardahan</option>
              <option value="76">Iğdır</option>
              <option value="77">Yalova</option>
              <option value="78">Karabük</option>
              <option value="79">Kilis</option>
              <option value="80">Osmaniye</option>
              <option value="81">Düzce</option>
            </select>
          </div>

      <div>
        <label for="imageFile">Select car photo: </label>
        <input type='file' id="imageFile" name="imageFile" accept="image/*"/ required>
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
 