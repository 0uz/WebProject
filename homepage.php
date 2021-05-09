<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project</title>
    <link rel="stylesheet" href="css/homepage.css"/>
    <script src="https://kit.fontawesome.com/f10e5983fc.js" crossorigin="anonymous"></script>
</head>

<body>

    <div class="bannerContainer">
        <div class="banner">
            <p>Yolcu360</p>
        </div>
        <button class="campaigns">Campaigns</button>
        <button class="open-button" onclick="openForm()">Login</button>
        <div class="form-popup" id="loginForm">
          <form action="login.php" class="form-container">
            <h1>Login</h1>
    
            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" required>
    
            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>
    
            <button type="submit" class="btn">Login</button>
            <button type="button" class="btnReg" onclick="openRegForm()">Sign Up</button>
            <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
          </form>
        </div>

        <div class="form-popup" id="regForm">
          <form action="login.php" class="form-container">
            <h1>Register</h1>
    
            <label for="email"><b>First name</b></label>
            <input type="text" placeholder="Enter First Name" name="email" required>
            <label for="email"><b>Second Name</b></label>
            <input type="text" placeholder="Enter Second Name" name="email" required>
            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" required>
    
            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>
    
            <button type="submit" class="btn">Submit</button>
            <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
          </form>
        </div>
        </div>
        
    <div class="rent">
        <h1>Arac kiralamak ne kolaymis</h1>
        <div class="rentButtons">
            <div class="dailyRent">
                <i class="fa fa-calendar"></i>
                <span class="dailySpan">Gunluk Kiralama</span>
            </div>
            <div class="monthlyRent">
                <i class="fa fa-calendar"></i>
                <span>Aylik Kiralama</span>
            </div>
        </div>
        <div>
        <input list="city" placeholder="Select car take place">
        <datalist id="city">
            <option value="Ankara"> </option>
            <option value="Istanbul"> </option>
            <option value="Bolu"> </option>
        </datalist>
        <label for="takeTime">Time time:</label>
        <input type="date" id="takeTime" name="Taketime">
        <label for="dropTime">Drop time:</label>
        <input type="date" id="dropTime" name="dropTime">
        <button class="loginButton" onclick="myFunction()" >Fiyat bul</button>
        </div>
    </div>
    <?php
    require_once("login.php");
    getUser();
    ?>
    <script src="scripts.js"></script>

</body>
</html>