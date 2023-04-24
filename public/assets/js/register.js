function validateFormRegister() {
    var nameRegex = /^[A-Z]+[A-Za-z]{3,}/;
    var name = document.getElementById('name-input').value;

    var emailRegex = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/;   
    var email = document.getElementById('email-input').value;

    var passwordRegex = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/;
    var password = document.getElementById('password-input').value;

    var confirm = document.getElementById('confirm-input').value;

    if (name == "" && surname == "" && email == "" && password == "" && confirm == "") {
        alert("Please fill the fields!");
        return;

    } if (name == "") {
        alert("Write Name!");

    } else if (!nameRegex.test(name)) {
        alert("Name is wrong!\nName should start with upper case!\nName should have mminimum 3 characters!");

    } if (email == "") {
        alert("Write Email!");

    } else if (!emailRegex.test(email)) {
        alert("Email is wrong!");

    } if (password == "") {
        alert("Write Password!");

    } else if (!passwordRegex.test(password)) {
        alert("Password is wrong!\nPassword should have 8 characters,at least one letter and one number!");

    } if (confirm == "") {
        alert("Confirm password!");

    } else if (password != confirm) {
        alert("Passwords doesn't match!");

    } else if (nameRegex.test(name) && surnameRegex.test(surname) && emailRegex.test(email) && passwordRegex.test(password) && password != confirm) {
        window.location.href = "{{ url('/login') }}";
        alert("Registred succesfully!");

    }
}