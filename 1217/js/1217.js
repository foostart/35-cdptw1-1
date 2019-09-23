function validateForm() {
    if (!validateName() || !validatePhone() || !validateEmail()) {
        alert("Không hợp lệ");
        return false;
    }
}

function validateName() {
    var name = document.getElementById('name').value;

    if (name.length == 0) {
        alert("Xin mời nhập tên");
        return false;
    }
}

function validatePhone() {
    var phone = document.getElementById('phone').value;
    if (phone.length == 0) {
        alert('Xin mời nhập số điện thoại');
        return false;
    }
    if (phone.length > 10 || phone.length < 10) {
        alert('Xin mời nhập số điện thoại');
        return false;
    }
    if (!phone.match(/^[0-9]{10}$/)) {
        alert('Xin mời nhập số điện thoại');
        return false;
    }
    return true;
}

function validateEmail() {
    var email = document.getElementById('email').value;
    if (email.length == 0) {
        alert('Xin mời nhập email');
        return false;
    }
    if (!email.match(/^[A-Za-z\._\-[0-9]*[@][A-Za-z]*[\.][a-z]{2,4}$/)) {
        alert('Email không hợp lệ');
        return false;
    }
    return true;
}