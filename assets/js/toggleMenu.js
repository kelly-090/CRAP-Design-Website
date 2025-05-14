function toggleMenu() {
    var x = document.getElementsByClassName("toggleMenu")[0];
    if (x && x.style.display === "flex") {
      x.style.display = "none";
    } else {
      x.style.display = "flex";
    }
  }
  
