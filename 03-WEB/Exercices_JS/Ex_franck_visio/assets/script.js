fetch(/assets/app.json)
.then(response=> {return response.json()})
.then( (data)=>{ console.log(data);

    afficherTableau(data);



})
