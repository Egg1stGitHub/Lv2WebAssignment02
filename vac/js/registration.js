/*
    JS script by Mao Ye
 */

const form = document.getElementById('form');
const hcn = document.getElementById('hcnumber');
const email = document.getElementById('email');
const uname = document.getElementById('uname');
const pass = document.getElementById('pass');
const pass2 = document.getElementById('pass2');

document.getElementsByTagName('button')[1].addEventListener('click', clear);
form.addEventListener('submit', (event) => {
    event.preventDefault();
    if(validateAll()) {
        form.action = "TBD.php";
        alert("Register Success! Click OK to go to the Login Page");
        window.location = '/login.html';
    }
    else {
        alert("Please check your inputs.");
    }
});


hcn.addEventListener('input', validateHcn);
email.addEventListener('input', validateEmail);
uname.addEventListener('input', validateUname);
pass.addEventListener('input', validatePass);
pass2.addEventListener('input', validatePass2);

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

function validateHcn() {
    const hcnValue = hcn.value;
    const regEx = /^(?=.*[0-9])(?=.*[a-zA-Z]).{9}$/;
    if(hcnValue.match(regEx)) {
        setSuccessFor(hcn);
        return true;
    }
    else {
        setErrorFor(hcn, "Health card number must be 9 characters with A-Z and 0-9")
        return false;
    }
}

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

function validateUname() {
    const unameValue = uname.value;
    const regEx = /^[a-zA-Z][\sa-zA-Z].{4,20}$/;
    if(unameValue.match(regEx)) {
        setSuccessFor(uname);
        return true;
    }
    else {
        setErrorFor(uname, "User name should have 6-20 English characters and space");
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

function validatePass2() {
    const passValue = pass.value;
    const pass2Value = pass2.value;
    if(passValue == pass2Value) {
        setSuccessFor(pass2);
        return true;
    }
    else {
        setErrorFor(pass2, "Retyped password doesn't match your password");
        return false;
    }
}

function validateAll(){
    console.log("validating");
    if(validateHcn() && validateEmail() && validateUname() && validatePass() && validatePass2()) {
        console.log("true");
        return true;
    }
    else {
        console.log("false");
        return false;
    }
}

function setClass(input) {
    const textfield = input.parentElement;
    textfield.className = 'textfield';
}
function clear() {
    setErrorFor(hcn, "");
    setClass(hcn);
    hcn.value="";
    setErrorFor(email, "");
    setClass(email);
    email.value="";
    setErrorFor(uname, "");
    setClass(uname);
    uname.value="";
    setErrorFor(pass, "");
    setClass(pass);
    pass.value="";
    setErrorFor(pass2, "");
    setClass(pass2);
    pass2.value="";
}