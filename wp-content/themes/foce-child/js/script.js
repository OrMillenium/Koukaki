console.log("le JavaScript fonctionne correctement!")

// Fonction de déclenchement de l'animation de fade-in avec le paramètre entry
function fadeInAnimation(entry) {
    // Animation apparition des titres
    // Sélection de l'élément de titre (h2 ou h3) dans l'élément cible
    const title = entry.target.querySelector('h2, h3');

    // Vérification si le titre existe et s'il a du contenu
    if (title && title.textContent) {
        // Division du contenu du titre en mots
        const words = title.textContent.split(' ');

        // Effacement du contenu du titre
        title.textContent = '';

        // Création d'éléments 'span' pour chaque mot du titre et ajout de la classe 'titleAnimation'
        words.forEach((word) => {
            const span = document.createElement('span');
            span.classList.add('titleAnimation');
            span.textContent = word;
            title.appendChild(span);
        });

        // Sélection de tous les éléments 'span' avec la classe 'titleAnimation' à l'intérieur du titre
        const spans = title.querySelectorAll('.titleAnimation');

        // Ajout progressif de la classe 'visibility' à chaque élément 'span' avec un délai
        spans.forEach((span, index) => {
            const delay = index === 0 ? 400 : index * 600;

            setTimeout(() => {
                span.classList.add('visibility');
            }, delay);
        });
    }
}

// Création de l'observateur d'intersection
const sectionObserver = new IntersectionObserver((entries, observer) => {
    entries.forEach((entry) => {
        if (entry.isIntersecting) {
            fadeInAnimation(entry);
            observer.unobserve(entry.target);
        }
    });
}, { rootMargin: '-100px 0px -100px 0px' });

// Sélection des sections à animer
const sections = document.querySelectorAll('.story, #characters, #place, #studio, footer');

// Ajout de l'observateur d'intersection à chaque section
sections.forEach((section) => {
    sectionObserver.observe(section);
});


///////////////////////////////////////////////////////////////////////////////////////////////Bannière
// Fonction de déclenchement de l'animation de fade-in au chargement de la page
window.addEventListener('load', function() {
    // Sélectionnez l'élément img du logo
    const logoImg = document.querySelector('.banner img');

    // Ajoutez la classe 'fade-in' pour déclencher l'animation
    logoImg.classList.add('fade-in');
});





///////////////////////////////////////////////CARROUSSEL//////////////////////////////////////////////Carroussel



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
    //autoplay:{
        //delay:1000,
        //disableOniteraction:false,
        
    //},

});


/////////////////////////////////NUAGES///////////////////////////////////////////////////////////////////////
// Fonction pour déplacer les nuages en fonction du défilement de la page
function moveCloudsOnScroll() {
    const scrollY = window.scrollY;
    const bigCloud = document.getElementById('bigcloud');
    const littleCloud = document.getElementById('littlecloud');

    // Réglez la vitesse de déplacement des nuages en fonction de vos préférences
    const bigCloudSpeed = 0.3;
    const littleCloudSpeed = 0.2;



    // Calculez les nouvelles positions des nuages en fonction du défilement
    const maxLeftPosition = -300; // Limite de déplacement à gauche
    const bigCloudX = -scrollY * bigCloudSpeed + 260;
    const littleCloudX = -scrollY * littleCloudSpeed;

    // Appliquez les nouvelles positions aux nuages
    bigCloud.style.transform = `translateX(${bigCloudX}px)`;
    littleCloud.style.transform = `translateX(${littleCloudX}px)`;
}

// Ajoutez un écouteur d'événement de défilement pour appeler la fonction de déplacement des nuages
window.addEventListener('scroll', moveCloudsOnScroll);

/////////////////////////////////////////////MENU/////////////////////////////////////
const toggle_btn = document.querySelector('.toggle_btn');
 const burger = document.querySelector('.MenuFull');
        
        toggle_btn.addEventListener('click', () => {
            burger.classList.toggle('nav_open');
            toggle_btn.classList.toggle('active');
        });



        
            // Ajoute un événement de clic à chaque lien dans le menu
            const menuLinks = document.querySelectorAll('.MenuFull ul li a');
            menuLinks.forEach(link => {
                link.addEventListener('click', () => {
                    burger.classList.remove('nav_open');
                    toggle_btn.classList.remove('active');
                })});
        