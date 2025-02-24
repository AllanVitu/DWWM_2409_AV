const tailleText = document.querySelector('span')

const augmenterText = document.querySelector('#augmenter')

const diminuerText = document.querySelector('#diminuer')

let text = document.querySelector('#paragraphe')

let taille = parseInt(tailleText.textContent)



const tailleMax = () => {
    taille++;
    augmenterText.innerText = taille;
    text.style.fontSize = taille + "px";
}

augmenterText.addEventListener("click", tailleMax)
