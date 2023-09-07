const menu =  document.querySelector('.menu');
const btn = document.querySelector('.menu-toggle');

btn.addEventListener('click', () => {
    menu.classList.toggle('active')
})