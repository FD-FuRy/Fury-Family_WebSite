function openMenuMobile() {
    document.querySelector('.headerGlobalBurger').classList.add('open');
    document.querySelector('.overlay-mobileMenu').classList.add('open');
    document.querySelector('.icone-MenuBurger').classList.add('close');
}

function closeMenuMobile() {
    document.querySelector('.headerGlobalBurger').classList.remove('open');
    document.querySelector('.overlay-mobileMenu').classList.remove('open');
    document.querySelector('.icone-MenuBurger').classList.remove('close');
}