window.addEventListener("load", function() {
  var userid = document.getElementById("userid")
  userid.value = localStorage.getItem("UserId")
});


function myFunction(amt) {
  
//   console.log(document.getElementById("200"));
//   if (document.getElementById("200").checked) {
//     rate_value = document.getElementById("200").value;
//     console.log(rate_value);
//   }
  var ipRecharge = document.getElementById("recharge");
  var userid = document.getElementById("userid")
  ipRecharge.value = amt;
  userid.value = localStorage.getItem("UserId")
}
