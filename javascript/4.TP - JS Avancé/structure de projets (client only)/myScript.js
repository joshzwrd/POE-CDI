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

function Animal(name) {
    this.name = name;
    this.paws = 0;
}

function Cat(name) {
    Animal.call(this, name);

    this.paws = 4;
}

let billy = new Cat('Billy the cat');
display(billy);
display('lorem ip tsum lorem ip tsum lorem ip tsum');
display('lorem ip tsum lorem ip tsum lorem ip tsum');
display('lorem ip tsum lorem ip tsum lorem ip tsum');
display('lorem ip tsum lorem ip tsum lorem ip tsum');

