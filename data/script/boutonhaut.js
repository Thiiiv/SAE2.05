var monLien = document.getElementById('retour');

// Cacher le lien au chargement de la page
monLien.style.display = 'none';

// Afficher le lien lorsque l'utilisateur a fait défiler la page
window.addEventListener('scroll', function() {
  if (window.scrollY > 500) {
    monLien.style.display = 'block';
  } else {
    monLien.style.display = 'none';
  }
});