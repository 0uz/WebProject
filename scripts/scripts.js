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