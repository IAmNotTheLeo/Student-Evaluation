function checkPassword() {
    var password = document.getElementById('passwordID').value;
    var confirmPassword = document.getElementById('confirmPassword').value;

    if (password == confirmPassword) {
        return true;
    } else {
        Swal.fire({
            type: 'error',
            title: 'Password Does Not Match',
            text: 'Please Try Again',
        });
        document.getElementById('passwordID').value = "";
        document.getElementById('confirmPassword').value = "";
        return false;
    }
}

///////////////////////////////////////////////////////

function iDLimit() {
    var p = document.getElementById("firstInput").value;
    if (p.length != 9) {
        Swal.fire({
            type: 'error',
            title: 'ID Requires 9 Numbers',
            text: 'Please Try Again',
        })
        return false;
    } else {    
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

var captcha = '';
var chars = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXTZabcdefghiklmnopqrstuvwxyz";

function generateCaptcha() {
    var length = 5;
    for (var i=0; i<length; i++) {
        var rnum = Math.floor(Math.random() * chars.length);
        captcha += chars.substring(rnum,rnum+1);
    }
    document.getElementById("generateCAPTCHA").innerHTML = captcha;
}


function checkCaptcha() {
    var input = document.getElementById('answer').value;

    if (input == captcha) {
        return true;
    } else {
        Swal.fire({
            type: 'error',
            title: 'CAPTCHA is Wrong',
            text: 'Please Try Again',
        })
        document.getElementById('answer').value = "";
        return false;
    }
}

///////////////////////////////////////////////////////