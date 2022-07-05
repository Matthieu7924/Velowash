function afficherDateHeure() {
    let date = new Date();
    // let annee = date.getFullYear();
    let mois = date.getMonth();
    let jour = date.getDate();
    // let jsem = date.getDay();
    let MOIS = ["Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Aout", "Septembre", "Octobre", "Novembre", "Décembre"]
    // let JSEM = ["dimanche", "lundi", "mardi", "mercredi", "jeudi", "vendredi", "samedi"]
    mois = MOIS[mois];
    // jsem = JSEM[jsem];
    let heure = date.getHours();
    let minute = date.getMinutes();
    let seconde = date.getSeconds();

    if (heure < 10) {heure = "0" + heure};
    if (minute < 10) {minute = "0" + minute};
    if (seconde < 10) {seconde = "0" + seconde};

    document.getElementById("date").innerHTML = jour + " " + mois;
    document.getElementById("heure").innerHTML = + heure + ":" + minute + ":" + seconde;
}
setInterval(afficherDateHeure, 1000);