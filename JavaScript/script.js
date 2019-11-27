function checkPassword() {
    var password = form.stuPassoword.value;
    var confirmPassword = form.stuConfirmPassword.value;

    if (password == confirmPassword) {
    } else {
        Swal.fire({
            type: 'error',
            title: 'Password Does Not Match',
            text: 'Please Try Again',
        })
    }
}

///////////////////////////////////////////////////////

function iDLimit() {
    var p = document.getElementById("firstInput").value;
    if (p.length !== 9) {

        Swal.fire({
            type: 'error',
            title: 'ID Requires 9 Numbers',
            text: 'Please Try Again',
        })
        
    } else {
        
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
    var input = form.stuCAPTCHA.value;

    if (input == captcha) {
        
    } else {
        Swal.fire({
            type: 'error',
            title: 'CAPTCHA is Wrong',
            text: 'Please Try Again',
        })
    }
}

///////////////////////////////////////////////////////