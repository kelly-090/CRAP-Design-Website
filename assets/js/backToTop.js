const backToTopButton = document.getElementById("toTopBtn");

window.onscroll = function() {
    if (document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) {
        backToTopButton.style.display = "block";
    } //else {
    //     backToTopButton.style.display = "none";
    // }
};

backToTopButton.addEventListener('click', function() {
    window.scrollTo({
      top: 0,
      behavior: 'smooth'
    });
});