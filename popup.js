// Timeout Popup
window.addEventListener("load", function() {
  var userid = localStorage.getItem("UserId");
  if (userid) {
    document.getElementById("login").innerHTML = "Log Out"
  }
});

document.getElementById("login").addEventListener("click", function(){
  // document.getElementById("demo").innerHTML = "Hello World";
  event.preventDefault();
});

window.addEventListener("load", function() {
  this.setTimeout(function open(event) {
    document.querySelector(".container-popup").style.display = "block";
    window.document.getElementById("body").style.overflowY = "hidden";
  }, 1000);
});

document.querySelector("#close").addEventListener("click", function() {
  document.querySelector(".container-popup").style.display = "none";
  window.document.getElementById("body").style.overflowY = "auto";
});

window.addEventListener("load", function() {
  this.setTimeout(function open(event) {
    document.querySelector(".popup").style.display = "block";
  }, 500);
});

document.querySelector("#close").addEventListener("click", function() {
  document.querySelector(".popup").style.display = "none";
});

// Login Popup
document.querySelector("#login").addEventListener("click", function() {
  var userid = localStorage.getItem("UserId");
  if (userid) {
    localStorage.removeItem("UserId");
    document.getElementById("login").innerHTML = "Login"
  }
  document.querySelector(".login-popup").style.display = "block";
  window.document.getElementById("body").style.overflowY = "hidden";
});

document.querySelector("#closeL").addEventListener("click", function() {
  document.querySelector(".login-popup").style.display = "none";
  window.document.getElementById("body").style.overflowY = "auto";
});

document.querySelector("#login").addEventListener("click", function() {
  document.querySelector(".login").style.display = "block";
});

document.querySelector("#closeL").addEventListener("click", function() {
  document.querySelector(".login").style.display = "none";
});


document.querySelector("#enterL").addEventListener("click", function() {
  var id = document.getElementById("InputID").value
  localStorage.setItem("UserId", id);
  document.querySelector(".login").style.display = "none";
  window.location.reload();
});

function buying() {
  var userid = localStorage.getItem("UserId");
  if (userid) {
    window.location.replace("/form.php");
  } else { 
    document.getElementById("login").click();
  }
}

document.getElementById("buy1").addEventListener("click", function() {
  buying()
});
document.getElementById("buy2").addEventListener("click", function() {
  buying()
});
document.getElementById("buy3").addEventListener("click", function() {
  buying()
});

