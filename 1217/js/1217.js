function validateForm() {
    if (!validateName() || !validatePhone() || !validateEmail() || !validateSelect()) {
        return false;
    } else {
        alert("Gửi thông tin thành công");
        return true;
    }
}

function validateName() {
    var a = document.getElementById('name');
    var name = a.value;
    if (name.length == 0) {
        a.style.outline = 'thin solid red';
        return false;
    }
    return true;
}

function validatePhone() {
    var a = document.getElementById('phone');
    var phone = a.value;
    if (phone.length == 0) {
        a.style.outline = 'thin solid red';
        return false;
    }
    if (phone.length > 10 || phone.length < 10) {
        a.style.outline = 'thin solid red';
        return false;
    }
    if (!phone.match(/^[0-9]{10}$/)) {
        a.style.outline = 'thin solid red';
        return false;
    }
    return true;
}

function validateEmail() {
    var a = document.getElementById('email');
    var email = a.value;
    if (email.length == 0) {
        a.style.outline = 'thin solid red';
        return false;
    }
    if (!email.match(/^[A-Za-z\._\-[0-9]*[@][A-Za-z]*[\.][a-z]{2,4}$/)) {
        a.style.outline = 'thin solid red';
        return false;
    }
    return true;
}

function validateSelect() {
    var type = document.getElementById("type");
    var typeValue = type.options[type.selectedIndex].value;
    var strType = type.options[type.selectedIndex].text;
    if (typeValue == 0) {
        type.style.outline = 'thin solid red';
        return false;
    }
    return true;
}