//Select element function
const selectElement = (element)=>{
    return document.querySelector(element);
}

const menuToggle = selectElement('.menu-toggle');
const body = selectElement('body');

menuToggle.addEventListener('click',()=>{
    body.classList.toggle('open');
});

//Scroll revel

window.sr = ScrollReveal();

sr.reveal('.animate-left',{
    origin: 'left',
    duration: 1000,
    distance: '25rem',
    delay: 300
})
sr.reveal('.animate-right',{
    origin: 'right',
    duration: 1000,
    distance: '25rem',
    delay: 600
})
sr.reveal('.animate-top',{
    origin: 'top',
    duration: 1000,
    distance: '25rem',
    delay: 600
})
sr.reveal('.animate-bottom',{
    origin: 'bottom',
    duration: 1000,
    distance: '25rem',
    delay: 600
})