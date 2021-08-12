let allPosts = [];

window.onload = () =>{
    
$.get( "https://jsonplaceholder.typicode.com/posts", function(dataJson) {
allPosts = dataJson;

console.log(allPosts);

const postContent = $("#tableContent");


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

}
