// script.js
const container = document.getElementById('container');
const loginButton = document.getElementById('login');
const signUpButton = document.getElementById('signUp');

// Ajoute la classe "active" pour afficher le formulaire d'inscription
signUpButton.addEventListener('click', () => {
    container.classList.add('active');
});

// Supprime la classe "active" pour afficher le formulaire de connexion
loginButton.addEventListener('click', () => {
    container.classList.remove('active');
});