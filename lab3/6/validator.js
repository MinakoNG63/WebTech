function create(){
    var name = document.forms["myForm"]["name"].value;
    var phone = document.forms["myForm"]["phone"].value;
    var email = document.forms["myForm"]["email"].value;
    var company = document.forms["myForm"]["company"].value;

    if (name.length < 1) {
        alert("กรุณากรอกชื่อ");
        return false;
    }else if (isNaN(phone)){
        alert("กรุณากรอกเบอร์โทรศัพท์");
        return false;
    }else if (phone.length > 10 || phone.length < 9){
        alert("กรุณากรอกเบอร์โทรศัพท์");
        return false;
    }
    else if (email.length < 1){
        alert("กรุณากรอก email");
        return false;
    }else if (company.length < 1){
        alert("กรุณากรอกชื่อบริษัท")
    }


    document.getElementById("one").innerText = name;
    document.getElementById("two").innerText = "Tel: " + phone;
    document.getElementById("three").innerText = "E-mail: " + email;
    document.getElementById("four").innerText = company;
}