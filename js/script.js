var nbAllumettes;
var tour;

function initialiser() {
    nbAllumettes = Math.floor(Math.random() * (40 - 5 + 1)) + 5;
    tour = 1;
    dessinerAllumettes();
}

function dessinerAllumettes() {
    var allumettesDiv = document.getElementById("allumettes");
    allumettesDiv.innerHTML = "";
    for (var i = 0; i < nbAllumettes; i++) {
        var allumetteDiv = document.createElement("div");
        allumetteDiv.className = "allumette";
        allumettesDiv.appendChild(allumetteDiv);
    }
    document.getElementById("nb-allumettes").textContent = nbAllumettes;
}

function jouerTour() {
    var nbRetirer = parseInt(document.getElementById("nb-allumettes-retirer").value);
    if (isNaN(nbRetirer) || nbRetirer < 1 || nbRetirer > 3 || nbRetirer > nbAllumettes) {
        document.getElementById("result").textContent = "Veuillez entrer un nombre valide (entre 1 et 3, et inférieur ou égal au nombre d'allumettes restantes).";
        return;
    }
    nbAllumettes -= nbRetirer;
    dessinerAllumettes();
    if (nbAllumettes == 0) {
        document.getElementById("result").textContent = "Bravo, vous avez gagné en " + tour + " tours !";
        document.getElementById("options").style.display = "none";
    } else {
        tour++;
        var nbRetirerOrdi = Math.floor(Math.random() * Math.min(3, nbAllumettes)) + 1;
        nbAllumettes -= nbRetirerOrdi;
        dessinerAllumettes();
        if (nbAllumettes == 0) {
            document.getElementById("result").textContent = "Dommage, l'ordinateur a gagné !";
            document.getElementById("options").style.display = "none";
        } else {
            document.getElementById("result").textContent = "";
            document.getElementById("nb-allumettes-retirer").value = "";
        }
    }
}