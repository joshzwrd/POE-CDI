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

class Car {
    constructor(name = 'default name', color = 'blue') {
        this.name = name;
        this.color = color;
        this.speed = Math.floor(Math.random() * (10-4)) + 3;
    }
    getColor() {
        return `<span style="color: ${this.color}">${this.color}</span>`
    }
    toPresentOneself() {
        display(`Hello, i am ${this.name}, and my color is ${this.getColor()}`)
    }
    forward() {
        setTimeout(() => {
            display(`${this.name} forward !`)
        }, 3000);
    }
}
const myCar = new Car('BMW', 'blue');
const fatherCar = new Car('Audi', 'red');
const friendCar = new Car('Renault', 'green');
const brotherCar = new Car('Citroen', 'pink');
const garage = [myCar, fatherCar, friendCar, brotherCar];
garage.forEach(item => item.toPresentOneself());

garage[0].forward();