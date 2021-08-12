let allPosts = [];


fetch('https://jsonplaceholder.typicode.com/posts')
 .then((response) => response.json())
 .then((json) => {
 allPosts = json;

 console.log(allPosts);

let postContent = $("#tableContent");


allPosts.forEach((ePost) => {

    
    let postElement = $('<tr></tr>');

    let titleElement = $('<td></td>');
    titleElement.html(ePost.title);

    let contenuElement = $('<td></td>');
    contenuElement.html(ePost.body);

    let tdBtn = $('<td></td>');
    let Cbtn = $('<button>').attr({
        class: 'button1'
    }).text("Supprimer");

    tdBtn.append(Cbtn);

    postContent.append(postElement).append(titleElement, contenuElement, tdBtn);
    
});


});
