var count = 1

function changesrc() {
    if (count == 1) {
        document.getElementById("img1").src = "http://10.0.15.20/lab3/images/3.png";
        document.getElementById("img2").src = "http://10.0.15.20/lab3/images/1.png";
        document.getElementById("img3").src = "http://10.0.15.20/lab3/images/4.png";
        document.getElementById("img4").src = "http://10.0.15.20/lab3/images/2.png";
        count = 2
    }else if (count == 2) {
        document.getElementById("img1").src = "http://10.0.15.20/lab3/images/4.png";
        document.getElementById("img2").src = "http://10.0.15.20/lab3/images/3.png";
        document.getElementById("img3").src = "http://10.0.15.20/lab3/images/2.png";
        document.getElementById("img4").src = "http://10.0.15.20/lab3/images/1.png";
        count = 3
    }else if (count == 3) {
        document.getElementById("img1").src = "http://10.0.15.20/lab3/images/2.png";
        document.getElementById("img2").src = "http://10.0.15.20/lab3/images/4.png";
        document.getElementById("img3").src = "http://10.0.15.20/lab3/images/1.png";
        document.getElementById("img4").src = "http://10.0.15.20/lab3/images/3.png";
        count = 4
    }else if (count == 4) {
        document.getElementById("img1").src = "http://10.0.15.20/lab3/images/1.png";
        document.getElementById("img2").src = "http://10.0.15.20/lab3/images/2.png";
        document.getElementById("img3").src = "http://10.0.15.20/lab3/images/3.png";
        document.getElementById("img4").src = "http://10.0.15.20/lab3/images/4.png";
        count = 1
    }


}