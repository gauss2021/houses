@props(['role'=>[
  "owner"=>[
    [ 'id'=>0,
      'title'=>'Vos maisons',
      'url'=>'proprietaire/dashboard',
      'icon'=>'bx bx-home-alt-2'

    ],
    [ 'id'=>1,
      'title'=>'Ajouter une maison',
      'url'=>'ajouter/maison',
      'icon'=>'bx bx-plus-circle'
    ],
    [ 'id'=>2,
      'title'=>'Profile',
      'url'=>'proprietaire/profile',
      'icon'=>'bx bx-cog' 
    ]
  ],
  "admin"=>[
    [ 
      'id'=>0,
      'title'=>'Dashboard',
      'url'=>'/admin/dashboard',
      'icon'=>'bx bx-home-alt-2'
    ],
    [ 
      'id'=>1,
      'title'=>'Vos maisons',
      'url'=>'/proprietaire/dashboard',
      'icon'=>'bx bx-home-alt-2'

    ],
    [ 
      'id'=>2,
      'title'=>'Vos maisons',
      'url'=>'/proprietaire/dashboard',
      'icon'=>'bx bx-home-alt-2'

    ]
  ]
]]);

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

        
        <div class="flex">
          <div class="flex space-x-2">

          </div>
          <div class="lg:hidden w-[60%] md:w-[40%] h-[100vh] absolute flex gap-3 z-50 transform -translate-x-full transition-transform duration-500 ease-in-out" id="sidebar-mobile">
            <div class="bg-amber-500 py-4 px-6 h-full w-[90%]">
              <div class="flex flex-shrink-0 items-center">
                <img class="h-8 w-auto" src="https://tailwindui.com/plus/img/logos/mark.svg?color=white" alt="Your Company">
              </div>
              <div class="mt-6 space-y-4">
                @foreach ($role['owner'] as $item)

                  @if ($item['id']==0)
                    <div class="cursor-pointer border rounded-md py-2 px-2 bg-[#1a1a1d21] border-[#1a1a1d21]">
                      <div class="flex items-center gap-x-2 text-white">
                        <i class='{{ $item['icon'] }}' style='font-size:24px'></i>
                        <a href="{{ $item['url'] }}" class="font-bold">{{ $item['title'] }}</a>
                      </div>
                    </div> 
                  @else
                    
                    <div class="cursor-pointer rounded-md py-2 px-2 border border-transparent hover:border hover:bg-[#1a1a1d21] hover:border-[#1a1a1d21]">
                      <div class="flex items-center gap-x-2 text-white">
                        <i class='{{ $item['icon'] }}' style='font-size:24px'></i>
                        <a href="{{ $item['url'] }}" class="font-bold">{{ $item['title'] }}</a>
                      </div>
                    </div>
                  
                  @endif
                  
                    
                @endforeach
                
                
              </div>
            </div>
            <span class="mt-3">
              <i class='bx bx-x text-amber-500 cursor-pointer' style="font-size: 30px" id="dashboard-croix"></i>
            </span>
            
            
           
          </div>
            <div class="hidden lg:block lg:w-[25%] h-[100vh] bg-amber-500 py-4 px-6 transform transition-transform duration-500 ease-in-out" id="sidebar">
              <div class="flex flex-shrink-0 items-center">
                <img class="h-8 w-auto" src="https://tailwindui.com/plus/img/logos/mark.svg?color=white" alt="Your Company">
              </div>
              <div class="mt-6 space-y-4">
                @foreach ($role['owner'] as $item)

                  @if ($item['id']==0)
                    <div class="cursor-pointer border border-transparent rounded-md hover:border hover:bg-[#1a1a1d21] hover:border-[#1a1a1d21] py-2 px-2 {{ request()->is($item['url'])? 'bg-[#1a1a1d21] border-[#1a1a1d21]':'' }} ">
                      <div class="flex items-center gap-x-2 text-white">
                        <i class='{{ $item['icon'] }}' style='font-size:24px'></i>
                        <a href="{{ '/'.$item['url'] }}" class="font-bold">{{ $item['title'] }}</a>
                      </div>
                    </div> 
                  @else
                    
                    <div class="cursor-pointer rounded-md py-2 px-2 border border-transparent hover:border hover:bg-[#1a1a1d21] hover:border-[#1a1a1d21] {{ request()->is($item['url'])? 'bg-[#1a1a1d21] border-[#1a1a1d21]':'' }} ">
                      <div class="flex items-center gap-x-2 text-white">
                        <i class='{{ $item['icon'] }}' style='font-size:24px'></i>
                        <a href="{{ '/'.$item['url'] }}" class="font-bold">{{ $item['title'] }}</a>
                      </div>
                    </div>
                  
                  @endif
                  
                    
                @endforeach
                
              </div>
              
              
             
            </div>
            <div id="main-content" class="w-[100%] h-full lg:w-[75%] z-10">
              <div class="h-full w-full" id="overlay">
                <div class="h-16 border border-slate-300 shadow-md py-4 px-10 flex items-center justify-between">
                  <div class="space-x-4 flex items-center">
                      <button id="dashbord-menu" type="button" class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white lg:hidden" aria-controls="mobile-menu" aria-expanded="false">
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
                      <a href="/" class="cursor-pointer text-slate-400 hover:text-amber-500">Voir la page d'acceuil</a>
                  </div>
                  <div class="flex gap-x-3 items-center">
                    <span class="relative flex rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                      <span class="absolute -inset-1.5"></span>
                      <span class="sr-only">Open user menu</span>
                      <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80" alt="" id="user-profil">
                    </span>
                    <p class="font-bold">Van Davydson</p>
                    <i class='bx bx-chevron-down text-slate-400' style="font-size: 26px"></i>
                  </div>
                </div>
                {{ $slot }}
              </div>
              
            </div>
        </div>

       

             
    </body>
</html>
