var captcha = '';
var chars = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";

function generateCaptcha() {
    var length = 5;
    for (var i=0; i<length; i++) {
        var rnum = Math.floor(Math.random() * chars.length);
        captcha += chars.substring(rnum,rnum+1);
    }
    document.getElementById("generateCAPTCHA").innerHTML = captcha;
}



function validateForm() {
  var email = RegExp('[a-z0-9._%+-]+@gre.ac.uk');
  var StudentID = document.getElementById('firstInput').value;
  var StudentEmail = document.getElementById('secondInput').value;
  var StudentPassword = document.getElementById('passwordID').value;
  var StudentPasswordC = document.getElementById('confirmPassword').value;
  var input = document.getElementById('answer').value;



  if (StudentID == "") {
    Swal.fire({
            type: 'error',
            title: 'Please Enter Student ID',
            text: 'Please Try Again',
        })
    return false;

  } 
  else if (StudentID.length != 9) {
   Swal.fire({
            type: 'error',
            title: 'ID Requires 9 Numbers',
            text: 'Please Try Again',
        })
   return false;

  } 
  else if(StudentEmail == "" ||  email.test(StudentEmail) == false){
    Swal.fire({
            type: 'error',
            title: 'Please Enter Student Email',
            text: 'Please Try Again',
        })
    return false;
  } 
  else if (StudentPassword == ""){
    Swal.fire({
            type: 'error',
            title: 'Please Enter Password',
            text: 'Please Try Again',
        })
    return false;
  } 
  else if (StudentPasswordC == "") {
    Swal.fire({
            type: 'error',
            title: 'Please Confirm Password',
            text: 'Please Try Again',
        })
    return false;
  } 
  else if (StudentPassword != StudentPasswordC){
    Swal.fire({
            type: 'error',
            title: 'Password Does Not Match',
            text: 'Please Try Again',
        })
    document.getElementById('passwordID').value = "";
    document.getElementById('confirmPassword').value = "";
    return false;
  }

else if (input != captcha){
    Swal.fire({
            type: 'error',
            title: 'CAPTCHA is Wrong',
            text: 'Please Try Again',
        })
    document.getElementById('answer').value = "";
    return false;
}
  else {
   return true;
  }
}

///////////////////////////////////////////////////////

function showPassword() {
    var x = document.getElementById("passwordID");
    if (x.type == "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}

///////////////////////////////////////////////////////

function onlyNumber(press) {
    var charCode = (press.which) ? press.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    } else {
        return true;
    }
}

///////////////////////////////////////////////////////