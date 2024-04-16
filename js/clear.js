// document.addEventListener('DOMContentLoaded', function() {

//     let form = document.getElementById('addblog');
//     form.addEventListener('submit', function popUp(event){

//         event.preventDefault();

//         if (window.confirm("Are you sure you want to clear everything?")) {
//             document.getElementById('mytitle').value = "";

//             document.getElementById('mytext').value = '';
//         }
//     });

// });

document.addEventListener('DOMContentLoaded', function() {

    let clear = document.getElementById('CLEARBTN');
    clear.addEventListener('click', function popUp(event){

        event.preventDefault();

        // window.confirm("Are you sure you want to clear everything?");

        if (window.confirm("Are you sure you want to clear everything?")) {
            document.getElementById('mytitle').value = "";
            document.getElementById('mytext').value = '';
        }
    });

    // let post = document.getElementById('post');
    // post.addEventListener('input', function postBlog(event) {

    //     event.preventDefault();
        
    //     if (window.confirm("Are you sure you want to post?")) {
    //         console.log('ok');
    //     }
    // });

});

