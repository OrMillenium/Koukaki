console.log("le JavaScript fonctionne correctement!")


/* Apparition titres */

function fadeInAnimation(entry) {
    const title = entry.target.querySelector('h2, h3');

    if (title && title.textContent) {
        entry.target.classList.add('fadeIn');

        title.innerHTML = title.textContent
            .split(' ')
            .map(word => `<span class="titleAnimation">${word}</span>`)
            .join('');

        const spans = title.querySelectorAll('.titleAnimation');

        const totalWords = spans.length;
        spans.forEach((span, index) => {
            const delay = index === 0 ? 100 : 200 * index; // 

            setTimeout(() => span.classList.add('visibility'), delay);
        });
    }
}

const sectionObserver = new IntersectionObserver((entries, observer) => {
    entries.forEach((entry) => {
        if (entry.isIntersecting) {
            fadeInAnimation(entry);
            observer.unobserve(entry.target);
        }
    });
}, { rootMargin: '-100px 0px -100px 0px' });

['.story', '#characters', '#place', '#studio', 'footer']
    .forEach(selector => 
        document.querySelectorAll(selector)
            .forEach(section => sectionObserver.observe(section))
    );

/*CARROUSSEL*/

const swiper = new Swiper(".swiper", {
    effect: "coverflow",
    grabcursor: true,
    centeredSlides: true,
    slidesPerView: "auto",
direction:'horizontal',

coverflowEffect: {
    rotate: 70,
    stretch: 0,
    depth: 50,
    modifier: 1,
    slideShadows: false,

},
loop:"true",
loopedSlides:2,
loopAdditionalSlides:1,
autoplay:{
   delay:1000,
   disableOnInteraction:false,

},

speed: 800,
});



/*Parallax nuages*/
    
// Fonction pour déplacer les nuages en fonction du défilement de la page
    function moveCloudsOnScroll() {
    const scrollY = window.scrollY;
    const bigCloud = document.getElementById('bigcloud');
    const littleCloud = document.getElementById('littlecloud');

    // Régle la vitesse de déplacement des nuages en fonction de vos préférences
    const bigCloudSpeed = 0.3;
    const littleCloudSpeed = 0.2;

    // Calcule les nouvelles positions des nuages en fonction du défilement
    const maxLeftPosition = -300; // Limite de déplacement à gauche
    const bigCloudX = -scrollY * bigCloudSpeed + 260;
    const littleCloudX = -scrollY * littleCloudSpeed;

    // Applique les nouvelles positions aux nuages
    bigCloud.style.transform = `translateX(${bigCloudX}px)`;
    littleCloud.style.transform = `translateX(${littleCloudX}px)`;
}

// Ajoute un écouteur d'événement de défilement pour appeler la fonction de déplacement des nuages
window.addEventListener('scroll', moveCloudsOnScroll);


/*Ouverture menu*/

     const toggle_btn = document.querySelector('.toggle_btn');
     const burger = document.querySelector('.MenuFull');

    toggle_btn.addEventListener('click', () => {
    burger.classList.toggle('nav_open');
    toggle_btn.classList.toggle('active');
       });

        
/*Fermeture menu sur click lien*/

    const menuLinks = document.querySelectorAll('.MenuFull ul li a');
            menuLinks.forEach(link => {
                link.addEventListener('click', () => {
                    burger.classList.remove('nav_open');
                    toggle_btn.classList.remove('active');
                })});
        
/*logo parallax*/

let previousScroll = 0;

function moveLogoOnScroll() {
    const scrollY = window.scrollY;
    const logo = document.querySelector('#logo.active');

    const logoSpeed = 3;
    const maxDownPosition = -100;
    const logoY = Math.min(scrollY * logoSpeed, maxDownPosition) + 100;
    const parallaxEffect = scrollY * 0.3;

    if (scrollY > previousScroll) {
        if (scrollY > maxDownPosition) {
            logo.classList.add('parallax');
            logo.style.transform = `translateY(${logoY}px) translateY(${parallaxEffect}px)`;
        }
    } else {
        if (scrollY > maxDownPosition) {
            logo.classList.add('parallax');
            logo.style.transform = `translateY(0) translateY(${parallaxEffect}px)`;
        } else {
            logo.classList.remove('parallax');
            logo.style.transform = `translateY(0) translateY(${parallaxEffect}px)`;
        }
    }

    previousScroll = scrollY;
}

window.addEventListener('scroll', moveLogoOnScroll);


