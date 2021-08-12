let allPosts = [];


fetch('https://jsonplaceholder.typicode.com/posts')
 .then((response) => response.json())
 .then((json) => {
 allPosts = json;

 console.log(allPosts);

// let postContainer = document.querySelector("#postContainer");

let postContent = document.querySelector("#tableContent");


allPosts.forEach((ePost) => {

    // let postElement = document.createElement('li');
    // postElement.innerHTML = ePost.title;
    
    let postElement = document.createElement('tr');

    let titleElement = document.createElement('td');
    titleElement.innerHTML = ePost.title;

    let contenuElement = document.createElement('td');
    contenuElement.innerHTML = ePost.body;

    let tdBtn = document.createElement('td');
    let Cbtn = document.createElement('button');
    Cbtn.innerHTML = "Supprimer"
    Cbtn.className = "button1"

    tdBtn.appendChild(Cbtn);

    postContent.appendChild(postElement).append(titleElement, contenuElement, tdBtn);
    
    // postContainer.appendChild(postElement);
});


});
