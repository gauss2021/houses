<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-gray-100">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        

        {{-- SELECt 2 --}}
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
        

       @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>
    <body class="font-sans antialiased  bg-white text-[#20282D]">

        
        <nav class="bg-white border-b border-slate-300">
            <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
              <div class="relative flex h-16 items-center justify-between">
                <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                  <!-- Mobile menu button-->
                  <button id="mobile-menu-button" type="button" class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
                    <span class="absolute -inset-0.5"></span>
                    <span class="sr-only">Open main menu</span>
                    <!--
                      Icon when menu is closed.
          
                      Menu open: "hidden", Menu closed: "block"
                    -->
                    <svg id="menu-close" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                    <!--
                      Icon when menu is open.
          
                      Menu open: "block", Menu closed: "hidden"
                    -->
                    <svg id="menu-open" class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>
                  </button>
                </div>
                <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                  <div class="flex flex-shrink-0 items-center">
                    <img class="h-8 w-auto" src="https://tailwindui.com/plus/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company">
                  </div>
                  <div class="hidden sm:ml-6 sm:block">
                    <div class="flex space-x-4">
                      <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                    <a href="/" class="px-3 py-2 text-sm font-medium hover:text-amber-500 {{ request()->is('/')? 'text-amber-500':'' }}">Accueil</a>
                    <a href="/maisons" class="px-3 py-2 text-sm font-medium hover:text-amber-500 {{ request()->is('maisons')?'text-amber-500':'' }}">Maisons</a>
                    <a href="#" class="px-3 py-2 text-sm font-medium hover:text-amber-500">Abonnements</a>
                    </div>
                  </div>
                </div>
                <div class="border border-slate-300 rounded-lg lg:flex flex-row px-2 py-2 items-center hidden">
                   <i class='bx bx-search mr-1' style="font-size: 20px"></i>
                   <input type="text" class="px-2 border-0 focus:outline-none focus:border-none" placeholder="Rechercher">
                   
                </div>
                <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                  <a href="#" class="relative font-bold rounded-lg bg-amber-500 px-4 py-2 text-white hover:bg-amber-300">
                    Se connecter
                  </a>

                  @auth
                                        <!-- Profile dropdown -->
                  <div class="relative ml-3">
                    <div>
                      <button type="button" class="relative flex rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                        <span class="absolute -inset-1.5"></span>
                        <span class="sr-only">Open user menu</span>
                        <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                      </button>
                    </div>
          
                    <!--
                      Dropdown menu, show/hide based on menu state.
          
                      Entering: "transition ease-out duration-100"
                        From: "transform opacity-0 scale-95"
                        To: "transform opacity-100 scale-100"
                      Leaving: "transition ease-in duration-75"
                        From: "transform opacity-100 scale-100"
                        To: "transform opacity-0 scale-95"
                    -->
                    <div class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                      <!-- Active: "bg-gray-100", Not Active: "" -->
                      <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Your Profile</a>
                      <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-1">Settings</a>
                      <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-2">Sign out</a>
                    </div>
                  </div>

                  @endauth
          

                </div>
              </div>
            </div>
          
            <!-- Mobile menu, show/hide based on menu state. -->
            <div class="sm:hidden hidden" id="mobile-menu">
              <div class="space-y-1 px-2 pb-3 pt-2">
                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                <a href="/" class="block rounded-md bg-gray-900 px-3 py-2 text-base font-medium text-white" aria-current="page">Acceuil</a>
                <a href="/maisons" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Maisons</a>
                <a href="/abonnements" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Abonnements</a>
              </div>
            </div>
        </nav>
        <div class="border border-slate-300 flex flex-row px-2 py-2 items-center  lg:hidden">
          <i class='bx bx-search mr-1' style="font-size: 20px"></i>
          <input type="text" class="px-2 border-0 focus:outline-none focus:border-none" placeholder="Rechercher">
          
        </div>
        
        {{ $slot }}

        <footer class="pt-10 pb-3 sm:pt-20 sm:pb-6 bg-[#EDF3FD] ">
          <div class="flex flex-col sm:flex-row justify-between px-8 pb-3 sm:px-16 sm:pb-6">
            <div class="w-[100%] sm:w-1/4">
              <img class="h-10 w-10" src="https://tailwindui.com/plus/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company">
              <p class="mt-4">
                Nous connectons les propriétaires et les locataires à travers une plateforme de confiance et de simplicité. Que vous cherchiez à louer une maison ou à mettre la vôtre en location, nous simplifions chaque étape pour vous.
              </p>
            </div>
            <div class="w-[100%] sm:w-1/4">
                <h5>Navigation rapide</h5>
                <div class="flex flex-col">
                  <a style="font-family: poppins" href="#" class="font-medium mt-4">Accueil</a>
                  <a style="font-family: poppins" href="#" class="font-medium mt-4">À propos</a>
                  <a style="font-family: poppins" href="#" class="font-medium mt-4">Questions</a>
                  <a style="font-family: poppins" href="#" class="font-medium mt-4">Politique de confidentialité</a>
                  <a style="font-family: poppins" href="#" class="font-medium mt-4">Conditions d'utilisation</a>
                </div>
            </div>
            <div class="w-[100%] sm:w-1/6">
              <h5>Nos services</h5>
             <div class="flex flex-col">
              <a style="font-family: poppins" href="#" class="font-medium mt-4">Notre equipe</a>
              <a style="font-family: poppins" href="#" class="font-medium mt-4">Notre blog</a>
              <a style="font-family: poppins" href="#" class="font-medium mt-4">Contact</a>
              <a style="font-family: poppins" href="#" class="font-medium mt-4">Questions</a> 
             </div>
            </div>
            <div class="w-[100%] sm:w-1/4">
              <div>
                <h5>Contactez nous <span class="text-amber-500"></h5>
                <div>
                  <h6 class="mt-4">Telephone: +242061234567</h6>
                  <h6 class="mt-4">Telephone: +242061234567</h6>
                  <h6 class="mt-4">Email: support@gmail.com</h6>
                  <h6 class="mt-4">Horaires: Du lundi au vendredi, 9h à 18h</h6>
                </div>
                <div class="mt-4 flex gap-4">
      
                </div>
              </div>
            </div>
          </div>
          <div class="text-center pt-4 border-t border-slate-400">
              <h6 class="text-sm sm:text-lg">©2024 – Tous droits réservés – Réalisé par <span class="font-bold" style="font-family: poppins">SoftGraphStudios</span></h6>
          </div>
        </footer>  
        <script src="{{ asset('js/jquery.js') }}"></script>                                              
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        <script>
            // Mon select2
  
            $(document).ready(function() {



       


              $('.quartier-basic-multiple').select2({
                placeholder: "Sélectionnez une option", // Texte du placeholder
                allowClear: true 
              });
              $('.type-multiple').select2({
                placeholder: "Sélectionnez un type de maison", // Texte du placeholder
                allowClear: true 
              });
              });
        </script>
    </body>
</html>
