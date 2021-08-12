const tabMenuCard = [];

function Menu(starter, mainCourse, dessert) {
    this.id = Math.floor(Math.random() * 5555555) + 0;
    this.starter = starter;
    this.mainCourse = mainCourse;
    this.dessert = dessert;

    this.display = function() {
        const menuCardElement = document.createElement('div');
        menuCardElement.innerHTML = `${this.starter} + ${this.mainCourse}  + ${this.dessert}`;

        document.querySelector('#menuCardContainer').appendChild(menuCardElement)
    }
}

Menu.prototype.hideAll = function() {
    document.querySelector('#menuCardContainer').innerHTML = '';
}

function initCardMenu() {
    var dropdownCardMenu = document.querySelector('#cardMenuSelector');

    document.querySelector('#newMenuAddButton').addEventListener('click', function() {
        // Affecter l'entrée
        const inputStarter = document.querySelector('#newMenuEntry');

        // Affecter le plat
        const inputMainCourse = document.querySelector('#newMenuMainCourse');

        // Affecter le dessert
        const inputDessert = document.querySelector('#newMenuDessert');

        const newMenu = new Menu(inputStarter.value, inputMainCourse.value, inputDessert.value);

        // Vider les champs
        inputStarter.value = '';
        inputMainCourse.value = '';
        inputDessert.value = '';

        tabMenuCard.push(newMenu);

        /*
        var newTitleMenuElement = document.createElement('div');
        newTitleMenuElement.innerHTML = 'Menu ' + tabMenuCard.length;
        newTitleMenuElement.setAttribute('data-target-index', newMenu.id);

        newTitleMenuElement.addEventListener('click', function() {
            Menu.prototype.hideAll();
            newMenu.display();
        });

        document.querySelector('#menuTitleCardContainer').appendChild(newTitleMenuElement);
         */

        var optionTargetCard = document.createElement('option');
        optionTargetCard.innerHTML = 'Menu ' + tabMenuCard.length;
        optionTargetCard.value = newMenu.id;

        dropdownCardMenu.add(optionTargetCard);
    });


    dropdownCardMenu.addEventListener('change', function(event) {
        var targetValuePicked = event.target.value;

        tabMenuCard.forEach(function(currentItem) {
            if(currentItem.id == targetValuePicked) {
                Menu.prototype.hideAll();
                currentItem.display();
            }
        });
    })
}
