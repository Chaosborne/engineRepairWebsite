let burgerBtn = document.querySelector('.burger-btn');
let mobMenu = document.querySelector('.header__menu-list--burger');
let burgerClosers = document.querySelectorAll('.burger-closer');

burgerBtn.addEventListener('click', () => {
  mobMenu.classList.toggle('header__menu-list--burger-shown');
});

for (let i = 0; i < burgerClosers.length; i++) {
  burgerClosers[i].addEventListener('click', () => {
    mobMenu.classList.toggle('header__menu-list--burger-shown');
  });
}
