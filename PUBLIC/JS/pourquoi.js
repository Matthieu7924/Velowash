let univ = document.getElementById('cB1');
let log = document.getElementById('cB2');
let ecolo = document.getElementById('cB3');
let cent1 = document.getElementById('centerBox1');
let cent2 = document.getElementById('centerBox2');
let cent3 = document.getElementById('centerBox3');

let but2 = document.getElementById('but2');
let but3 = document.getElementById('but3');
let butr = document.querySelectorAll('.butr');

let but1 = document.getElementById('but1');

if (but1) {
    but1.addEventListener('click', function uni() {
        if (cent1.style.display === "none") {
                cent1.style.display = "flex",
                cent2.style.display = "none",
                cent3.style.display = "none",
                univ.style.display = "none",
                log.style.display = "none",
                ecolo.style.display = "none";
        } else {
            cent1.style.display = "none";
        }
    })
}

if (but2) {
    but2.addEventListener('click', function logo() {
        if (cent2.style.display === "none") {
                cent2.style.display = "flex",
                cent1.style.display = "none",
                cent3.style.display = "none",
                univ.style.display = "none",
                log.style.display = "none",
                ecolo.style.display = "none";
        } else {
            cent2.style.display = "none";
        }
    })
}

if (but3) {
    but3.addEventListener('click', function ecol() {
        if (cent3.style.display === "none") {
                cent3.style.display = "flex",
                cent1.style.display = "none",
                cent2.style.display = "none",
                univ.style.display = "none",
                log.style.display = "none",
                ecolo.style.display = "none";
        } else {
            cent3.style.display = "none";
        }
    })
}

