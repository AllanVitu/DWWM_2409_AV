let resultat = document.querySelector("#rsltFormulaires")
const boutonValider = document.querySelector("#btnValider")
const textAge = document.querySelector("#texteAges")
const boutonVider = document.querySelector("#btnVider")
const texteRetraite = document.querySelector("#texteRetraite")
let i




const afficher = () => {
    let prenomSaisie = document.querySelector("#saisiePrenom").value    
    let ageSaisie = document.querySelector("#saisieAge").value
    let ageRetraite = 0

    if(saisiePrenom !== "" && saisieAge > 0){
        resultat.innerText = "Bonjour" + prenomSaisie + ", votres age est : " + ageSaisie + "ans." 
       
        if(ageSaisie >= 18){
            textAge.innerText = "vous etes majeur !"

          if(saisieAge > 64){
            ageRetraite = saisieAge - 64
            texteRetraite.innerText = "Il vous resrte" + ageRetraite + "année(s) avant la retraitre !"
            }
        
            else if(ageSaisiec > 64){
            ageRetraite = saisieAge -64
            texteRetraite.innerText = "Il vous reste " + ageRetraite + " année(s) avant la retraite."
             }
                
            else if(age > 64) {
            ageRetraite = age - 64
            texteRetraite.innerText = "Vous êtes à la retraite depuis " + ageRetraite + " année(s)"
                }
                else {
                texteRetraite.innerText = "Vous prenez votre retraite cette année !"
                 }
                 }
                    else {
                         texteAge.innerText = "Vous êtes mineure."
                         }
                         }
                        else {
                        resultat.innerText = "Compléter/corriger le formulaire."
                                }
}

boutonValider.addEventListener("click", afficher)





