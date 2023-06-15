// Récupérez les boutons et les éléments correspondants
const parcoursJourButton = document.getElementById("parcoursjour");
const parcoursJour = document.getElementById("parcoursjourContent");
const parcoursHeureButton = document.getElementById("parcoursheure");
const parcoursHeure = document.getElementById("parcoursheureContent");


// Ajoutez des écouteurs d'événements aux boutons pour déclencher l'affichage des éléments correspondants
parcoursJourButton.addEventListener("click", function() {
  parcoursJour.style.display = "block";
  parcoursHeure.style.display = "none";
});

parcoursHeureButton.addEventListener("click", function() {
  parcoursJour.style.display = "none";
  parcoursHeure.style.display = "block";
});