//--------- Barra de navegación de la versión mobile ---------------------
//los siguientes lineas de código permite que aperezca y desaparezca el menú hamburguesa de la version mobile de la página web.
const nav = document.querySelector("#nav");
const open = document.querySelector("#open");
const close = document.querySelector("#close");

open.addEventListener("click", () => {
    nav.classList.add("visible");
})

close.addEventListener("click", () => {
    nav.classList.remove("visible");
})

//----------------------------------------------------------------------------------------------------------------------------------------------
//¿Qué es ScrollReveal?
//ScrollReveal es una librería JavaScript para animar fácilmente elementos cuando entran/salen del viewport.
ScrollReveal().reveal('.title', {
    delay: 300,
    duration: 350,
    easing: 'ease-in'
});

ScrollReveal().reveal('section', {
    delay: 375,
    duration: 400,
    easing: 'ease-in'
});

ScrollReveal().reveal('.valores', {
    delay: 375,
    duration: 450,
    easing: 'ease-in'
});

ScrollReveal().reveal('.politicas-img', {
    delay: 475,
    duration: 450,    
    easing: 'ease-out',
    origin: 'left',
    distance: '-500px'
});

ScrollReveal().reveal('.politicas', {
    delay: 375,
    duration: 450,
    easing: 'ease-out'
});

ScrollReveal().reveal('.more', {
    delay: 375,
    duration: 550,
    reset: true,
    easing: 'ease-out'
});

ScrollReveal().reveal('iframe', {
    delay: 375,
    duration: 650,
    easing: 'ease-out'
});


ScrollReveal().reveal('.btn-portal', {
    delay: 375,
    duration: 550,
    easing: 'ease-in'
});

ScrollReveal().reveal('.formulario', {
    delay: 275,
    duration: 450,
    easing: 'ease-in'
});

ScrollReveal().reveal('.map-t', {
    delay: 375,
    duration: 550,
    easing: 'ease-in'
});

ScrollReveal().reveal('.container-carousel-out', {
    delay: 375,
    duration: 550,
    easing: 'ease-in'
});

ScrollReveal().reveal('.preparaciones h4', {
    delay: 375,
    duration: 550,
    easing: 'ease-in'
});

//----------------------------------------------------------------------------------------------------------------------------------------------
//Slider de cada servicio
//Las siguientes lineas de código, permiten el funcionamiento del slider que se presenta en cada página de los servicios.
const btnLeft = document.querySelector(".btn-left"),
      btnRight = document.querySelector(".btn-right"),
      slider = document.querySelector("#slider"),
      sliderSection = document.querySelectorAll(".slider-section");


btnLeft.addEventListener("click", e => moveToLeft())
btnRight.addEventListener("click", e => moveToRight())


let operacion = 0,
    counter = 0,
    widthImg = 100 / sliderSection.length;

function moveToRight() {
    if (counter >= sliderSection.length-1) {
        counter = 0;
        operacion = 0;
        slider.style.transform = `translate(-${operacion}%)`;
        return;
    } 
    counter++;
    operacion = operacion + widthImg;
    slider.style.transform = `translate(-${operacion}%)`;
    slider.style.transition = "all ease .6s"
}  

function moveToLeft() {
    counter--;
    if (counter < 0 ) {
        counter = sliderSection.length-1;
        operacion = widthImg * (sliderSection.length-1)
        slider.style.transform = `translate(-${operacion}%)`;
        return;
    } 
    operacion = operacion - widthImg;
    slider.style.transform = `translate(-${operacion}%)`;
    slider.style.transition = "all ease .6s"   
}   


    
