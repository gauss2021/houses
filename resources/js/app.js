import './bootstrap';

import.meta.glob([
    './../images/**'
]);

// import 'select2/dist/css/select2.min.css';
import Swiper from 'swiper';
import { Navigation,} from 'swiper/modules';
// import Swiper and modules styles
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';
import Toastify from 'toastify-js';
import "toastify-js/src/toastify.css";

window.Toastify = Toastify;











// Testimoniaux carousel 
document.addEventListener("DOMContentLoaded", function () {

    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        modules: [Navigation],
    });

    window.Toastify = Toastify;

    const items = document.querySelectorAll('.carousel-item');
    let currentItem = 0;
    const totalItems = items.length;
    let autoScrollInterval;
  
    // Fonction pour aller à l'élément suivant
    function goToNextItem() {
        items[currentItem]?.classList.add('translate-x-full');
        currentItem = (currentItem + 1) % totalItems;
        items[currentItem]?.classList.remove('translate-x-full');
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
    document.getElementById('next')?.addEventListener('click', () => {
        goToNextItem();
        resetAutoScroll(); // Réinitialise le compte à rebours
    });
  
    document.getElementById('prev')?.addEventListener('click', () => {
        goToPrevItem();
        resetAutoScroll(); // Réinitialise le compte à rebours
    });
  
    // Arrête le défilement en survolant et redémarre en quittant le survol
    document.getElementById('carousel')?.addEventListener('mouseenter', stopAutoScroll);
    document.getElementById('carousel')?.addEventListener('mouseleave', resetAutoScroll);
  
    // Défilement automatique au démarrage
    resetAutoScroll();
  
    // ---------------------------------------------------------
    
    const track = document.getElementById("carouselTrack");
    const indicators = document.querySelectorAll("[data-slide]");
    let currentIndex = 0;
    let autoSlideInterval;
    
    // Fonction pour afficher un slide donné et gérer les indicateurs actifs
    function goToSlide(index) {
        const offset = -index * 33.33; 
        // Ajustement de 33.33% pour chaque slide de trois témoignages

        if(track){
            track.style.transform = `translateX(${offset}%)`;
        }

        if(indicators){
            indicators.forEach((indicator, i) => {
                indicator.classList.toggle("bg-amber-500", i === index);
                indicator.classList.toggle("bg-gray-300", i !== index);
            });
        }
        
        
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


    // Logique du carousel mobile 
    

    // Logique du faq
    
    for(let i=0;i<=5;i++){
    
        const element =document.getElementById('faq-item-'+i);
        
        const paragraphe= document.getElementById('faq-paragraphe-'+i);
        
        if(element && paragraphe){
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
        
        
        
    }
      
      
        // Script pour mettre à jour les valeurs min et max du prix affichées
    const minRange = document.getElementById('prix-min');
    const maxRange = document.getElementById('prix-max');
    const minPrice = document.getElementById('min-price');
    const maxPrice = document.getElementById('max-price');
    
    minRange?.addEventListener('input', () => {
        console.log("min");
        minPrice.textContent = `${minRange.value} FCFA`;
    });
    maxRange?.addEventListener('input', () => {
        console.log("max");
        maxPrice.textContent = `${maxRange.value} FCFA`;
    });
      

    
    // Logique de la page house

    //Selection du grid vertical

    const vertical= document.getElementById('layoult-vertical');

    if(vertical){

        vertical.addEventListener('click',()=>{

            console.log("----------VERTICAL-------");

            document.getElementById('layoult-horizontal')?.classList.remove('text-amber-500');
        
            vertical.classList.add('text-amber-500');

            document.getElementById('final-container-houses')?.classList.add('flex-col');

            let items= document.getElementsByClassName('items-house');

            if(items.length >0){
                for (let index = 0; index < items.length; index++) {
                    const element = items[index];

                    element.classList.add("flex", "bg-white", "rounded-xl", "gap-6");

                    element.style.width="100%";

                    console.log("les enfants de chaque element----",element.children);

                    const children=element.children;

                    // console.log('le premier fils',children[0]);

                    // children[0].style.width="420px";

                    children[0].children[0].classList.remove('rounded-xl');
                    
                    children[0].children[0].classList.add('rounded-l-xl');

                    
                    children[1].classList.add("flex","flex-col","justify-center");




                    
                }
            }
        })
    }

    //Selection du grid horizental

    const horizontal= document.getElementById('layoult-horizontal');

    if(horizontal){

        horizontal.addEventListener('click',()=>{

            console.log("----------Horizental-------");

            document.getElementById('layoult-vertical')?.classList.remove('text-amber-500');
        
            horizontal.classList.add('text-amber-500');

            document.getElementById('final-container-houses')?.classList.remove('flex-col');

            let items= document.getElementsByClassName('items-house');


            if(items.length >0){
                for (let index = 0; index < items.length; index++) {
                    const element = items[index];

                    element.classList.remove("flex", "bg-white", "rounded-xl", "gap-6");

                    element.style.width='';

                    console.log("les enfants de chaque element----",element.children);

                    const children=element.children;



                    console.log('le premier fils',children[0]);

                    // children[0].style.width="380px";

                    children[0].children[0].classList.remove('rounded_l-xl');
                    
                    children[0].children[0].classList.add('rounded-xl');

                    
                    children[1].classList.remove("flex","flex-col","justify-center");

                    
                }
            }

            
        })
    }


    // Mobile Icon de la partie cliente

    const mobileMenuButton= document.getElementById("mobile-menu-button");
    
    if(mobileMenuButton){
        mobileMenuButton.addEventListener('click',()=>{

            const collapseMenu= document.getElementById('mobile-menu');

            collapseMenu.classList.toggle('hidden');

            console.log("Les classLists--- ",collapseMenu);

            if(collapseMenu.classList.contains('hidden')){
                console.log('La croix');

                document.getElementById('menu-close').classList.remove("hidden");

                document.getElementById('menu-close').classList.add("block");


                document.getElementById("menu-open").classList.remove('block')

                document.getElementById("menu-open").classList.add('hidden');
            }else{
                console.log('Le menu');

                document.getElementById('menu-close').classList.add("hidden");


                document.getElementById("menu-open").classList.remove('hidden')

                document.getElementById("menu-open").classList.add('block');
            }
            
        });
    }

    // document.querySelectorAll('button').forEach(button => {
    //     button.addEventListener('click', () => {
    //         alert("Merci pour votre abonnement !");
    //     });
    // });

        

    // console.log('le suiper',swiper);

    // Gerer l'oeil sur mes inputs de type password

    const show= document.getElementById('show');

    if(show){

        show.addEventListener('click',()=>{
            console.log('Le click sur loeil');

            const password= document.querySelector("input[name='password']");

            show.classList.toggle('desactive');

            if(show.classList.contains('desactive')){

                if(password){
                    password.type='text';
                    show.classList.remove('bx-show');
                    show.classList.add('bx-hide');
                }
            }else{

                if(password){
                    password.type='password';
                    show.classList.remove('bx-hide');
                    show.classList.add('bx-show');
                }
            }

            
        })
    }

    const showConfirmation= document.getElementById('show_confirmation');

    if(showConfirmation){

        showConfirmation.addEventListener('click',()=>{

            const passwordConfirmation= document.querySelector("input[name='password_confirmation']");

            showConfirmation.classList.toggle('desactive');

            if(showConfirmation.classList.contains('desactive')){

                if(passwordConfirmation){
                    passwordConfirmation.type='text';
                    showConfirmation.classList.remove('bx-show');
                    showConfirmation.classList.add('bx-hide');
                }
            }else{

                if(passwordConfirmation){
                    passwordConfirmation.type='password';
                    showConfirmation.classList.remove('bx-hide');
                    showConfirmation.classList.add('bx-show');
                }
            }

            
        })
    }

    // Gerer le sous menu absolute qui contient les liens profil et deconnexion du current user

    const userMenuButton= document.getElementById('user-menu-button');

    if(userMenuButton){

        userMenuButton.addEventListener('click',()=>{
           const absoluteSubMenu = document.getElementById('absolute-submenu');

           if(absoluteSubMenu){
                absoluteSubMenu.classList.toggle('hidden');
           }
        })
    }


    // MOBILE ICON DE LA PARTIE DASHBOARD


    const dashboardMenu= document.getElementById('dashbord-menu');
    const  dashboardCroix= document.getElementById('dashboard-croix');

    if(dashboardMenu){
        dashboardMenu.addEventListener('click',()=>{

            console.log('----------On a cliqué sur le menu------------');

            const sideBar= document.getElementById("sidebar-mobile");

            sideBar.classList.toggle('-translate-x-full');

            sideBar.classList.toggle('translate-x-0');



            const mainContent= document.getElementById('main-content');
            if(mainContent){
                mainContent.classList.toggle('overlay');
            }


        })
    }

    if(dashboardCroix){
        dashboardCroix.addEventListener('click',()=>{

            console.log('----------On a cliqué sur le menu------------');

            const sideBar= document.getElementById("sidebar-mobile");

            sideBar.classList.toggle('-translate-x-full');

            sideBar.classList.toggle('translate-x-0');



            const mainContent= document.getElementById('main-content');
            if(mainContent){
                mainContent.classList.toggle('overlay');
            }
            


        })
    }

    // Configuration des messages d'erreur

    // Toastify({
    //     text: "Votre maison a bien été ajoutée",
    //     duration: 3000,
    //     className: "success",
    //     // destination: "https://github.com/apvarun/toastify-js",
    //     // newWindow: true,
    //     // close: true,
    //     gravity: "top", // `top` or `bottom`
    //     position: "right", // `left`, `center` or `right`
    //     stopOnFocus: true, // Prevents dismissing of toast on hover
    //     style: {
    //       background: "linear-gradient(to right, #00b09b, #96c93d)",
    //     },
    //     // onClick: function(){} // Callback after click
    // }).showToast();

});
  
  
      
  
  
  
  
  
  
  
  
  
  