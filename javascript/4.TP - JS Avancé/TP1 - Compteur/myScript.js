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

let Demarrer = createButton("Démarrer", counter, "success");

let count = 0;

function counter(){
    
    display("Le compteur demarre !", "blue");
    setInterval(function(){ count += 1; display(count) }, 1000
    );
}

let Arreter = createButton("Arreter", stopCounter, "danger");

function stopCounter(){
    display("Le compteur s'arrête... ", "#FCB"); 
    Demarrer == null;
    clearInterval(counter);
}

