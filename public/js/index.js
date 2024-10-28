const items = document.querySelectorAll('.carousel-item');
let currentItem = 0;
const totalItems = items.length;

document.getElementById('next').addEventListener('click', () => {
  items[currentItem].classList.add('translate-x-full');
  currentItem = (currentItem + 1) % totalItems;
  items[currentItem].classList.remove('translate-x-full');
});

document.getElementById('prev').addEventListener('click', () => {
  items[currentItem].classList.add('translate-x-full');
  currentItem = (currentItem - 1 + totalItems) % totalItems;
  items[currentItem].classList.remove('translate-x-full');
});