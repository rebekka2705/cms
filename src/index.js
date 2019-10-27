import "./styles/styles.scss"



var burgerMenu = document.querySelector(".toggleNav");
burgerMenu.addEventListener("click", mobileMenu);

function mobileMenu(){
    var elem = document.querySelector("nav ul");
    elem.classList.toggle("open");
    console.log("I really do");
}