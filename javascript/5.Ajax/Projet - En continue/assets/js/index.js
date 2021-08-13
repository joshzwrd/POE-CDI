let allPosts = [];
let deletePosts = [];

window.onload = () => {


    $("#deleteBtn").click(function() {

        $('#modalContainer').css('display', 'none');

        var id = $('#deleteBtn').attr('data-row-id');

            $.ajax({
                url: `https://jsonplaceholder.typicode.com/posts/${id}`,
                type: "DELETE",
                success: function(){
                    $(`[data-post-id="${id}"]`).remove();

                    console.log('carré')
                    // $(postElement).remove();
                }
            });
        return false;
        });




    $.get("https://jsonplaceholder.typicode.com/posts", function (dataJson) {
        allPosts = dataJson;

        console.log(allPosts);

        const postContent = $("#tableContent");


        allPosts.forEach((ePost) => {


            let postElement = $('<tr></tr>');
            postElement.attr("data-post-id", ePost.id);

            let titleElement = $('<td></td>');
            titleElement.html(ePost.title);

            let contenuElement = $('<td></td>');
            contenuElement.html(ePost.body);

            let tdBtn = $('<td></td>');
            let deleteModal = $('<button>').attr({
                id: 'deleteButton',
                class: 'button1'
            }).text("Supprimer");

            tdBtn.append(deleteModal);

            postElement
                .append(titleElement)
                .append(contenuElement)
                .append(tdBtn);

            postContent.append(postElement);


            $(deleteModal).click(function () {

                $('#modalContainer').css('display', 'flex');

                $('#cancelBtn').click(function () {

                $('#modalContainer').css('display', 'none');
                })

                $('#deleteBtn').attr('data-row-id', ePost.id);

    })

        });


    });

}

