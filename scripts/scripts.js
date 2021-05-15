  function openForm() {
    document.getElementById("loginForm").style.display = "block";
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

function overlayON(text) {
  document.getElementById("text").innerHTML = text+" Kiralanmistir";
  document.getElementById("overlay").style.display = "block";
}

function overlayOFF() {
  document.getElementById("overlay").style.display = "none";
  window.location.replace("index.php");
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