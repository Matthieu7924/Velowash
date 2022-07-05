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
                // //pour cibler l'étoile d'avant
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