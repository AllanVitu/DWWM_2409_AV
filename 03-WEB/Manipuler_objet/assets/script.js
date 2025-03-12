const myEmployee = {
    lastname: "Doe", 
    firstname: "John", 
    birthday: "1981-11-12", 
    salary: 2150
}

bonjour = () => {
    alert('Bonjour, je suis' + this.firstname[0] + 'je suis née le '
         + this.birthday);
}