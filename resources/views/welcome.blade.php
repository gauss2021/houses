<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" href={{ asset("css/style.css") }}>

        <!-- Styles / Scripts -->
        {{-- @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            <style>
                /* ! tailwindcss v3.4.1 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}:host,html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;font-feature-settings:normal;font-variation-settings:normal;-webkit-tap-highlight-color:transparent}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-feature-settings:normal;font-variation-settings:normal;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-feature-settings:inherit;font-variation-settings:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}dialog{padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.absolute{position:absolute}.relative{position:relative}.-left-20{left:-5rem}.top-0{top:0px}.-bottom-16{bottom:-4rem}.-left-16{left:-4rem}.-mx-3{margin-left:-0.75rem;margin-right:-0.75rem}.mt-4{margin-top:1rem}.mt-6{margin-top:1.5rem}.flex{display:flex}.grid{display:grid}.hidden{display:none}.aspect-video{aspect-ratio:16 / 9}.size-12{width:3rem;height:3rem}.size-5{width:1.25rem;height:1.25rem}.size-6{width:1.5rem;height:1.5rem}.h-12{height:3rem}.h-40{height:10rem}.h-full{height:100%}.min-h-screen{min-height:100vh}.w-full{width:100%}.w-\[calc\(100\%\+8rem\)\]{width:calc(100% + 8rem)}.w-auto{width:auto}.max-w-\[877px\]{max-width:877px}.max-w-2xl{max-width:42rem}.flex-1{flex:1 1 0%}.shrink-0{flex-shrink:0}.grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}.flex-col{flex-direction:column}.items-start{align-items:flex-start}.items-center{align-items:center}.items-stretch{align-items:stretch}.justify-end{justify-content:flex-end}.justify-center{justify-content:center}.gap-2{gap:0.5rem}.gap-4{gap:1rem}.gap-6{gap:1.5rem}.self-center{align-self:center}.overflow-hidden{overflow:hidden}.rounded-\[10px\]{border-radius:10px}.rounded-full{border-radius:9999px}.rounded-lg{border-radius:0.5rem}.rounded-md{border-radius:0.375rem}.rounded-sm{border-radius:0.125rem}.bg-\[\#FF2D20\]\/10{background-color:rgb(255 45 32 / 0.1)}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gradient-to-b{background-image:linear-gradient(to bottom, var(--tw-gradient-stops))}.from-transparent{--tw-gradient-from:transparent var(--tw-gradient-from-position);--tw-gradient-to:rgb(0 0 0 / 0) var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-white{--tw-gradient-to:rgb(255 255 255 / 0)  var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), #fff var(--tw-gradient-via-position), var(--tw-gradient-to)}.to-white{--tw-gradient-to:#fff var(--tw-gradient-to-position)}.stroke-\[\#FF2D20\]{stroke:#FF2D20}.object-cover{object-fit:cover}.object-top{object-position:top}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.py-10{padding-top:2.5rem;padding-bottom:2.5rem}.px-3{padding-left:0.75rem;padding-right:0.75rem}.py-16{padding-top:4rem;padding-bottom:4rem}.py-2{padding-top:0.5rem;padding-bottom:0.5rem}.pt-3{padding-top:0.75rem}.text-center{text-align:center}.font-sans{font-family:Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji}.text-sm{font-size:0.875rem;line-height:1.25rem}.text-sm\/relaxed{font-size:0.875rem;line-height:1.625}.text-xl{font-size:1.25rem;line-height:1.75rem}.font-semibold{font-weight:600}.text-black{--tw-text-opacity:1;color:rgb(0 0 0 / var(--tw-text-opacity))}.text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-\[0px_14px_34px_0px_rgba\(0\2c 0\2c 0\2c 0\.08\)\]{--tw-shadow:0px 14px 34px 0px rgba(0,0,0,0.08);--tw-shadow-colored:0px 14px 34px 0px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.ring-transparent{--tw-ring-color:transparent}.ring-white\/\[0\.05\]{--tw-ring-color:rgb(255 255 255 / 0.05)}.drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.06\)\]{--tw-drop-shadow:drop-shadow(0px 4px 34px rgba(0,0,0,0.06));filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.25\)\]{--tw-drop-shadow:drop-shadow(0px 4px 34px rgba(0,0,0,0.25));filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.transition{transition-property:color, background-color, border-color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-text-decoration-color, -webkit-backdrop-filter;transition-property:color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;transition-property:color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-text-decoration-color, -webkit-backdrop-filter;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.duration-300{transition-duration:300ms}.selection\:bg-\[\#FF2D20\] *::selection{--tw-bg-opacity:1;background-color:rgb(255 45 32 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-\[\#FF2D20\]::selection{--tw-bg-opacity:1;background-color:rgb(255 45 32 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-black:hover{--tw-text-opacity:1;color:rgb(0 0 0 / var(--tw-text-opacity))}.hover\:text-black\/70:hover{color:rgb(0 0 0 / 0.7)}.hover\:ring-black\/20:hover{--tw-ring-color:rgb(0 0 0 / 0.2)}.focus\:outline-none:focus{outline:2px solid transparent;outline-offset:2px}.focus-visible\:ring-1:focus-visible{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.focus-visible\:ring-\[\#FF2D20\]:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(255 45 32 / var(--tw-ring-opacity))}@media (min-width: 640px){.sm\:size-16{width:4rem;height:4rem}.sm\:size-6{width:1.5rem;height:1.5rem}.sm\:pt-5{padding-top:1.25rem}}@media (min-width: 768px){.md\:row-span-3{grid-row:span 3 / span 3}}@media (min-width: 1024px){.lg\:col-start-2{grid-column-start:2}.lg\:h-16{height:4rem}.lg\:max-w-7xl{max-width:80rem}.lg\:grid-cols-3{grid-template-columns:repeat(3, minmax(0, 1fr))}.lg\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}.lg\:flex-col{flex-direction:column}.lg\:items-end{align-items:flex-end}.lg\:justify-center{justify-content:center}.lg\:gap-8{gap:2rem}.lg\:p-10{padding:2.5rem}.lg\:pb-10{padding-bottom:2.5rem}.lg\:pt-0{padding-top:0px}.lg\:text-\[\#FF2D20\]{--tw-text-opacity:1;color:rgb(255 45 32 / var(--tw-text-opacity))}}@media (prefers-color-scheme: dark){.dark\:block{display:block}.dark\:hidden{display:none}.dark\:bg-black{--tw-bg-opacity:1;background-color:rgb(0 0 0 / var(--tw-bg-opacity))}.dark\:bg-zinc-900{--tw-bg-opacity:1;background-color:rgb(24 24 27 / var(--tw-bg-opacity))}.dark\:via-zinc-900{--tw-gradient-to:rgb(24 24 27 / 0)  var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), #18181b var(--tw-gradient-via-position), var(--tw-gradient-to)}.dark\:to-zinc-900{--tw-gradient-to:#18181b var(--tw-gradient-to-position)}.dark\:text-white\/50{color:rgb(255 255 255 / 0.5)}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-white\/70{color:rgb(255 255 255 / 0.7)}.dark\:ring-zinc-800{--tw-ring-opacity:1;--tw-ring-color:rgb(39 39 42 / var(--tw-ring-opacity))}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:hover\:text-white\/70:hover{color:rgb(255 255 255 / 0.7)}.dark\:hover\:text-white\/80:hover{color:rgb(255 255 255 / 0.8)}.dark\:hover\:ring-zinc-700:hover{--tw-ring-opacity:1;--tw-ring-color:rgb(63 63 70 / var(--tw-ring-opacity))}.dark\:focus-visible\:ring-\[\#FF2D20\]:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(255 45 32 / var(--tw-ring-opacity))}.dark\:focus-visible\:ring-white:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(255 255 255 / var(--tw-ring-opacity))}}
            </style>
        @endif --}}
        <style>
              #carousel {
                scroll-behavior: smooth;
                transition: transform 1.5s ease-in-out;
              }
        </style>
        <script src="https://cdn.tailwindcss.com"></script>

    </head>
    <body class="font-sans antialiased  bg-white text-[#20282D]">
        <nav class="bg-white border-b border-slate-300">
            <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
              <div class="relative flex h-16 items-center justify-between">
                <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                  <!-- Mobile menu button-->
                  <button type="button" class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
                    <span class="absolute -inset-0.5"></span>
                    <span class="sr-only">Open main menu</span>
                    <!--
                      Icon when menu is closed.
          
                      Menu open: "hidden", Menu closed: "block"
                    -->
                    <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                    <!--
                      Icon when menu is open.
          
                      Menu open: "block", Menu closed: "hidden"
                    -->
                    <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
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
                      <a href="#" class="px-3 py-2 text-sm font-medium text-amber-500" aria-current="page">Acceuil</a>
                      <a href="#" class="px-3 py-2 text-sm font-medium hover:text-amber-500">Maisons</a>
                      <a href="#" class="px-3 py-2 text-sm font-medium hover:text-amber-500">Prestateurs</a>
                      <a href="#" class="px-3 py-2 text-sm font-medium hover:text-amber-500">Abonnements</a>
                    </div>
                  </div>
                </div>
                <div class="border border-slate-300 rounded-lg flex flex-row px-2 py-2 items-center">
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
            <div class="sm:hidden" id="mobile-menu">
              <div class="space-y-1 px-2 pb-3 pt-2">
                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                <a href="#" class="block rounded-md bg-gray-900 px-3 py-2 text-base font-medium text-white" aria-current="page">Acceuil</a>
                <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Jobs</a>
                <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Prestateurs</a>
                <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Abonnements</a>
              </div>
            </div>
        </nav>
        
        <section id="hero-section">
            
            <div class="relative w-full" id="carousel">
                <!-- Carousel container -->
                <div class="relative overflow-hidden" style="height:550px">
                  <!-- Slides -->
                  <div class="carousel-item duration-700 ease-in-out absolute inset-0 transition-all transform translate-x-0">
                    <img src={{ asset("images/carousel-2.png") }} class="block w-full h-full object-cover" alt="Image 1">
                  </div>
                  <div class="carousel-item duration-700 ease-in-out absolute inset-0 transition-all transform translate-x-full">
                    <img src={{ asset("images/carousel-3.png") }} class="block w-full h-full object-cover" alt="Image 2">
                  </div>
                  <div class="carousel-item duration-700 ease-in-out absolute inset-0 transition-all transform translate-x-full">
                    <img src={{ asset("images/carousel-4.png") }} class="block w-full h-full object-cover" alt="Image 3">
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

        <section class="bg-[#EDF3FD] py-20 px-16" style="height: 1400px">
            <h2 class="font-bold text-2xl" style="font-family: poppins">Decouvrez les dernieres maisons en location</h2>
            <p class="mt-3 font-serif">Toutes les maisons sont pres de chez vous</p>
            <div class="flex flex-wrap mt-6 gap-x-6 gap-y-10">

                <div>
                    <div class="relative" style="height: 260px; width:380px">
                        <img src={{ asset("images/apartment-1.jpg") }} alt="" srcset="" class="rounded-xl h-full">
                        <span class="absolute top-2 left-2 px-3 bg-white rounded-2xl text-amber-500 flex items-center gap-1"><i class='bx bxs-camera text-amber-500' style="font-size: 22px"></i><span class="font-medium">3</span></span>
                        <span class="absolute top-2 right-2 p-1 bg-white rounded-full text-amber-500 flex justify-center"><i class='bx bx-heart' style="font-size: 22px"></i></span>
                    </div>
                    <h3 class="font-bold mt-4" style="font-family: poppins">Superbe Maison</h3>
                    <div class="mt-4 flex gap-1 items-center">
                        <i class='bx bx-location-plus text-amber-500' style="font-size: 22px"></i>
                        <p class="font-serif">55 Rue Bonga moungalie</p>
                    </div>
                    <p class="mt-2 font-medium" style="font-family: poppins">Appartement</p>

                    <div class="flex mt-3 justify-between">
                        <div>
                            <p class="font-serif"><span class="font-bold" style="font-family: poppins">25000 FCFA </span>/ Par mois</p>
                        </div>
                        <div class="flex gap-1 items-center">
                            <span class="text-amber-500">2</span>
                            <i class='bx bx-bed text-amber-500' style="font-size: 20px"></i>  
                            <span class="text-amber-500">2</span>
                            <i class='bx bx-bath text-amber-500' style="font-size: 20px"></i>  
                            <span class="text-amber-500">1</span>
                            <i class='bx bx-door-open text-amber-500' style="font-size: 20px"></i>  
                        </div>
                    </div>
                    <div class="mt-4 flex gap-3 items-center">
                        <div class="flex gap-1">
                            <i class='bx bxs-star text-amber-500' style='font-size:20px' ></i>
                            <i class='bx bxs-star text-amber-500' style='font-size:20px' ></i>
                            <i class='bx bxs-star text-amber-500' style='font-size:20px' ></i>
                            <i class='bx bxs-star text-amber-500' style='font-size:20px' ></i>
                            <i class='bx bxs-star text-amber-500' style='font-size:20px' ></i>
                        </div>
                       <p class="text-slate-400 font-serif" style="font-size: 14px" ><span class="font-medium text-black" style="font-family: poppins">Ajouter:</span> le 17 Octobre 2024</p> 
                    </div>
                   
                    
                </div>

                <div>
                    <div class="relative" style="height: 260px; width:380px">
                        <img src={{ asset("images/apartment-1.jpg") }} alt="" srcset="" class="rounded-xl h-full">
                        <span class="absolute top-2 left-2 px-3 bg-white rounded-2xl text-amber-500 flex items-center gap-1"><i class='bx bxs-camera text-amber-500' style="font-size: 22px"></i><span class="font-medium">3</span></span>
                        <span class="absolute top-2 right-2 p-1 bg-white rounded-full text-amber-500 flex justify-center"><i class='bx bx-heart' style="font-size: 22px"></i></span>
                    </div>
                    <h3 class="font-bold mt-4" style="font-family: poppins">Superbe Maison</h3>
                    <div class="mt-4 flex gap-1 items-center">
                        <i class='bx bx-location-plus text-amber-500' style="font-size: 22px"></i>
                        <p class="font-serif">55 Rue Bonga moungalie</p>
                    </div>
                    <p class="mt-2 font-medium" style="font-family: poppins">Appartement</p>

                    <div class="flex mt-3 justify-between">
                        <div>
                            <p class="font-serif"><span class="font-bold" style="font-family: poppins">25000 FCFA </span>/ Par mois</p>
                        </div>
                        <div class="flex gap-1 items-center">
                            <span class="text-amber-500">2</span>
                            <i class='bx bx-bed text-amber-500' style="font-size: 20px"></i>  
                            <span class="text-amber-500">2</span>
                            <i class='bx bx-bath text-amber-500' style="font-size: 20px"></i>  
                            <span class="text-amber-500">1</span>
                            <i class='bx bx-door-open text-amber-500' style="font-size: 20px"></i>  
                        </div>
                    </div>
                    <div class="mt-4 flex gap-3 items-center">
                        <div class="flex gap-1">
                            <i class='bx bxs-star text-amber-500' style='font-size:20px' ></i>
                            <i class='bx bxs-star text-amber-500' style='font-size:20px' ></i>
                            <i class='bx bxs-star text-amber-500' style='font-size:20px' ></i>
                            <i class='bx bxs-star text-amber-500' style='font-size:20px' ></i>
                            <i class='bx bxs-star text-amber-500' style='font-size:20px' ></i>
                        </div>
                       <p class="text-slate-400 font-serif" style="font-size: 14px" ><span class="font-medium text-black" style="font-family: poppins">Ajouter:</span> le 17 Octobre 2024</p> 
                    </div>
                   
                    
                </div>

                <div>
                    <div class="relative" style="height: 260px; width:380px">
                        <img src={{ asset("images/apartment-1.jpg") }} alt="" srcset="" class="rounded-xl h-full">
                        <span class="absolute top-2 left-2 px-3 bg-white rounded-2xl text-amber-500 flex items-center gap-1"><i class='bx bxs-camera text-amber-500' style="font-size: 22px"></i><span class="font-medium">3</span></span>
                        <span class="absolute top-2 right-2 p-1 bg-white rounded-full text-amber-500 flex justify-center"><i class='bx bx-heart' style="font-size: 22px"></i></span>
                    </div>
                    <h3 class="font-bold mt-4" style="font-family: poppins">Superbe Maison</h3>
                    <div class="mt-4 flex gap-1 items-center">
                        <i class='bx bx-location-plus text-amber-500' style="font-size: 22px"></i>
                        <p class="font-serif">55 Rue Bonga moungalie</p>
                    </div>
                    <p class="mt-2 font-medium" style="font-family: poppins">Appartement</p>

                    <div class="flex mt-3 justify-between">
                        <div>
                            <p class="font-serif"><span class="font-bold" style="font-family: poppins">25000 FCFA </span>/ Par mois</p>
                        </div>
                        <div class="flex gap-1 items-center">
                            <span class="text-amber-500">2</span>
                            <i class='bx bx-bed text-amber-500' style="font-size: 20px"></i>  
                            <span class="text-amber-500">2</span>
                            <i class='bx bx-bath text-amber-500' style="font-size: 20px"></i>  
                            <span class="text-amber-500">1</span>
                            <i class='bx bx-door-open text-amber-500' style="font-size: 20px"></i>  
                        </div>
                    </div>
                    <div class="mt-4 flex gap-3 items-center">
                        <div class="flex gap-1">
                            <i class='bx bxs-star text-amber-500' style='font-size:20px' ></i>
                            <i class='bx bxs-star text-amber-500' style='font-size:20px' ></i>
                            <i class='bx bxs-star text-amber-500' style='font-size:20px' ></i>
                            <i class='bx bxs-star text-amber-500' style='font-size:20px' ></i>
                            <i class='bx bxs-star text-amber-500' style='font-size:20px' ></i>
                        </div>
                       <p class="text-slate-400 font-serif" style="font-size: 14px" ><span class="font-medium text-black" style="font-family: poppins">Ajouter:</span> le 17 Octobre 2024</p> 
                    </div>
                   
                    
                </div>

                <div>
                    <div class="relative" style="height: 260px; width:380px">
                        <img src={{ asset("images/apartment-1.jpg") }} alt="" srcset="" class="rounded-xl h-full">
                        <span class="absolute top-2 left-2 px-3 bg-white rounded-2xl text-amber-500 flex items-center gap-1"><i class='bx bxs-camera text-amber-500' style="font-size: 22px"></i><span class="font-medium">3</span></span>
                        <span class="absolute top-2 right-2 p-1 bg-white rounded-full text-amber-500 flex justify-center"><i class='bx bx-heart' style="font-size: 22px"></i></span>
                    </div>
                    <h3 class="font-bold mt-4" style="font-family: poppins">Superbe Maison</h3>
                    <div class="mt-4 flex gap-1 items-center">
                        <i class='bx bx-location-plus text-amber-500' style="font-size: 22px"></i>
                        <p class="font-serif">55 Rue Bonga moungalie</p>
                    </div>
                    <p class="mt-2 font-medium" style="font-family: poppins">Appartement</p>

                    <div class="flex mt-3 justify-between">
                        <div>
                            <p class="font-serif"><span class="font-bold" style="font-family: poppins">25000 FCFA </span>/ Par mois</p>
                        </div>
                        <div class="flex gap-1 items-center">
                            <span class="text-amber-500">2</span>
                            <i class='bx bx-bed text-amber-500' style="font-size: 20px"></i>  
                            <span class="text-amber-500">2</span>
                            <i class='bx bx-bath text-amber-500' style="font-size: 20px"></i>  
                            <span class="text-amber-500">1</span>
                            <i class='bx bx-door-open text-amber-500' style="font-size: 20px"></i>  
                        </div>
                    </div>
                    <div class="mt-4 flex gap-3 items-center">
                        <div class="flex gap-1">
                            <i class='bx bxs-star text-amber-500' style='font-size:20px' ></i>
                            <i class='bx bxs-star text-amber-500' style='font-size:20px' ></i>
                            <i class='bx bxs-star text-amber-500' style='font-size:20px' ></i>
                            <i class='bx bxs-star text-amber-500' style='font-size:20px' ></i>
                            <i class='bx bxs-star text-amber-500' style='font-size:20px' ></i>
                        </div>
                       <p class="text-slate-400 font-serif" style="font-size: 14px" ><span class="font-medium text-black" style="font-family: poppins">Ajouter:</span> le 17 Octobre 2024</p> 
                    </div>
                   
                    
                </div>

                <div>
                    <div class="relative" style="height: 260px; width:380px">
                        <img src={{ asset("images/apartment-1.jpg") }} alt="" srcset="" class="rounded-xl h-full">
                        <span class="absolute top-2 left-2 px-3 bg-white rounded-2xl text-amber-500 flex items-center gap-1"><i class='bx bxs-camera text-amber-500' style="font-size: 22px"></i><span class="font-medium">3</span></span>
                        <span class="absolute top-2 right-2 p-1 bg-white rounded-full text-amber-500 flex justify-center"><i class='bx bx-heart' style="font-size: 22px"></i></span>
                    </div>
                    <h3 class="font-bold mt-4" style="font-family: poppins">Superbe Maison</h3>
                    <div class="mt-4 flex gap-1 items-center">
                        <i class='bx bx-location-plus text-amber-500' style="font-size: 22px"></i>
                        <p class="font-serif">55 Rue Bonga moungalie</p>
                    </div>
                    <p class="mt-2 font-medium" style="font-family: poppins">Appartement</p>

                    <div class="flex mt-3 justify-between">
                        <div>
                            <p class="font-serif"><span class="font-bold" style="font-family: poppins">25000 FCFA </span>/ Par mois</p>
                        </div>
                        <div class="flex gap-1 items-center">
                            <span class="text-amber-500">2</span>
                            <i class='bx bx-bed text-amber-500' style="font-size: 20px"></i>  
                            <span class="text-amber-500">2</span>
                            <i class='bx bx-bath text-amber-500' style="font-size: 20px"></i>  
                            <span class="text-amber-500">1</span>
                            <i class='bx bx-door-open text-amber-500' style="font-size: 20px"></i>  
                        </div>
                    </div>
                    <div class="mt-4 flex gap-3 items-center">
                        <div class="flex gap-1">
                            <i class='bx bxs-star text-amber-500' style='font-size:20px' ></i>
                            <i class='bx bxs-star text-amber-500' style='font-size:20px' ></i>
                            <i class='bx bxs-star text-amber-500' style='font-size:20px' ></i>
                            <i class='bx bxs-star text-amber-500' style='font-size:20px' ></i>
                            <i class='bx bxs-star text-amber-500' style='font-size:20px' ></i>
                        </div>
                       <p class="text-slate-400 font-serif" style="font-size: 14px" ><span class="font-medium text-black" style="font-family: poppins">Ajouter:</span> le 17 Octobre 2024</p> 
                    </div>
                   
                    
                </div>

                <div>
                    <div class="relative" style="height: 260px; width:380px">
                        <img src={{ asset("images/apartment-1.jpg") }} alt="" srcset="" class="rounded-xl h-full">
                        <span class="absolute top-2 left-2 px-3 bg-white rounded-2xl text-amber-500 flex items-center gap-1"><i class='bx bxs-camera text-amber-500' style="font-size: 22px"></i><span class="font-medium">3</span></span>
                        <span class="absolute top-2 right-2 p-1 bg-white rounded-full text-amber-500 flex justify-center"><i class='bx bx-heart' style="font-size: 22px"></i></span>
                    </div>
                    <h3 class="font-bold mt-4" style="font-family: poppins">Superbe Maison</h3>
                    <div class="mt-4 flex gap-1 items-center">
                        <i class='bx bx-location-plus text-amber-500' style="font-size: 22px"></i>
                        <p class="font-serif">55 Rue Bonga moungalie</p>
                    </div>
                    <p class="mt-2 font-medium" style="font-family: poppins">Appartement</p>

                    <div class="flex mt-3 justify-between">
                        <div>
                            <p class="font-serif"><span class="font-bold" style="font-family: poppins">25000 FCFA </span>/ Par mois</p>
                        </div>
                        <div class="flex gap-1 items-center">
                            <span class="text-amber-500">2</span>
                            <i class='bx bx-bed text-amber-500' style="font-size: 20px"></i>  
                            <span class="text-amber-500">2</span>
                            <i class='bx bx-bath text-amber-500' style="font-size: 20px"></i>  
                            <span class="text-amber-500">1</span>
                            <i class='bx bx-door-open text-amber-500' style="font-size: 20px"></i>  
                        </div>
                    </div>
                    <div class="mt-4 flex gap-3 items-center">
                        <div class="flex gap-1">
                            <i class='bx bxs-star text-amber-500' style='font-size:20px' ></i>
                            <i class='bx bxs-star text-amber-500' style='font-size:20px' ></i>
                            <i class='bx bxs-star text-amber-500' style='font-size:20px' ></i>
                            <i class='bx bxs-star text-amber-500' style='font-size:20px' ></i>
                            <i class='bx bxs-star text-amber-500' style='font-size:20px' ></i>
                        </div>
                       <p class="text-slate-400 font-serif" style="font-size: 14px" ><span class="font-medium text-black" style="font-family: poppins">Ajouter:</span> le 17 Octobre 2024</p> 
                    </div>
                   
                    
                </div>

                
                

            </div>
        </section>
       
        <script src="{{ asset('js/index.js') }}"></script>
    </body>
</html>
