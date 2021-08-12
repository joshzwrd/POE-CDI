var tabClients = [];

function addClient(firstname, lastname, address, phone) {
    tabClients.push({
        firstname : firstname,
        lastname : lastname,
        address : address,
        phone : phone,
        numberCardId : Math.floor(Math.random() * 800) + 200
    });
}

addClient('luccioni', 'jb', '402 rue du paradis', '06454474871');
addClient('alway', 'john', '305 rue des chateaux fort', '05645875445');
addClient('never', 'bob', '104 rue du marquis', '0782558877');
addClient('wayne', 'carl', '207 route des jongleurs', '0655449975');


function displayClients() {
    tabClients.forEach(function(currentClient) {
        // Create all element for client card
        var cardClientElement = document.createElement('div');
        cardClientElement.classList.add('card-client');

        var imgClientElement = document.createElement('img');
        const randomId = Math.floor(Math.random() * 20) + 20;
        imgClientElement.src = `https://picsum.photos/id/${randomId}/300/300`;

        var cardClientInfoElement = document.createElement('div');
        cardClientInfoElement.classList.add('card-client-info');

        var cardClientInfoExtendElement = document.createElement('div');
        cardClientInfoExtendElement.classList.add('card-client-infoextend');
        cardClientInfoExtendElement.innerHTML = `${currentClient.phone} <hr> ${currentClient.numberCardId}`;

        var cardNameElement = document.createElement('p');
        cardNameElement.classList.add('card-client-name')
        cardNameElement.innerHTML = `${currentClient.firstname.toUpperCase()} ${currentClient.lastname}`;

        var cardAddressElement = document.createElement('p');
        cardAddressElement.innerHTML = currentClient.address;


        // Append template of element card to DOM
        cardClientInfoElement.appendChild(cardNameElement);
        cardClientInfoElement.appendChild(cardAddressElement);
        cardClientElement.appendChild(imgClientElement);
        cardClientElement.appendChild(cardClientInfoElement);
        cardClientElement.appendChild(cardClientInfoExtendElement);
        document.querySelector('#clientContainer').appendChild(cardClientElement);
    });
}
