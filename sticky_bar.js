window.onscroll = function() {this.sticky_bar()};

var navbar = document.getElementById("navbar");

var sticky = navbar.offsetTop;

function sticky_bar() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}