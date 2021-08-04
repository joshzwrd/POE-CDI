
document.querySelector('#addBtn').addEventListener('click', function(){
    // ajouter un élément

    let newLi = document.createElement('li');
    let close = document.createElement('button');
    
    newLi.className = "liste"
    close.className = "close"


    newLi.innerHTML = document.querySelector('#myInput').value;
    close.innerHTML = "Supprimer"
    newLi.append(close);
    document.querySelector('#myUl').appendChild(newLi);

   

    

});

function nTache(e){
    let val = document.getElementById("task").value;
    if (val == null || val == ""){
        alert('champs incorrect');
    }
    else{
        // créer un bouton close afin de l'intégrer automtiquement a la creation d'un li

        let input = document.queryselector('.myInput')
        tache.appendChild



    } 
}





