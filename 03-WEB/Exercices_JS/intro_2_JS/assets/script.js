const btnAugmenterText = document.querySelector('#augmenter')
const btnDiminuerText = document.querySelector('#diminuer')
const btnValiderSaisie = document.querySelector("#valider") 
const zoneText = document.querySelector ('#text')
let zoneTaille = document.querySelector('#zoneTaille')
let saisieManuelle = document.querySelector("#saisie")
let taille = 16




const augmenterText = () =>{
    if(taille < 48){
        taille++;
        zoneTaille.innerText = taille;
        zoneText.style.fontSize = taille + "px";
    }else{
        taille = 16;
        zoneTaille.innerHTML = taille;
        zoneText.style.fontSize = taille + "px";
    }
}
btnAugmenterText.addEventListener("click", augmenterText);



const diminuerText = () =>{
    if(taille > 8 ){
        taille--;
        zoneTaille.innerText = taille;
        zoneText.style.fontSize = taille + "px";
    }else{
        taille = 16;
        zoneTaille.innerHTML = taille;
        zoneText.style.fontSize = taille + "px";
    
    }
}
btnDiminuerText.addEventListener("click", diminuerText);



const saisiePx = () =>{
    if(saisieManuelle.value > 7 && saisieManuelle.value < 49){
        taille = saisieManuelle.value
        zoneTaille.innerText = taille
        zoneText.style.fontSize =  taille + "px";
    }else{

        zoneTaille.innerText = 16;
        zoneText.style.fontSize =  16 + "px";
        saisieManuelle.value=16;
        alert("Veuillez saisir une chiffre entre 8 et 48 !")
    }
}
saisieManuelle.addEventListener("blur", saisiePx);


