/*
    JS script by Mao Ye
 */

const form = document.getElementById('form');
const admin = document.getElementById('account');
const email = document.getElementById('email');
const pass = document.getElementById('pass');

form.addEventListener('submit', (event) => {
    event.preventDefault();
    if(validateAll()) {
        form.action = "login-admin.php";
    }
    else {
        alert("Please check your inputs.");
    }
});
email.addEventListener('input', validateEmail);
pass.addEventListener('input', validatePass);


function validateEmail() {
    const emailValue = email.value;
    const regEx = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if(emailValue.match(regEx)) {
        setSuccessFor(email);
        return true;
    }
    else {
        setErrorFor(email, "Email must match Name@domain.xx");
        return false;
    }
}

function validatePass() { 
    const passValue = pass.value;
    const regEx = /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]).{6,20}$/;
    if(passValue.match(regEx)) {
        setSuccessFor(pass);
        return true;
    }
    else {
        setErrorFor(pass, 'Password must contain lowercase, uppercase and number and has 6-20 characters long');
        return false;
    }
}

function validateAll(){
    console.log("validating");
    if(validateEmail() && validatePass()) {
        console.log("true");
        return true;
    }
    else {
        console.log("false");
        return false;
    }
}



function setErrorFor(input, message) {
    const textfield = input.parentElement;
    const small = textfield.querySelector('small');

    small.innerText = message;
    textfield.className = 'textfield error';
}

function setSuccessFor(input) {
    const textfield = input.parentElement;
    const small = textfield.querySelector('small');
    small.innerText = '';
    textfield.className = 'textfield success';
}