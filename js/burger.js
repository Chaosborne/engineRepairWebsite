let burgerBtn = document.querySelector('.burger-btn');
let mobMenu = document.querySelector('.header__menu-list--burger');

burgerBtn.addEventListener('click', () => {
  mobMenu.classList.toggle('header__menu-list--burger-shown');
});
