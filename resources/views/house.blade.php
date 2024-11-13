<x-layoult>
    <section id="house-carousel">
        
        <div class="swiper mySwiper sm:h-[420px] md:h-[509px]">
            <div class="swiper-wrapper">
                {{-- Premier slide --}}
                <div class="swiper-slide items-slide" style="background-image: url({{ Vite::asset('resources/images/apartment-1.jpg') }}); background-repeat: no-repeat;background-size:cover">
                    <div class="w-full h-full py-10 px-20 hidden lg:flex" style="background: linear-gradient(180deg, rgba(255, 255, 255, 0) 0%, rgba(0, 0, 0, 0.8015581232) 100%);" >
                        <div class="w-[65%] h-full hidden lg:flex justify-end flex-col text-white">
                            <span class="p-2 bg-white/90 hover:bg-amber-500 text-black/90 hover:text-white self-start rounded-md">
                              <a href="#"><p class="" style="font-size: 14px">Appartement</p></a>
                            </span>
                            <div class="flex items-center gap-5 mt-3">
                                <h3 class="font-medium text-3xl self-start text-start">Maison confortable apartement</h3>
                                <span class="px-2 py-2 bg-amber-400 hover:bg-amber-500 rounded-md">
                                    <h3 class="text-white font-medium">25000 FCFA par mois</h3>
                                </span>
                            </div>
                            <div class="flex items-center gap-1 mt-3">
                                <span class="text-amber-500">
                                    <i class='bx bx-map' style="font-size: 24px"></i> 
                                </span>
                                <p class="text-lg text-white/80">55 rue Bonga, Moungali</p>
                            </div>
                        </div>
                        <div class="w-[35%] h-full hidden lg:flex flex-col justify-end items-end">
                            <span class="w-[40px] h-[40px] rounded-md flex items-center justify-center hover:cursor-pointer" style="background: #1a1a1a" title="Ajouter a vos favoris">
                                <i class="bx bx-heart text-white/80" style="font-size: 24px"></i>
                            </span>
                        </div>
                    </div>
                </div>
                {{-- Deuxieme slide --}}
                <div class="swiper-slide items-slide" style="background-image: url({{ Vite::asset('resources/images/apartment-2.jpg') }}); background-repeat: no-repeat;background-size:cover;">
                    <div class="w-full h-full py-10 px-20 hidden lg:flex" style="background: linear-gradient(180deg, rgba(255, 255, 255, 0) 0%, rgba(0, 0, 0, 0.8015581232) 100%);" >
                        <div class="w-[65%] h-full hidden lg:flex justify-end flex-col text-white">
                            <span class="p-2 bg-white/90 hover:bg-amber-500 text-black/90 hover:text-white self-start rounded-md">
                              <a href="#"><p class="" style="font-size: 14px">Appartement</p></a>
                            </span>
                            <div class="flex items-center gap-5 mt-3">
                                <h3 class="font-medium text-3xl self-start text-start">Maison confortable apartement</h3>
                                <span class="px-2 py-2 bg-amber-400 hover:bg-amber-500 rounded-md">
                                    <h3 class="text-white font-medium">25000 FCFA par mois</h3>
                                </span>
                            </div>
                            <div class="flex items-center gap-1 mt-3">
                                <span class="text-amber-500">
                                    <i class='bx bx-map' style="font-size: 24px"></i> 
                                </span>
                                <p class="text-lg text-white/80">55 rue Bonga, Moungali</p>
                            </div>
                        </div>
                        <div class="w-[35%] h-full hidden lg:flex flex-col justify-end items-end">
                            <span class="w-[40px] h-[40px] rounded-md flex items-center justify-center hover:cursor-pointer" style="background: #1a1a1a" title="Ajouter a vos favoris">
                                <i class="bx bx-heart text-white/80" style="font-size: 24px"></i>
                            </span>
                        </div>
                    </div>
                </div>

                {{-- Troisieme slide --}}
                <div class="swiper-slide items-slide" style="background-image: url({{ Vite::asset('resources/images/banner-2.jpg') }}); background-repeat: no-repeat;background-size:cover;">
                    <div class="w-full h-full py-10 px-20 hidden lg:flex" style="background: linear-gradient(180deg, rgba(255, 255, 255, 0) 0%, rgba(0, 0, 0, 0.8015581232) 100%);" >
                        <div class="w-[65%] h-full hidden lg:flex justify-end flex-col text-white">
                            <span class="p-2 bg-white/90 hover:bg-amber-500 text-black/90 hover:text-white self-start rounded-md">
                              <a href="#"><p class="" style="font-size: 14px">Appartement</p></a>
                            </span>
                            <div class="flex items-center gap-5 mt-3">
                                <h3 class="font-medium text-3xl self-start text-start">Maison confortable apartement</h3>
                                <span class="px-2 py-2 bg-amber-400 hover:bg-amber-500 rounded-md">
                                    <h3 class="text-white font-medium">25000 FCFA par mois</h3>
                                </span>
                            </div>
                            <div class="flex items-center gap-1 mt-3">
                                <span class="text-amber-500">
                                    <i class='bx bx-map' style="font-size: 24px"></i> 
                                </span>
                                <p class="text-lg text-white/80">55 rue Bonga, Moungali</p>
                            </div>
                        </div>
                        <div class="w-[35%] h-full hidden lg:flex flex-col justify-end items-end">
                            <span class="w-[40px] h-[40px] rounded-md flex items-center justify-center hover:cursor-pointer" style="background: #1a1a1a" title="Ajouter a vos favoris">
                                <i class="bx bx-heart text-white/80" style="font-size: 24px"></i>
                            </span>
                        </div>
                    </div>
                </div>

                {{-- Quatrieme slide  --}}

                <div class="swiper-slide items-slide" style="background-image: url({{ Vite::asset('resources/images/banner-1.jpg') }}); background-repeat: no-repeat;background-size:cover;">
                    <div class="w-full h-full py-10 px-20 hidden lg:flex" style="background: linear-gradient(180deg, rgba(255, 255, 255, 0) 0%, rgba(0, 0, 0, 0.8015581232) 100%);" >
                        <div class="w-[65%] h-full hidden lg:flex justify-end flex-col text-white">
                            <span class="p-2 bg-white/90 hover:bg-amber-500 text-black/90 hover:text-white self-start rounded-md">
                              <a href="#"><p class="" style="font-size: 14px">Appartement</p></a>
                            </span>
                            <div class="flex items-center gap-5 mt-3">
                                <h3 class="font-medium text-3xl self-start text-start">Maison confortable apartement</h3>
                                <span class="px-2 py-2 bg-amber-400 hover:bg-amber-500 rounded-md">
                                    <h3 class="text-white font-medium">25000 FCFA par mois</h3>
                                </span>
                            </div>
                            <div class="flex items-center gap-1 mt-3">
                                <span class="text-amber-500">
                                    <i class='bx bx-map' style="font-size: 24px"></i> 
                                </span>
                                <p class="text-lg text-white/80">55 rue Bonga, Moungali</p>
                            </div>
                        </div>
                        <div class="w-[35%] h-full hidden lg:flex flex-col justify-end items-end">
                            <span class="w-[40px] h-[40px] rounded-md flex items-center justify-center hover:cursor-pointer" style="background: #1a1a1a" title="Ajouter a vos favoris">
                                <i class="bx bx-heart text-white/80" style="font-size: 24px"></i>
                            </span>
                        </div>
                    </div>
                </div>
               
                
                
            </div>
            <button class="swiper-button-next right-6">
            </button>
            <button class="swiper-button-prev left-6"></button>
            {{-- Pagination au cas --}}
            {{-- <div class="swiper-pagination"></div> --}}
        </div>
        <div class="py-8 px-8 flex flex-col lg:hidden bg-[#EDF3FD]">
            <span class="p-2 bg-white/90 hover:bg-amber-500 text-black/90 hover:text-white self-start rounded-md">
                <a href="#"><p class="" style="font-size: 14px">Appartement</p></a>
            </span>
            <div class="flex items-center gap-5 mt-3 flex-wrap">
                <h3 class="font-bold text-3xl self-start text-start">Maison confortable apartement</h3>
                <span class="px-2 py-2 bg-amber-400 hover:bg-amber-500 rounded-md">
                    <h3 class="text-white font-medium">25000 FCFA par mois</h3>
                </span>
            </div>
            <div class="flex items-center gap-1 mt-3">
                <span class="text-amber-500">
                    <i class='bx bx-map' style="font-size: 24px"></i> 
                </span>
                <p class="text-lg text-amber-500">55 rue Bonga, Moungali</p>
            </div>
            <div class="mt-3">
                <span class="w-[40px] h-[40px] rounded-md flex items-center justify-center hover:cursor-pointer" style="background: #1a1a1a" title="Ajouter a vos favoris">
                    <i class="bx bx-heart text-white/80" style="font-size: 24px"></i>
                </span>
            </div>
        </div>

        
        <div class="mt-4 px-8 sm:px-10 lg:px-32 flex flex-wrap lg:flex-nowrap justify-between items-center py-4">
            <div class="flex gap-4 lg:gap-6">
                <div class="">
                    <img src="{{ Vite::asset('resources/images/banner-1.jpg') }}" alt="images" srcset="" class="rounded-md w-[122px] h-[66px] lg:w-[157px] lg:h-[78.5px]">
                </div>
                <img src="{{ Vite::asset('resources/images/banner-1.jpg') }}" alt="images" srcset="" class="rounded-md w-[122px] h-[66px] lg:w-[157px] lg:h-[78.5px]">
                <img src="{{ Vite::asset('resources/images/banner-1.jpg') }}" alt="images" srcset="" class="rounded-md w-[122px] h-[66px] lg:w-[157px] lg:h-[78.5px]">
                <img src="{{ Vite::asset('resources/images/banner-1.jpg') }}" alt="images" srcset="" class="rounded-md w-[122px] h-[66px] lg:w-[157px] lg:h-[78.5px]">
            </div>
            <div class="hidden sm:block">
                <span class=""><i class='bx bxs-camera text-xl lg:text-xl/[24px]'></i></span>
                <h4 class="font-bold text-xl lg:text-2xl">4</h4>
                <p class="text-sm lg:text-xl/[22px]">Photos</p>
            </div>
        </div>
    </section>
    <section id="details" class="flex flex-wrap-reverse md:flex-nowrap gap-4 px-4 py-8 md:px-16 md:py-16">
            <div class="w-[100%] md:w-[70%] pl-0 pr-2 pt-2 sm:p-4">
                <h2 class="font-bold text-xl" style="font-family: poppins">Description</h2>
                <p class="mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque sed odit amet inventore corrupti modi qui, quis fuga similique labore suscipit aliquam, porro deserunt iste nisi ducimus aut. Aliquid, nihil!
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam numquam maiores culpa nam dolores ducimus earum explicabo. Nesciunt neque asperiores autem recusandae tempore vitae, expedita architecto inventore quos corrupti sed.
                    Transformed through a tasteful and seem-less renovation, the floor plan has been beautifully adapted to modern life. Over 1,300 sq ft of living space which includes 3BRs and 3 baths. The wine cooler, sconzes, & TV’s does not stay. The moment you enter the suite you will love the floor to ceiling windows that enhance the view. This beautiful home’s understated street presence is in perfect harmony with this tranquil neighbourhood.

                    The grounds, while compact, are designed to provide private garden areas, patio area, decks and off street parking. drive in garage with workshop area, en-suite bath and White Cabinetry/Granite counters round out this beautiful home. This is a large alternative for those who are tired of condo living and all the strata council rules and regulations and strata fees.
                </p>
            </div>
            <div class="w-[100%] md:w-[30%] p-4 bg-gray-100 rounded-md">
                <h2 class="font-bold text-xl" style="font-family: poppins">Modalités</h2>
                <ul class="mt-2">
                    <li>Nombre de quotient: <span>2</span></li>
                    <li>Prix par mois: <span>25000F FCFA</span></li>
                </ul>
            </div>
    </section>
    <section id="commodité" class=" px-4 py-4 sm:py-8 md:px-16 md:py-16 flex flex-wrap-reverse md:flex-nowrap gap-2 sm:gap-4">
        <div class="w-[100%] md:w-[70%] p-4">
            <h2 class="font-bold text-xl" style="font-family: poppins">Commodités</h2>
            <div class="mt-2 flex flex-wrap justify-between">
                <div class="flex gap-1 items-center">
                    <span class=""><i class='bx bxs-camera' style="font-size: 22px"></i></span>
                    <a href="#"><h5>Wifi</h5></a>
                </div>
                
            </div>
        </div>
        <div class="w-[100%] md:w-[30%] p-4 bg-gray-100 rounded-md">
            <h2 class="font-bold text-xl" style="font-family: poppins">Regles du propriétaire</h2>
            <p class="mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium, atque maxime? Dignissimos ut nemo, temporibus, perferendis labore sapiente tenetur ex perspiciatis id repellat dolor quas maiores hic, enim quam totam.</p>
        </div>
        
    </section>
    <section id="commentaire"  class="py-8 md:px-16 md:py-16 flex">
        <div class="w-[100%] md:w-[70%] p-4">
            <h2 class="font-bold text-lg sm:text-xl" style="font-family: poppins"><span>3</span> Commentaires</h2>
            <div class="mt-5">
                <div class="flex gap-3">
                    <div class="">
                        <img src="{{ Vite::asset('resources/images/girl-glasses.jpg') }}" alt="comment-people" srcset="" class="w-[64px] h-[64px] rounded-md" style='max-width:none;'>
                    </div>
                    <div class="">
                        <h2 class="font-bold text-lg" style="font-family: poppins">John Doe</h2>
                        <p class="mt-1 text-base font-light">17 Novembre 2024 / <span class=""><i class='bx bxs-star text-amber-500'></i> <i class='bx bxs-star text-amber-500'></i> <i class='bx bxs-star text-amber-500'></i> <i class='bx bxs-star text-amber-500'></i> <i class='bx bxs-star text-amber-500'></i></span></p>
                        <p class="mt-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis amet exercitationem corporis, debitis eos eius totam modi voluptates cumque ratione adipisci libero. Saepe debitis laborum optio, provident omnis ab fugit.</p>
                    </div>
                    
                </div>
    
                <div class="mt-3 flex gap-3">
                    <div class="">
                        <img src="{{ Vite::asset('resources/images/girl-glasses.jpg') }}" alt="comment-people" srcset="" class="w-[64px] h-[64px] rounded-md" style='max-width:none;'>
                    </div>
                    <div class="">
                        <h2 class="font-bold text-lg" style="font-family: poppins">John Doe</h2>
                        <p class="mt-1 text-base font-light">17 Novembre 2024 / <span class=""><i class='bx bxs-star text-amber-500'></i> <i class='bx bxs-star text-amber-500'></i> <i class='bx bxs-star text-amber-500'></i> <i class='bx bxs-star text-amber-500'></i> <i class='bx bxs-star text-amber-500'></i></span></p>
                        <p class="mt-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis amet exercitationem corporis, debitis eos eius totam modi voluptates cumque ratione adipisci libero. Saepe debitis laborum optio, provident omnis ab fugit.</p>
                    </div>
                    
                </div>
    
                <div class="mt-3 flex gap-3">
                    <div class="">
                        <img src="{{ Vite::asset('resources/images/girl-glasses.jpg') }}" alt="comment-people" srcset="" class="w-[64px] h-[64px] rounded-md" style='max-width:none;'>
                    </div>
                    <div class="">
                        <h2 class="font-bold text-lg" style="font-family: poppins">John Doe</h2>
                        <p class="mt-1 text-base font-light">17 Novembre 2024 / <span class=""><i class='bx bxs-star text-amber-500'></i> <i class='bx bxs-star text-amber-500'></i> <i class='bx bxs-star text-amber-500'></i> <i class='bx bxs-star text-amber-500'></i> <i class='bx bxs-star text-amber-500'></i></span></p>
                        <p class="mt-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis amet exercitationem corporis, debitis eos eius totam modi voluptates cumque ratione adipisci libero. Saepe debitis laborum optio, provident omnis ab fugit.</p>
                    </div>
                    
                </div>
            </div>
            <div class="mt-6 p-4 bg-[#EDF3FD]">
                <h2 class="font-bold text-lg sm:text-xl" style="font-family: poppins">Laissez votre commentaire</h2>
                <p class="mt-4"><i class='bx bxs-star text-amber-500'></i> <i class='bx bxs-star text-amber-500'></i> <i class='bx bxs-star text-amber-500'></i> <i class='bx bxs-star text-amber-500'></i> <i class='bx bxs-star text-amber-500'></i></p>
                <form action="mt-4">
                    <div class="flex flex-col mt-2">
                        <label for="comment" class="font-medium">Commentaire</label>
                        <textarea style="resize: none" name="comment" id="comment" class="w-100 mt-3 focus:outline-none focus:border-none p-5 rounded-md" rows="8"></textarea>
                    </div>
                    <div class="mt-4">
                        <button style="font-family: poppins" class="bg-amber-500 px-4 py-3 rounded-md text-white font-bold">Envoyer votre commentaire</button>
                    </div>
                </form>
            </div>
           
        </div>
        <div class="w-[100%] md:w-[30%] p-4 bg-gray-100 hidden">
            <h2 class="font-bold text-xl" style="font-family: poppins">Regles du propriétaire</h2>
            <p class="mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium, atque maxime? Dignissimos ut nemo, temporibus, perferendis labore sapiente tenetur ex perspiciatis id repellat dolor quas maiores hic, enim quam totam.</p>
        </div>
    </section>
</x-layoult>