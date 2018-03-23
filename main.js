$(document).ready(function () {

    //  showing between all posts and make posts
    $('#nav-tab a').on('click', function (e) {
        e.preventDefault()
        $(this).tab('show')
    });

});
