let burgerBtn = document.querySelector('.burger-btn');
let mobMenu = document.querySelector('.header__menu-list--burger');
let burgerOverlay = document.querySelector('.burger-overlay');
let burgerClosers = document.querySelectorAll('.burger-closer');

let showToggler = () => {
  mobMenu.classList.toggle('show-burger-menu');
  burgerOverlay.classList.toggle('show-burger-overlay');
};

burgerBtn.addEventListener('click', showToggler);

for (let i = 0; i < burgerClosers.length; i++) {
  burgerClosers[i].addEventListener('click', showToggler);
}

burgerOverlay.addEventListener('click', showToggler);
