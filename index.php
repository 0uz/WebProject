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
      <input type="text" placeholder="Enter Email" name="email" required>

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
      <input type="text" placeholder="Enter Email" name="email" required>

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
<!-- content -->
<div class="wrapper row2">
  <div id="container" class="clear">
    <!-- content body -->
    <div id="homepage">
      <!-- One Quarter -->
      <section id="latest" class="clear">
        <article class="one_quarter">
          <figure><img src="images/arac1.png" width="215" height="245" alt="">
           
          </figure>
        </article>
        <article class="one_quarter">
          <figure><img src="images/arac2.png" width="215" height="245" alt="">
           
          </figure>
        </article>
        <article class="one_quarter">
          <figure><img src="images/arac3.png" width="215" height="245" alt="">
           
          </figure>
        </article>
        <article class="one_quarter lastbox">
          <figure><img src="images/arac4.png" width="215" height="245" alt="">
           
          </figure>
        </article>
      </section>
      <!-- / One Quarter -->
      <section id="shout">
        <p>You can rent the vehicle you want at the most affordable price between the dates you specify.</p>
      </section>
    </div>
    <!-- main content -->
  

      <!--         <div id="content">    <section id="services" class="last clear"></section>                          -->
     
       
        <div class="rent">
          <h1>Rent a car with one click </h1>
        
          <div>
            <br>

            <div class="selectTakePlace" >
            <span style="font-size: 19px;" > Select Take Place :   </span>
            <select name="city" id="city"  >
            <option value="Istanbul">Istanbul</option>
            <option value="Ankara">Ankara</option>
            <option value="Izmır">Izmır</option>
         <!-- sdewdsadsa -->
          </select>
          </div>
          <br>
          <label for="takeTime"> <span style="font-size: 30px;"> Take time: </span>  </label>
          <input type="date" id="takeTime" name="Taketime">

          <br>

          <label for="dropTime"> <span style="font-size: 30px;"> Drop time:</span></label>
          <input type="date" id="dropTime" name="dropTime">

          <br> 

          <button class="loginButton" onclick="myFunction()" >Find the options</button>
          </div>
      </div>

      <hr class="hr1">
     <!--             </section>             </div>             --> 
     

  

    
      <!-- /nav -->
    </aside>
    <!-- / content body -->
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
 