'use strict';

let modalWindow = document.querySelector('.modal-window');
let overlay = document.querySelector('.overlay');
let closeModalBtn = document.querySelector('.close-modal');
let showModalBtns = document.querySelectorAll('.show-modal-btn');

let openModal = () => {
  modalWindow.classList.remove('hidden');
  overlay.classList.remove('hidden');
};

let closeModal = () => {
  modalWindow.classList.add('hidden');
  overlay.classList.add('hidden');
};

for (let i = 0; i < showModalBtns.length; i++) {
  showModalBtns[i].addEventListener('click', openModal);
}

closeModalBtn.addEventListener('click', closeModal);
overlay.addEventListener('click', closeModal);

document.addEventListener('keydown', e => {
  if (e.key === 'Escape' && !modalWindow.classList.contains('hidden')) {
    closeModal();
  }
});
