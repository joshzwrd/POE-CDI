window.onload = function() {
    initAllPost();
}

    $('#newPostSubmit').click(function() {
        $.ajax({
            type: "POST",
            url: '',
            data: {
                title : $('newPostContent').value,
                content : $('newPostContent').value
            },
            success: () => {
                initAllPost();
            }
        })
    })

function initAllPost() {
    $('#postContainer').html('');
    $.get('http://localhost:3000/api/posts'), function(dataJson){
        dataJson.forEach(e => {
            $('#postContainer').append(`<li>${e.title}<hr>${e.content}</li>`);
            
        });
    }
}