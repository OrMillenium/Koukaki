// Fonction pour déplacer les nuages en fonction du défilement de la page
function moveCloudsOnScroll() {
    const scrollY = window.scrollY;
    const bigCloud = document.getElementById('bigcloud');
    const littleCloud = document.getElementById('littlecloud');

    // Réglez la vitesse de déplacement des nuages en fonction de vos préférences
    const bigCloudSpeed = 0.5;
    const littleCloudSpeed = 0.3;

    // Calculez les nouvelles positions des nuages en fonction du défilement
    const bigCloudX = -scrollY * bigCloudSpeed + 260;
    const littleCloudX = -scrollY * littleCloudSpeed;

    // Appliquez les nouvelles positions aux nuages
    bigCloud.style.transform = `translateX(${bigCloudX}px)`;
    littleCloud.style.transform = `translateX(${littleCloudX}px)`;
}

// Ajoutez un écouteur d'événement de défilement pour appeler la fonction de déplacement des nuages
window.addEventListener('scroll', moveCloudsOnScroll);