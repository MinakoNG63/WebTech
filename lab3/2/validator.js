// function checkstring(text) {
//     return
// }

function check_type(str){
    return /^[ก-๏A-Za-z]{2,}$/.test(str);
}


function validateForm() {
    let idcard = document.forms["myForm"]["NumID"].value;
    if (idcard.length != 13 ) {
        alert("กรุณากรอกตัวเลขบัตรประชาชน 13 หลัก");
        return false;
    }else if (isNaN(idcard)){
        alert("กรุณากรอกตัวเลขบัตรประชาชน 13 หลัก");
        return false;
    }

    let pre = document.forms["myForm"]["Pre"].value;
    if (pre == "000" ) {
        alert("กรุณาเลือกคำนำหน้า");
        return false;
    }

    let fname = document.forms["myForm"]["FirstName"].value;
    if (fname.length < 2 ) {
        alert("กรุณากรอกชื่อเป็นตัวอักษร ความยาวระหว่าง 2-20 ตัวอักษร");
        return false;
    }else if (fname.length > 20) {
        alert("กรุณากรอกชื่อเป็นตัวอักษร ความยาวระหว่าง 2-20 ตัวอักษร");
        return false;
    }else if(!check_type(fname)){
        alert("กรุณากรอกชื่อเป็นตัวอักษร ความยาวระหว่าง 2-20 ตัวอักษร");
        return false;
    }

    let lname = document.forms["myForm"]["LastName"].value;
    if (lname.length < 2 ) {
        alert("กรุณากรอกนามสกุลเป็นตัวอักษร ความยาวระหว่าง 2-30 ตัวอักษร");
        return false;
    }else if (lname.length > 30) {
        alert("กรุณากรอกนามสกุลเป็นตัวอักษร ความยาวระหว่าง 2-30 ตัวอักษร");
        return false;
    }else if(!check_type(lname)){
        alert("กรุณากรอกนามสกุลเป็นตัวอักษร ความยาวระหว่าง 2-30 ตัวอักษร");
        return false;
    }

    var splittedInput = document.forms["myForm"]["Address"].value.split('\n');
    var firstLine = splittedInput[0];
    var secondLine = splittedInput[1];
    if (firstLine.length < 5 || secondLine.length < 5){
        alert("กรุณากรอกที่อยู่อย่างน้อย 2 บรรทัด แต่ละบรรทัด ความยาวไม่ต่ำกว่า 5 ตัวอักษร");
        return false;
    }

    let district = document.forms["myForm"]["District"].value;
    if (district.length < 2 ) {
        alert("กรุณากรอกตำบล/แขวงเป็นตัวอักษรอย่างน้อย 2 ตัวอักษร");
        return false;
    }else if(!check_type(district)){
        alert("กรุณากรอกตำบล/แขวงเป็นตัวอักษรอย่างน้อย 2 ตัวอักษร");
        return false;
    }

    let county = document.forms["myForm"]["County"].value;
    if (county.length < 2 ) {
        alert("กรุณากรอกอำเภอ/เขตเป็นตัวอักษรอย่างน้อย 2 ตัวอักษร");
        return false;
    }else if(!check_type(county)){
        alert("กรุณากรอกอำเภอ/เขตเป็นตัวอักษรอย่างน้อย 2 ตัวอักษร");
        return false;
    }

    let province = document.forms["myForm"]["Province"].value;
    if (province == "000" ) {
        alert("กรุณาเลือกจังหวัด");
        return false;
    }

    let code = document.forms["myForm"]["Code"].value;
    if (code.length != 5 ) {
        alert("กรุณากรอกรหัสไปรษณีย์ 5 หลัก");
        return false;
    }else if(isNaN(code)){
        alert("กรุณากรอกรหัสไปรษณีย์ 5 หลัก");
        return false;
    }

    let phone = document.forms["myForm"]["Phone"].value;
    if (phone.length < 9 || phone.length > 10) {
        alert("กรุณากรอกเบอร์โทรศัพท์ 9-10 หลัก");
        return false;
    }else if(isNaN(phone)){
        alert("กรุณากรอกเบอร์โทรศัพท์ 9-10 หลัก");
        return false;
    }
}