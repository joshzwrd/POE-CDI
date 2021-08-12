//  1: POUR AFFICHER UN MESSAGE
// > display("mon message", "red")
// ======================================================================

//  2: POUR EFFACER LE TEXTE
// > clearText()
// ======================================================================

//  3: POUR CREER UN BOUTON
// > createButton("texte du bouton", fonctionCallBack, "danger")
//      - Couleur disponible pour les bouton :
//          Rouge : "danger"
//          Bleu : "primary" (defaut)
//          Vert : "success"
//          Jaune : "warning"
// ======================================================================


//  4: POUR CREER UN CHAMPS TEXTE
/*
 > createTextField((valeurDuTexte) => {
        console.log('la valeur du champs de text', valeurDuTexte)
    },
    'Texte de mon bouton' [si false, la callback est appelé lorsque le texte change]
    'placeholder');
 */
// ======================================================================


const promise = new Promise((resolve) => {
    
    let myAge;
    
        createTextField((a) => {
            myAge = parseInt(a);
        },
        'Entrer', 'Quel âge as-tu ?');

    setTimeout(() =>{
    if (myAge > 18){
            resolve(true);
    }
    else
    {
            resolve(false)
    }
        
    }, 5000); 
});


promise.then((v) => {
    if (v){
        display("C'est carré" , 'green');
}else{
        display("Je crois que ça ne va pas être possible", 'red');
    }

});

