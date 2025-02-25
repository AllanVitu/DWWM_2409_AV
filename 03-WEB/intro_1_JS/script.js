const scoreZone = document.querySelector('span')

const boutonAjouter = document.querySelector("#ajouter")

const boutonReinitialiser = document.querySelector("#reinitialiser")

let score = 0



const comptage = () => {
    score++;
    scoreZone.innerText = score;
}

boutonAjouter.addEventListener("click", comptage)


const formatage = () =>{
    score = 0;
    scoreZone.innerText = score;
}

boutonReinitialiser.addEventListener("click", formatage)