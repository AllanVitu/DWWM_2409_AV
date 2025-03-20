import {collectionCars} from './data/cars.js'

const validate = document.querySelector("#validate")

const inputCarName = document.querySelector("#carName")

const ulElement = document.getElementById("ul")


validate.addEventListener('click', function(event) {
    event.preventDefault();
    // recuéprer la veleur de inputCarName
    let search = inputCarName.value.toLowerCase();
    let list = collectionCars;

    // rechercher dans la collection collectionCars les voitures dont le nom correspond
   let mesVoitures = list.filter(
    uneVoiture => uneVoiture.car_name.toLowerCase().includes(search)
   )

   console.log(mesVoitures);

   for (const car of mesVoitures) {
        const liElement = document.createElement('li');
        liElement.innerText = car.car_name;
        ulElement.appendChild(liElement)
    }
})


// il faut afficher ce qu'il y a au dessus et qu'il s'affiche dans la page html
/*const ulElement = document.getElementById("ul")

fetch('./data/cars.json').then(response =>{
    return response.json();
})
.then((cars) => {
    
    console.log(cars)
    for (const car of cars) {
        const liElement = document.createElement('li');
        liElement.innerText = car.car_name;
        ulElement.appendChild(liElement)
    }
});*/




