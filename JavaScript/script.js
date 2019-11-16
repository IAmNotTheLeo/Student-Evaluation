function checkPassword() {
  var password = form.stuPassoword.value;
  var confirmPassword = form.stuConfirmPassword.value;

  if (password == confirmPassword) {
    return true;
  }
  else{
    Swal.fire({
    type: 'error',
    title: 'Password Does Not Match',
    text: 'Please Try Again',
    })
  return false;
  }
}

///////////////////////////////////////////////////////

function iDLimit(){
  var p = document.getElementById("firstInput").value;
  if (p.length !== 9) {

    Swal.fire({
    type: 'error',
    title: 'ID Requires 9 Numbers',
    text: 'Please Try Again',
    })
    return false;
  } else{
    return true;
  }
}

///////////////////////////////////////////////////////

function showPassword() {
  var x = document.getElementById("passwordID");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}

///////////////////////////////////////////////////////

function onlyNumber(press){
var charCode = (press.which) ? press.which : event.keyCode
if (charCode > 31 && (charCode < 48 || charCode > 57)) {
return false;
}
else{
  return true;
  }
}

///////////////////////////////////////////////////////

var captcha;
var chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";


function generateCaptcha() {
    var num1 = Math.floor((Math.random() * 10));
    var letter1 = chars.substr(Math.floor(Math.random() * 25), 2);
    var num2 = Math.floor((Math.random() * 10));
    var letter2 = chars.substr(Math.floor(Math.random() * 25), 2);
    var num3 = Math.floor((Math.random() * 10));

  captcha = num1.toString() + letter1 + num2.toString() + letter2 + num3.toString();

    document.getElementById("generateCAPTCHA").value = captcha;
}


function checkCaptcha(){
  var input = form.stuCAPTCHA.value;

  if(input == captcha){
    return true;
  }
  else{
    Swal.fire({
    type: 'error',
    title: 'CAPTCHA is Wrong',
    text: 'Please Try Again',
    })
    return false;
  }
}


///////////////////////////////////////////////////////

function validEmail(email) {
    var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
    if (reg.test(email)) {
      return true;
    } else {
      Swal.fire({
      type: 'error',
      title: 'Invalid Email Address',
      text: 'Please Try Again',
      })
      return false;
    }
}

///////////////////////////////////////////////////////
function closeEva() {
  var x = document.getElementById("displayDiv");
  if (x.style.display !== "none") {
    x.style.display = "none";
  }
}

function openEva(){
  document.getElementById('displayDiv').style.display='block'
}


