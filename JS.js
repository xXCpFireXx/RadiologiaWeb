


ScrollReveal().reveal('.title', {
    delay: 300,
    duration: 350,
    easing: 'ease-in'
});

ScrollReveal().reveal('section', {
    delay: 375,
    duration: 400,
    reset: true,
    easing: 'ease-in'
});

ScrollReveal().reveal('.valores', {
    delay: 375,
    duration: 450,
    reset: true,
    easing: 'ease-in'
});

ScrollReveal().reveal('.politicas-img', {
    delay: 475,
    duration: 450,    
    easing: 'ease-out',
    origin: 'left',
    distance: '-500px',
    reset: true
});

ScrollReveal().reveal('.politicas', {
    delay: 375,
    duration: 450,
    reset: true,
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
    reset: true,
    easing: 'ease-out'
});


ScrollReveal().reveal('.btn-portal', {
    delay: 375,
    duration: 550,
    reset: true,
    easing: 'ease-in'
});

ScrollReveal().reveal('.formulario', {
    delay: 275,
    duration: 450,
    reset: true,
    easing: 'ease-in'
});

ScrollReveal().reveal('.map-t', {
    delay: 375,
    duration: 550,
    reset: true,
    easing: 'ease-in'
});

function formCR() {
    
    var status = document.getElementById("mot"); 


    if (status.value == "CR") {
        document.getElementById("form2").style.display = "block";
    } else {
        document.getElementById("form2").style.display = "none";
    }
}