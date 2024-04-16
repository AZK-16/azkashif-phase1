document.addEventListener('DOMContentLoaded', function() {

    let mytitle = document.getElementById('mytitle');
    let mytext = document.getElementById('mytext');

    let postbtn = document.getElementById('POSTBTN');
    postbtn.addEventListener('click', function postBlog(event) {
        
        let originaltitle = mytitle.value;
        let originaltext = mytext.value;

        if (window.confirm("Are you sure you want to post?")) {

            if (document.getElementById('mytitle').value == "" || document.getElementById('mytext').value == '') {
                event.preventDefault();

                mytitle.classList.add('highlightblanks');
                mytext.classList.add('highlightblanks');

                mytitle.value = "Please enter a title";
                mytext.value = "Please enter a message";
            }
        }

        else {
            mytitle.value = originaltitle;
            mytext.value = originaltext;
        }
    });

});