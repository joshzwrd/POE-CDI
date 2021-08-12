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


let n1;
let n2;

createTextField((e) => {
    n1 = parseInt(e)
},
null,
'Champs N°1');

createTextField((e) => {
    n2 = parseInt(e);
},
null,
'Champs N°2');

createButton("+", addition, "success");

function addition (n1,n2) {

    Addition = n1 + n2;
    
    display("Addition = " +  Addition);
    
    if(isNaN(n1) || isNaN(n2)){
        return false;
    }
    
    return n1 + n2;
}

createButton("-",function soustraction (n1,n2) {
    if(isNaN(n1) || isNaN(n2)){
        return false;
    }

    return n1 - n2;
}, "success");


createButton("X",  function multiplication (n1,n2) {
    if(isNaN(n1) || isNaN(n2)){
        return false;
    }

    return n1 * n2;
}, "success");

createButton("/", function division (n1,n2) {

    if(isNaN(n1) || isNaN(n2) || n2 == 0 ){
        return false;
    }

    return n1 / n2;
}, "success");


