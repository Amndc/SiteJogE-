const navSlide = () => {
    const burger = document.querySelector('.burger');
    const nav = document.querySelector('.nav-links');
    const navLinks = document.querySelectorAll('.nav-links li');
      
    burger.addEventListener('click', () => {
        // Toggle nav
        nav.classList.toggle('nav-active');

    //animate  links
    navLinks.forEach((link, index) => { 

        if (link.style.animation) {
            link.style.animation = '';
        } else {
            link.style.animation = `navLinkFade 0.5s ease forwards ${index / 7 + 0.5}s`;
    }
      
     });

     //burger animation
     burger.classList.toggle('toggle');
 });

} 
navSlide();

const button = document.querySelectorAll('a');

button.forEach(btn => {
    btn.addEventListener('click', function(e) {

        let x = e.clientX - e.target.offsetLeft;
        let y = e.clientY - e.target.offsetTop;

        let ripples = document.createElement('span');
        ripples.style.left = x + 'px';
        ripples.style.top = y + 'px';
        this.appendChild(ripples);

        setTimeout(() => {
            ripples.remove()
        },1000);

    });
});







