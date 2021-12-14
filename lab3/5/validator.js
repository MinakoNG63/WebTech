function ramdom(){
    var randy1 = Math.floor(Math.random() * 1000000)
    document.getElementById("first").innerText = String(randy1).padStart(6, "0");
    var randy2 = Math.floor(Math.random() * 1000)
    document.getElementById("f-third").innerText = String(randy2).padStart(3, "0");
    var randy3 = Math.floor(Math.random() * 1000)
    document.getElementById("b-third").innerText = String(randy3).padStart(3, "0");
    var randy4 = Math.floor(Math.random() * 100)
    document.getElementById("sec").innerText = String(randy4).padStart(2, "0");
}