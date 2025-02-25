const btnAugmenterText = document.querySelector('#augmenter')
const btnDiminuerText = document.querySelector('#diminuer')
const zoneText = document.querySelector ('#text')
let zoneTaille = document.querySelector('#zoneTaille')
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