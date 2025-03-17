// script.js
const container = document.getElementById('container');
const loginButton = document.getElementById('login');
const signUpButton = document.getElementById('signUp');
const btnNoCompte = document.getElementById('btnNoCompte');
const btnOkCompte =  document.getElementById('btnOkCompte');

// Ajoute la classe "active" pour afficher le formulaire d'inscription
signUpButton.addEventListener('click', () => {
    container.classList.add('active');
});

// Supprime la classe "active" pour afficher le formulaire de connexion
loginButton.addEventListener('click', () => {
    container.classList.remove('active');
});

btnNoCompte.addEventListener('click', () =>{
    let toto = document.querySelector('.container');

    toto.classList.toggle('active');

})

btnOkCompte.addEventListener('click', () =>{
    let toto = document.querySelector('.container');

    toto.classList.toggle('active');

})