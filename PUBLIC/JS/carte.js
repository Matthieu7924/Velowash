window.addEventListener("DOMContentLoaded", (event) => {
    //initialisation de la carte en centrant sur Bordeaux
    let carte = L.map('map').setView([44.8378, -0.594], 11);
    let zoomlevel = 11;
    //chargement des tuiles
    L.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {
        attribution: 'données @ <a href="//osm.org/copyright">OpenStreetMap</a>/ODbl - rendu <a href="//openstreetmap.fr">OSM France</a>',
        minZoom: 11,
        maxZoom: 20,
        zoom: zoomlevel,
    }).addTo(carte);

    function updatedata() {
        fetch('?page=data').then(function (response) {
            let contentType = response.headers.get("content-type");
            if (contentType && contentType.indexOf("application/json") !== -1) {
                return response.json().then(function (stations) {
                    // traitement du JSON            
                    let tableauMarqueurs = [];
                    //parcours des différentes stations avec boucle forEach
                    stations.forEach(station => {
                        //personnaliser le marqueur
                        //création du marqueur et sa popup
                        let marqueur = L.marker([station.lat, station.lon]).addTo(carte);
                        marqueur.bindPopup("<h2>" + station.name +"</h2>"+"<p>" + station.adresse +"</p>");
                        //on ajoute le marqueur au tableau des marqueurs
                        tableauMarqueurs.push(marqueur);
                    });
                    //regroupement des marqueurs dans un groupe leaflet
                    let groupe = new L.featureGroup(tableauMarqueurs);
                });
            } else {
                console.log("Oops, ce n'est pas du JSON!");
            }
        })
    };
    let intervalID = setInterval(updatedata, 1000);
});















