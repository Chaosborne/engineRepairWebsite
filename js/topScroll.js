'use strict';

let topScroller = document.getElementById('top-scroller');

window.addEventListener('scroll', () => {
  if (window.pageYOffset > 500) {
    topScroller.classList.remove('hidden');
  } else {
    topScroller.classList.add('hidden');
  }
});
