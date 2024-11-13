
<x-layoult>
  <section id="hero-section">
            
    <div class="relative w-full" id="carousel">
        <!-- Carousel container -->
        <div class="relative h-[60vh] sm:overflow-hidden sm:h-[480px] md:h-[550px]">
          <!-- Slides -->
          <div class="carousel-item duration-700 ease-in-out absolute inset-0 transition-all transform translate-x-0" style="background-image: url({{ Vite::asset('resources/images/banner-1.jpg') }}); background-repeat: no-repeat;background-size:cover;">
            <div class="w-full h-full flex justify-between md:justify-start gap-6 items-center px-16" style="background:#000000A6">
                <div class="w-[80%] sm:w-[70%] md:w-[60%]"> 
                    <h1 style="font-family: poppins;" class="text-white font-bold uppercase sm:text-2xl md:text-3xl">Trouvez votre prochain chez-vous facilement !</h1>
                    <p class="text-white mt-4 font-serif">Explorez une large sélection de maisons et d'appartements en location adaptés à tous les styles de vie. Commencez votre recherche aujourd'hui.</p>
                    <div class="mt-8">
                      <a style="font-family: poppins" href="#" class="relative font-bold rounded-lg bg-amber-500 px-4 py-2 text-white hover:bg-amber-300 text-sm sm:text-lg">
                        Rechercher des maisons
                      </a>
                    </div>
                </div>
                <div class="hidden md:block md:w-[30%] lg:w-[40%]">
                    {{-- <form action="" method="post">
                      <input type="text" placeholder="test">
                    </form> --}}
                </div>
            </div>
          </div>
          <div class="carousel-item duration-700 ease-in-out absolute inset-0 transition-all transform translate-x-full" style="background-image: url({{ Vite::asset('resources/images/banner-2.jpg') }});background-repeat: no-repeat;background-size: cover;">
            <div class="w-full h-full flex gap-6 items-center px-16" style="background:#000000A6">
              <div class="w-[80%] sm:w-[70%] md:w-[60%]"> 
                  <h1 style="font-family: poppins;" class="text-white font-bold uppercase sm:text-2xl md:text-3xl">Accès illimité pour seulement 5000 FCFA par mois !</h1>
                  <p class="text-white mt-4 font-serif">Profitez de 30 jours d'accès à notre plateforme pour trouver le logement idéal en toute simplicité.</p>
                  <div class="mt-8">
                    <a style="font-family: poppins" href="#" class="relative font-bold rounded-lg bg-amber-500 px-4 py-2 text-white hover:bg-amber-300 text-sm sm:text-lg">
                      S'abonner maintenant
                    </a>
                  </div>
              </div>
              <div class="hidden md:w-[30%] lg:w-[40%]">
                  {{-- <form action="" method="post">
                    <input type="text" placeholder="test">
                  </form> --}}
              </div>
            </div>
          </div>
          <div class="carousel-item duration-700 ease-in-out absolute inset-0 transition-all transform translate-x-full" style="background-image: url({{ Vite::asset('resources/images/banner-1.jpg') }});background-repeat: no-repeat;background-size: cover;">
            <div class="w-full h-full flex gap-6 items-center px-16" style="background:#000000A6">
              <div class="w-[80%] sm:w-[70%] md:w-[60%]"> 
                  <h1 style="font-family: poppins;" class="text-white font-bold uppercase sm:text-2xl md:text-3xl">Propriétaires : Louez rapidement votre bien !</h1>
                  <p class="text-white mt-4 font-serif">Augmentez la visibilité de votre propriété et trouvez des locataires fiables grâce à notre plateforme sécurisée.</p>
                  <div class="mt-8">
                    <a style="font-family: poppins" href="#" class="relative font-bold rounded-lg bg-amber-500 px-4 py-2 text-white hover:bg-amber-300 text-sm sm:text-lg">
                      Mettre votre maison en location
                    </a>
                  </div>
              </div>
              <div class="hidden md:w-[30%] lg:w-[40%]">
                  {{-- <form action="" method="post">
                    <input type="text" placeholder="test">
                  </form> --}}
              </div>
          </div>              
        </div>
      
        <!-- Previous/Next buttons -->
        <button id="prev" class="absolute bottom-64 left-6 mt-32 px-4 py-2 bg-gray-800 text-white rounded-full">
          &#10094;
        </button>
        <button id="next" class="absolute bottom-64 right-6 mt-32 px-4 py-2 bg-gray-800 text-white rounded-full">
          &#10095;
        </button>
    </div>
  
  </section>

  <section id="recentes-maisons" class="bg-[#EDF3FD] py-10 px-8 sm:py-20 sm:px-16">
    <h2 class="font-bold md:text-xl lg:text-2xl" style="font-family: poppins">Decouvrez les recentes maisons misent en location</h2>
    <p class="mt-3 font-serif">Toutes les maisons sont pres de chez vous</p>
    <div class="flex flex-wrap mt-6 sm:justify-between gap-y-10">
      <x-house :id='1'></x-house>
      <x-house :id='2'></x-house>
      <x-house :id='3'></x-house>
      <x-house :id='4'></x-house>
      <x-house :id='5'></x-house>
      <x-house :id='6'></x-house> 
    </div>
    <div class="flex mt-6 justify-center">
          <a href="#" class="underline font-medium">En voir plus</a>
    </div>
  </section>
  <section id="avantages-plateforme" class="py-10 px-8 sm:py-20 sm:px-16">
    <h2 class="font-bold text-xl sm:text-2xl text-center sm:text-left" style="font-family: poppins">Pourquoi choisir <span class="text-amber-500">NDAKO</span> ?</h2>
    <p class="mt-3 font-serif">Toutes les maisons sont pres de chez vous</p>

    <div class="flex justify-center sm:justify-start sm:gap-6 md:items-center mt-5">
        <div class="hidden sm:block sm:w-[40%] lg:w-[48%]">
          <img src="{{ Vite::asset('resources/images/girl-glasses.jpg') }}" alt="girl-glasses" srcset="" class="rounded-lg sm:h-[200px] sm:w-[300px] md:h-[300px] md:w-[400px] lg:w-[600px] lg:h-[400px]" >
        </div>
        <div class="w-[100%] sm:w-[60%] lg-w[48%]">
          <p class="font-serif text-center sm:text-justify" style="font-size: 18px">
            Notre plateforme vous propose un large choix de maisons et d'appartements en location pour tous les budgets et styles de vie. Grâce à une interface intuitive et des critères de recherche avancés, 
            vous pouvez facilement trouver le logement idéal en filtrant par localisation,
            prix, type de logement, et bien plus encore. Toutes les annonces et les utilisateurs sont vérifiés pour garantir la sécurité et la fiabilité. Pour une expérience complète, souscrivez à notre abonnement de 5000 FCFA pour 30 jours d’accès illimité aux recherches. Les propriétaires, quant à eux, peuvent mettre en avant leurs annonces pour maximiser leur visibilité et trouver rapidement des locataires. Avec notre assistance client et des alertes personnalisées, vous êtes accompagné à chaque étape jusqu’à trouver le logement parfait.
          </p>
          <div class="mt-4 text-center sm:text-left">
            <a href="#" class="relative font-bold rounded-sm bg-amber-500 px-4 py-2 text-white hover:bg-amber-300 text-sm sm:text-lg" style="font-family: poppins">
              Chercher maintenant
            </a>
          </div>
        </div>
    </div>

  </section>

  <section id="testimoniaux" class="bg-[#EDF3FD] py-10 px-8 sm:py-20 sm:px-16">
    <h2 class="text-center font-bold text-2xl" style="font-family: poppins">Témoignages clients</h2>

    <div id="testimonialCarousel" class="relative overflow-hidden mt-5">
        <!-- Témoignages (carousel items) -->
        <div id="carouselTrack" class="flex transition-transform duration-700 ease-in-out w-[300%]">
            <!-- Slide 1 -->
            <div class="flex w-full justify-around space-x-4">
                <div class="w-1/2 sm:w-1/3 p-4 bg-white rounded-lg shadow-md">
                    <p class="italic">"Simple, rapide et efficace ! J'ai trouvé mon appartement en seulement quelques jours grâce aux filtres de recherche précis."</p>
                    <small class="block mt-2 text-gray-500">— Jean-Paul, Brazzaville</small>
                </div>
                <div class="w-1/2 sm:w-1/3 p-4 bg-white rounded-lg shadow-md">
                    <p class="italic">"Enfin une solution fiable ! En tant que propriétaire, j'ai pu publier mon annonce en toute sécurité et j'ai rapidement trouvé un locataire sérieux."</p>
                    <small class="block mt-2 text-gray-500">— Fatoumata, Pointe-Noire</small>
                </div>
                <div class="w-1/2 sm:w-1/3 p-4 bg-white rounded-lg shadow-md hidden sm:block">
                    <p class="italic">"Une assistance client au top ! L'équipe m'a aidé pour chaque étape de mon inscription."</p>
                    <small class="block mt-2 text-gray-500">— Estelle, Dolisie</small>
                </div>
            </div>
            <!-- Slide 2 -->
            <div class="flex w-full justify-around space-x-4">
                <div class="w-1/2 sm:w-1/3 p-4 bg-white rounded-lg shadow-md">
                    <p class="italic">"Abonnement très rentable ! Pour 5000 FCFA, j'ai pu consulter toutes les offres de maisons sans aucune limite."</p>
                    <small class="block mt-2 text-gray-500">— François, Brazzaville</small>
                </div>
                <div class="w-1/2 sm:w-1/3 p-4 bg-white rounded-lg shadow-md">
                    <p class="italic">"Ma maison, rapidement louée ! J'ai trouvé un locataire en quelques jours seulement."</p>
                    <small class="block mt-2 text-gray-500">— Armand, Owando</small>
                </div>
                <div class="w-1/2 sm:w-1/3 p-4 bg-white rounded-lg shadow-md hidden sm:block">
                    <p class="italic">"Un service qui inspire confiance ! Toutes les annonces sont bien vérifiées."</p>
                    <small class="block mt-2 text-gray-500">— Josiane, Nkayi</small>
                </div>
            </div>
            <!-- Slide 3 -->
            <div class="flex w-full justify-around space-x-4">
                <div class="w-1/2 sm:w-1/3 p-4 bg-white rounded-lg shadow-md">
                    <p class="italic">"La meilleure plateforme de location ! J'ai trouvé une maison en quelques clics."</p>
                    <small class="block mt-2 text-gray-500">— Alain, Brazzaville</small>
                </div>
                <div class="w-1/2 sm:w-1/3 p-4 bg-white rounded-lg shadow-md">
                    <p class="italic">"Très pratique pour les propriétaires ! Publier une annonce est rapide."</p>
                    <small class="block mt-2 text-gray-500">— Roland, Pointe-Noire</small>
                </div>
                <div class="w-1/2 sm:w-1/3 p-4 bg-white rounded-lg shadow-md hidden sm:block">
                    <p class="italic">"Je suis vraiment satisfait ! Merci pour cette plateforme fiable et accessible."</p>
                    <small class="block mt-2 text-gray-500">— Sylvie, Brazzaville</small>
                </div>
            </div>
        </div>

        <!-- Indicateurs (petits traits) -->
        <div class="absolute bottom-0 left-0 right-0 flex justify-center p-2 space-x-2">
            <button class="w-2 h-2 bg-amber-500 rounded-full focus:outline-none" data-slide="0"></button>
            <button class="w-2 h-2 bg-gray-300 rounded-full focus:outline-none" data-slide="1"></button>
            <button class="w-2 h-2 bg-gray-300 rounded-full focus:outline-none" data-slide="2"></button>
        </div>
    </div>
  </section>

  


  <section id="faq-section" class="py-10 px-8 sm:py-20 sm:px-16">
    <h2 style="font-family: poppins" class="font-bold text-xl sm:text-2xl lg:hidden text-center sm:text-left mb-6">Les questions <span class="text-amber-500">frequements</span> posées</h2>
    <div class="w-full flex flex-wrap items-center justify-between">
        <div class="w-[100%] sm:w-[38%] lg:w-[48%]">
            <h2 style="font-family: poppins" class="font-bold hidden lg:block lg:text-3xl">Les questions <span class="text-amber-500">frequements</span> posées</h2>
            <p class="font-serif mt-5 text-center sm:text-left" style="font-size: 18px">
              Cette section est dédiée à répondre aux interrogations les plus courantes de nos utilisateurs. Que vous soyez à la recherche d'informations sur nos services, nos tarifs ou le fonctionnement de notre plateforme, vous trouverez ici des réponses claires et précises. N'hésitez pas à explorer les questions ci-dessous pour mieux comprendre comment nous pouvons vous aider à trouver la maison de vos rêves ou à louer votre propriété en toute simplicité !
            </p>
        </div>
        <div class="w-[100%] sm:w-[60%] lg:w-[48%]">
          <div id="faq-div" class="border border-slate-400 px-5 py-4 rounded-lg">
            <div class="border-b border-slate-200 py-3">
                <div class="flex justify-between items-center">
                  <h3 class="text-amber-500 font-medium" style="font-familly:poppins">Comment puis-je m'inscrire sur la plateforme ?</h3>
                  <i class='bx bx-chevron-up cursor-pointer' style="font-size: 24px" id="faq-item-0"></i>
                </div>
                <p class="mt-3 font-serif" style="" id="faq-paragraphe-0">Nous proposons un abonnement unique à 5000 FCFA qui vous permet d'accéder à toutes les annonces de maisons à louer pendant 30 jours.</p>
            </div>
            <div class="border-b border-slate-200 py-3">
              <div class="flex justify-between items-center">
                <h3 class="text-amber-500 font-medium" style="font-familly:poppins">Que faire si je rencontre des problèmes lors de l'utilisation de la plateforme ?</h3>
                <i class='bx bx-chevron-down cursor-pointer' style="font-size: 24px" id="faq-item-1"></i>
              </div>
              <p class="mt-3 font-serif hidden" id="faq-paragraphe-1">Si vous rencontrez des problèmes, veuillez consulter notre section d'assistance ou contactez notre service client via le formulaire de contact.

              </p>
            </div>
            <div class="border-b border-slate-200 py-3">
              <div class="flex justify-between items-center">
                <h3 class="text-amber-500 font-medium" style="font-familly:poppins">Les annonces sont-elles vérifiées ?</h3>
                <i class='bx bx-chevron-down cursor-pointer' style="font-size: 24px" id="faq-item-2"></i>
              </div>
              <p class="mt-3 font-serif hidden" id="faq-paragraphe-2">Oui, toutes les annonces publiées sur notre plateforme sont vérifiées par notre équipe pour garantir leur authenticité.</p>
            </div>
            <div class="border-b border-slate-200 py-3">
              <div class="flex justify-between items-center">
                <h3 class="text-amber-500 font-medium" style="font-familly:poppins">Puis-je modifier ou supprimer mon annonce ?</h3>
                <i class='bx bx-chevron-down cursor-pointer' style="font-size: 24px" id="faq-item-3"></i>
              </div>
              <p class="mt-3 font-serif hidden" id="faq-paragraphe-3">Oui, vous pouvez modifier ou supprimer votre annonce à tout moment en vous connectant à votre compte et en accédant à votre tableau de bord.</p>
            </div>
            <div class="border-b border-slate-200 py-3">
              <div class="flex justify-between items-center">
                <h3 class="text-amber-500 font-medium" style="font-familly:poppins">Y a-t-il des frais cachés ?</h3>
                <i class='bx bx-chevron-down cursor-pointer' style="font-size: 24px" id="faq-item-4"></i>
              </div>
              <p class="mt-3 font-serif hidden" id="faq-paragraphe-4">Non, notre abonnement de 5000 FCFA est tout ce que vous aurez à payer pour accéder à notre plateforme. Il n'y a pas de frais supplémentaires.</p>
            </div>
            <div class="py-3">
              <div class="flex justify-between items-center">
                <h3 class="text-amber-500 font-medium" style="font-familly:poppins">Comment puis-je contacter le support client ?</h3>
                <i class='bx bx-chevron-down cursor-pointer' style="font-size: 24px" id="faq-item-5"></i>
              </div>
              <p class="mt-3 font-serif hidden" id="faq-paragraphe-5">Vous pouvez nous contacter via notre formulaire de contact ou par e-mail. Nous sommes disponibles pour répondre à vos questions du lundi au vendredi.</p>
            </div>      
          </div>
        </div>
    </div>
  </section>
        
</x-layout>
    
