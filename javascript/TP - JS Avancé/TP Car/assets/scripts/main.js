function display(inputText, color = 'black') {
    if(typeof inputText === 'object') {
        inputText = '<pre>' + JSON.stringify(inputText, undefined, 4) + '</pre>';
    }

    let outputElement = document.createElement('p');

    outputElement.innerHTML = '<i class="fa fa-chevron-right mx-2"></i>' + inputText;
    outputElement.style.color = color;
    outputElement.classList = 'programme-text'

    document.getElementById("contentScript").appendChild(outputElement);

    return outputElement;
}

function createButton(label, callback, color = 'primary') {
    let outputElement = document.createElement('button');

    outputElement.innerHTML = label;
    outputElement.classList = "btn btn-" + color;

    outputElement.addEventListener("click", callback);

    document.getElementById("contentScript").appendChild(outputElement);

    return outputElement;
}

(function createClearButton() {
    let outputElement = document.createElement('button');

    outputElement.innerHTML = '<i class="fa fa-eraser" aria-hidden="true"></i>';
    outputElement.classList = "btn btn-info button-clear";

    outputElement.addEventListener("click", () => {
        clearText();
    });

    document.getElementById("contentScript").appendChild(outputElement);
})();

function clearText() {
    const listNodeText = document.getElementsByClassName('programme-text');

    while(listNodeText.length > 0){
        listNodeText[0].parentNode.removeChild(listNodeText[0]);
    }
}

function createTextField(callback, validButton = 'Valider', labelField = "entrez votre texte") {
    let outputElementField = document.createElement('input');
    outputElementField.placeholder = labelField;
    outputElementField.classList = "form-control";

    document.getElementById("contentScript").appendChild(outputElementField);

    if(validButton) {
        let outputElementValid= document.createElement('button');
        outputElementValid.innerHTML = validButton;
        outputElementValid.classList = "btn btn-primary mt-2";

        outputElementValid.addEventListener("click", () => {
            callback(outputElementField.value);
        });

        document.getElementById("contentScript").appendChild(outputElementValid);


        outputElementField.removeAll = function() {
            this.remove();
            outputElementValid.remove();
        }
    } else {
        outputElementField.addEventListener('keyup', () => {
            callback(outputElementField.value);
        });
    }

    return outputElementField;
}

