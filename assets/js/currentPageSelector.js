// Current Page selector

$(document).ready(function() {
    var currentPath = window.location.pathname.split("/").pop();
        $('nav > div > a').each(function() {
        var href = $(this).attr('href');
        if (href === currentPath) {
            $(this).addClass('active');
        }
    });
});


