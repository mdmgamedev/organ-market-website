let isHamburgerMenuToggled = false;

// Toggles the hamburger menu by changing its display property
function toggleHamburgerMenu() {
    let hamburgerMenu = document.getElementById('hamburger-menu');
    if(!isHamburgerMenuToggled) {
        hamburgerMenu.style = "display: block;";
        isHamburgerMenuToggled = true;
    } else {
        hamburgerMenu.style = "display: none;";
        isHamburgerMenuToggled = false;
    }



}