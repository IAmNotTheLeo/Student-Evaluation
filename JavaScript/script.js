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
    var num2 = Math.floor((Math.random() * 10));
    var letter = chars.substr(Math.floor(Math.random() * 25), 2);
    var num4 = Math.floor((Math.random() * 10));

  captcha = num1.toString() + num2.toString() + letter.toString() +num4.toString();

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


function fileImageChoose(){


}