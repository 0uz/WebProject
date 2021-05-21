
  var today = new Date();
  var dd = String(today.getDate()).padStart(2, '0');
  var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
  var yyyy = today.getFullYear();
  today = mm + '/' + dd + '/' + yyyy;
  $('input[name="datetimes"]').daterangepicker({
    "minDate": today
  });
  



  function openForm() {
    document.getElementById("loginForm").style.display = "block";
  }

  function loginMessage() {
    document.getElementById("loginForm").style.display = "block";
    document.getElementById("login").style.display = "block";
  }

  function existMessage() {
    document.getElementById("regForm").style.display = "block";
    document.getElementById("register").style.display = "block";
  }

  function closeForm(id) {
    document.getElementById(id).style.display = "none";
  }

  function openRegForm() {
    closeForm("loginForm")
    document.getElementById("regForm").style.display = "block";
  }

  function loginName(name) {
    document.getElementById("loginButton").innerHTML = name;

  }
//---------------------------------Overlay
var carID,userID,timeTake,timeDrop,city;
function overlayYES(){
  overlayOFF();
  window.location.replace("controller/rentCar.php?carID="+carID+"&userID="+userID+"&takeTime="+timeTake+"&dropTime="+timeDrop+"&city="+city);
  
}

function overlayON(cityID,IDuser,IDcar,brand,takeTime,dropTime) {
  document.getElementById("text").innerHTML = brand+" markali araba <br>"+cityID+" sehrinden <br>"+takeTime+" tarihinden "+dropTime+" tarihine kadar kiralanacaktir?";
  document.getElementById("overlay").style.display = "block";
  carID=IDcar;
  userID=IDuser;
  timeTake=takeTime;
  timeDrop=dropTime;
  city=cityID;
}

function overlayOFF() {
  document.getElementById("overlay").style.display = "none";
  //window.location.replace("index.php");
}

//---------------------------------Slider

var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}