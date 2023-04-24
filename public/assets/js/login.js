function validateForm() {
    var emailRegex = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/;   
    var email = document.getElementById('email-input').value;

    var passwordRegex =/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/;
    var password = document.getElementById('password-input').value;
    
    if (email == "" && password == "") {
        alert("Write email and password!");
       return;
    }if (email == "") {
        alert("Write email!");

    }if(!emailRegex.test(email)){
        alert("Email is wrong! ");

    }if (password == "") {
        alert("Write password!");

    }if(!passwordRegex.test(password)){
        alert("Password is wrong!\nPassword should have 8 characters,at least one letter and one number!");

    } else if (passwordRegex.test(email) && passwordRegex.test(password)) {
        alert("Loged in succesfully!");
        window.location.href = "{{ url('/index') }}s";
    }
}