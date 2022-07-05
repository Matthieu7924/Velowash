
icon.onclick = function () {
    document.body.classList.toggle("dark-theme");
    if (document.body.classList.contains("dark-theme")) {
        icon.src = "PUBLIC/assets/sun.png";
        localStorage.setItem("theme", "dark");
    } else {
        icon.src = "../PUBLIC/assets/moon.png";
        localStorage.setItem("theme", "light");
    }
}

/******************DARK THEME****************/
//ou domcontentloaded
window.onload = () => {
    let icon = document.getElementById("icon");
    // let pCard = document.querySelectorAll(".pcard");
    ;
    if (localStorage.getItem("theme") == null) {
        localStorage.setItem("theme", "light");
    }
    let localData = localStorage.getItem("theme");
    if (localData == "light") {
        icon.src = "../PUBLIC/assets/moon.png";
        document.body.classList.remove("dark-theme");
        document.body.classList.add('light');
        // pCard.classList.remove("dark-theme");
        // pCard.classList.add('light');
    } else if (localData == "dark") {
        icon.src = "PUBLIC/assets/sun.png";
        document.body.classList.remove("light");
        document.body.classList.add('dark-theme');
        // pCard.classList.remove("light");
        // pCard.classList.add('dark-theme');
    }
    /******************AVIS ETOILES****************/
    //récupérer les étoiles
    const stars = document.querySelectorAll(".la-star");
    //récupérer l'input
    const note = document.querySelector("#note");
    //boucler les étoiles pour ajouter les event listener
    for (let star of stars) {
        //écoute du survol
        star.addEventListener("mouseover", function () {
            resetStars();
            this.style.color = "red";
            this.classList.add("las");
            this.classList.remove("lar");
            //balise soeur
            let previousStar = this.previousElementSibling;
            while (previousStar) {
                // //l'étoile précédente devient rouge
                previousStar.style.color = "red";
                previousStar.classList.add("las");
                previousStar.classList.remove("lar");
                // //on cible l'étoile d'avant
                previousStar = previousStar.previousElementSibling;
            }
        });
        //écoute du clic
        star.addEventListener("click", function () {
            note.value = this.dataset.value;
        });
        star.addEventListener("mouseout", function () {
            resetStars(note.value);
        });
    }
    function resetStars(nb = 0) {
        for (let star of stars) {
            if (star.dataset.value > nb) {
                star.style.color = "black";
                star.classList.add("lar");
                star.classList.remove("las");
            }
            else {
                star.style.color = "red";
                star.classList.add("las");
                star.classList.aremove("lar");
            }
        }
    }
}






