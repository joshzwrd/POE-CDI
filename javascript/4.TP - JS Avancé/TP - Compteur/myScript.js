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

// let counter = 0;
// let counterCycle = null;

// function stopCounter() {
//     if(counterCycle) {
//         display('Le compteur s\'arrête..', '#FC0');
//         clearInterval(counterCycle);
//         counterCycle = null;
//     }
// }

// createButton('Démarrer', function() {
//     if (counterCycle === null) {
//         display('Le compteur demarre !', '#44A');
//         counterCycle = setInterval(function() {
//             counter++;
//             display(counter);
//         }, 1000);
//     }
// }, 'success');

// createButton('Arrêter', stopCounter, 'danger');



function Compteur (demarrer, arreter){

    this.demarrer = demarrer
    this.arreter = arreter;

    let counter = 0;
let counterCycle = null;

function stopCounter() {
    if(counterCycle) {
        display('Le compteur s\'arrête..', '#FC0');
        clearInterval(counterCycle);
        counterCycle = null;
    }
}

createButton('Démarrer', function() {
    if (counterCycle === null) {
        display('Le compteur demarre !', '#44A');
        counterCycle = setInterval(function() {
            counter++;
            display(counter);
        }, 1000);
    }
}, 'success');

createButton('Arrêter', stopCounter, 'danger');

}

let N1 = new Compteur(Bonjour, Aurevoir);








