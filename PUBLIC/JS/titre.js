let titLog = document.getElementById("titLog");
let titNom = document.getElementById("titNom");
titLog.style.display = "none";

function titleRotate() {
    titLog.style.display = "none";
    titNom.style.display = "block";
}
function titleRotate2() {
    titLog.style.display = "block";
    titNom.style.display = "none";
}

let intervalTitle = setInterval(titleRotate, 1000);
let intervalTitle2 = setInterval(titleRotate2, 2000);




