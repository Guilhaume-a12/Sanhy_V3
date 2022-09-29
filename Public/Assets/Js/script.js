
const load = document.querySelector('.loader');
const myBody = document.querySelector('body');


window.addEventListener('load', () => {
  load.classList.add('fondu-out');
  myBody.classList.remove('noScroll');
})
