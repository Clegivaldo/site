/* const carousel = document.querySelector ('.carousel');
const images = carousel.querySelectorAll('img');
let currentIndex = 0;

setInterval(() => {
  const previousIndex = currentIndex;
  currentIndex = (currentIndex + 1) % images.length;

  images[previousIndex].classList.remove('active');
  // images[currentIndex].classList.add('active');
  images[previousIndex].classList.add('previous');
  
  setTimeout(() => {
    images[previousIndex].classList.remove('previous');
  }, 500);
}, 3000); */

//------------------------------------

const carousel = document.querySelector('.carousel');
const images = carousel.querySelectorAll('a img');
let currentIndex = 0;

setInterval(() => {
  const previousIndex = currentIndex;
  currentIndex = (currentIndex + 1) % images.length;

  images[previousIndex].classList.remove('active');
  images[currentIndex].classList.add('active');

  setTimeout(() => {
    images[previousIndex].classList.remove('previous');
  }, 4000);

  images[currentIndex].classList.add('previous');
}, 2000);

/// ------------------------------------------------------------------///

/* const images = document.querySelectorAll('.carousel img');
const carousel = document.querySelector('.carousel');

let currentImageIndex = 0;

setInterval(() => {
  images[currentImageIndex].classList.remove('active');

  currentImageIndex++;
  if (currentImageIndex >= images.length) {
    currentImageIndex = 0;
  }

  images[currentImageIndex].classList.add('active');
}, 2000); */

// ----------------------------------------------------------------

// $(document).ready(function() {
//   $('.sessao4 h3').click(function() {
//     $(this).siblings('div').slideToggle();
//   });
// });

// ----------------------------------

// document.addEventListener('DOMContentLoaded', function() {
//   const titles = document.querySelectorAll('.sessao4 h3');

//   titles.forEach(function(title) {
//     title.addEventListener('click', function() {
//       const content = this.parentElement.nextElementSibling;
//       const paragraph = content.querySelector('p');
//       paragraph.style.display = paragraph.style.display === 'none' ? 'block' : 'none';
//     });
//   });
// });

// ----------------------------------

// document.addEventListener('DOMContentLoaded', function() {
//   const titles = document.querySelectorAll('.sessao4 h3');

//   titles.forEach(function(title) {
//     title.addEventListener('click', function() {
//       const content = this.nextElementSibling;
//       content.style.display = content.style.display === 'none' ? 'block' : 'none';
//     });
//   });
// });

// --------------------------

