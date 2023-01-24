var element = document.getElementById('toggleBtn');
var Bod = document.querySelector('.navbar');
var home = document.querySelector('.home');
var skill = document.querySelector('.skill');
var project = document.querySelector('.project');
var freelancer = document.querySelector('.freelancer');
var port = document.querySelector('.polofilo');
var contact = document.querySelector('.contact');

// loader
var loader = document.getElementById('preloader');

// change theme
element.addEventListener('click', () => {
    Bod.classList.toggle('change_night');
    home.classList.toggle('change_night');
    skill.classList.toggle('change_night');
    project.classList.toggle('change_night');
    freelancer.classList.toggle('change_night');
    port.classList.toggle('change_night');
    contact.classList.toggle('change_night')
})

//loader

window.addEventListener('load', function () {
    loader.style.display = 'none';
    Bod.style.visibility = 'visible';
});


