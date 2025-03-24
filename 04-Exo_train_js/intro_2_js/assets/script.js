const btnAugmenter = document.querySelector('#btnAugementer')
const btnDiminuer = document.querySelector('#btnDiminu')
const zonePx = document.querySelector('#zoneText')
const text = document.querySelector('#text')
const manouelle = document.getElementById('#saisieManouelle')


let taille = 16;
zonePx.innerText = taille + " px"


const augmentation = () => {
    if(taille < 48){
        taille ++;
    }else{
        taille = 16
    }
    zonePx.innerText = taille + "px"
    text.style.fontSize = taille + "px"

}

btnAugmenter.addEventListener('click', augmentation)




const diminution = () => {
    if(taille > 8){
        taille --;
    }else{
        taille = 16;
    }
    zonePx.innerText = taille + "px"
    text.style.fontSize = taille + "px"
}

btnDiminuer.addEventListener('click', diminution);




const saisie = () => {
    
}