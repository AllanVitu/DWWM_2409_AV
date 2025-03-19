const nomVoiture = document.getElementById('#carName');
const btnRecherche = document.getElementById('#btnRecherche');
const infoVoiture = document.getElementById('#result');

fetch('https://raw.githubusercontent.com/ARFP/DWWM_2409/refs/heads/develop/02%20-%20webfront/JS/exo-js-cars/data/cars.json')
.then((Response)=>{
    return Response.json();
}).then((data)=>{
    console.log(data);
}).catch((error) => alert("Erreur : " + error));

function afficher(_nomVoiture) {
    
}


