
// Testimoniaux carousel 
document.addEventListener("DOMContentLoaded", function () {

  const items = document.querySelectorAll('.carousel-item');
let currentItem = 0;
const totalItems = items.length;
let autoScrollInterval;

// Fonction pour aller à l'élément suivant
function goToNextItem() {
  items[currentItem].classList.add('translate-x-full');
  currentItem = (currentItem + 1) % totalItems;
  items[currentItem].classList.remove('translate-x-full');
}

// Fonction pour aller à l'élément précédent
function goToPrevItem() {
  items[currentItem].classList.add('translate-x-full');
  currentItem = (currentItem - 1 + totalItems) % totalItems;
  items[currentItem].classList.remove('translate-x-full');
}

// Redémarre le défilement automatique
function resetAutoScroll() {
  clearInterval(autoScrollInterval); // Arrête l'intervalle actuel
  autoScrollInterval = setInterval(goToNextItem, 5000); // Redémarre l'intervalle
}

// Arrête le défilement automatique
function stopAutoScroll() {
  clearInterval(autoScrollInterval);
}

// Écouteurs pour les boutons
document.getElementById('next').addEventListener('click', () => {
  goToNextItem();
  resetAutoScroll(); // Réinitialise le compte à rebours
});

document.getElementById('prev').addEventListener('click', () => {
  goToPrevItem();
  resetAutoScroll(); // Réinitialise le compte à rebours
});

// Arrête le défilement en survolant et redémarre en quittant le survol
document.getElementById('carousel').addEventListener('mouseenter', stopAutoScroll);
document.getElementById('carousel').addEventListener('mouseleave', resetAutoScroll);

// Défilement automatique au démarrage
resetAutoScroll();

// ---------------------------------------------------------

const track = document.getElementById("carouselTrack");
const indicators = document.querySelectorAll("[data-slide]");
let currentIndex = 0;
let autoSlideInterval;

// Fonction pour afficher un slide donné et gérer les indicateurs actifs
function goToSlide(index) {
    const offset = -index * 33.33; // Ajustement de 33.33% pour chaque slide de trois témoignages
    track.style.transform = `translateX(${offset}%)`;
    indicators.forEach((indicator, i) => {
        indicator.classList.toggle("bg-amber-500", i === index);
        indicator.classList.toggle("bg-gray-300", i !== index);
    });
}

// Fonction pour passer au slide suivant
function nextSlide() {
    currentIndex = (currentIndex + 1) % indicators.length;
    goToSlide(currentIndex);
}

// Fonction pour redémarrer l'intervalle de défilement automatique
function restartAutoSlide() {
    clearInterval(autoSlideInterval);
    autoSlideInterval = setInterval(nextSlide, 5000);
}

// Initialisation de l'intervalle de défilement automatique
autoSlideInterval = setInterval(nextSlide, 5000);

// Ajouter un écouteur sur chaque indicateur pour gérer le clic
indicators.forEach((indicator, i) => {
    indicator.addEventListener("click", () => {
        currentIndex = i;
        goToSlide(currentIndex);
        restartAutoSlide(); // Redémarrer le compte à rebours
    });
});

// Afficher le premier slide au chargement avec l'indicateur en bg-amber-500
goToSlide(currentIndex);
});


// Logique du faq

for(let i=0;i<=5;i++){

 const element =document.getElementById('faq-item-'+i);

 const paragraphe= document.getElementById('faq-paragraphe-'+i);

  element.addEventListener('click',()=>{

    if(element.classList.contains("bx-chevron-up")){

      element.classList.remove('bx-chevron-up');

      element.classList.add('bx-chevron-down');

      paragraphe.classList.toggle('hidden');
    }else{

      element.classList.remove('bx-chevron-down');

      element.classList.add('bx-chevron-up');
      paragraphe.classList.toggle('hidden');

    }

    const id= element.id.charAt(element.id.length-1);
      console.log(id);

    for (let index = 0; index <=5; index++) {

      if(index !=id){
        const paragraphe= document.getElementById('faq-paragraphe-'+index);

        paragraphe.classList.add('hidden');
      }

      
    }
  });

}







