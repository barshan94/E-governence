
function validateForm() {
  var fname = document.getElementById("fname").value;
  var lname = document.getElementById("lname").value;
  var username = document.getElementById("username").value;
  var age = document.getElementById("age").value;
  var email = document.getElementById("email").value;
  var mailformat = /^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/;
  var res = mailformat.test(email);
  var password = document.getElementById("password").value;
  var passport = document.getElementById("passport").value;








  if (fname == "") {
    document.getElementById("mytext").innerHTML = "Please enter your first name properly";
    return false;
  }
  if (fname.length < 3) {
    document.getElementById("mytext").innerHTML = "Please enter your first name properly";
    return false;
  }



  if (lname == "") {
    document.getElementById("mytext").innerHTML = "Please enter your last name properly";
    return false;
  }
  if (lname.length < 2) {
    document.getElementById("mytext").innerHTML = "Please enter your last name properly";
    return false;
  }
  if (username == "") {
    document.getElementById("mytext").innerHTML = "Please enter your username properly";
    return false;
  }
  if (username.length < 2) {
    document.getElementById("mytext").innerHTML = "Please enter your username  properly";
    return false;
  }

  if (age < 5) {
    document.getElementById("mytext").innerHTML = "Your age does not fulfill the minimum requirement";
    return false;
  }

  if (email == "") {
    document.getElementById("mytext").innerHTML = "Please enter email properly";
    return false;
  }
  if (!res) {
    document.getElementById("mytext").innerHTML = "Invalid email format";
    return false;
  }

  if (passport == "") {
    document.getElementById("mytext").innerHTML = "Please enter your pasport number";
    return false;
  }
  if (passport.length < 9) {
    document.getElementById("mytext").innerHTML = "Please enter your passport number";
    return false;
  }

  if (password.length < 6) {
    document.getElementById("mytext").innerHTML = "Please enter password length at least 6";
    return false;
  }

  if (password == "") {
    document.getElementById("mytext").innerHTML = "Please enter password";
    return false;
  }



  // if (document.getElementById("mytext").checked == false) {
  //   document.getElementById("mytext").innerHTML = "please select your gender ";
  //   return false;
  // }

}

function myajaxfunc() {

  var username = document.getElementById("username").value;


  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {

      document.getElementById("usr").innerHTML = this.responseText;
    }
  };

  xhttp.open("GET", "/completeProjectUser3/control/handle.php?username=" + username, true);


  xhttp.send();


}