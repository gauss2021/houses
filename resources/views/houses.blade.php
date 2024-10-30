<x-layoult>
    <section class="w-full px-8 py-8">
        <form action="">
            <div class="flex items-center space-x-4">
                <!-- Prix Min/Max (Range) -->
                <div class="flex items-center space-x-2">
                    <label for="prix" class="text-sm font-semibold">Prix minimal</label>
                    <input type="range" id="prix-min" name="prix_min" min="0" max="25000" step="500" class="w-40 h-2 py-2 bg-gray-300 rounded-full">
                    <span id="min-price" class="text-gray-500 text-sm">0 FCFA</span>
                    <label for="prix" class="text-sm font-semibold">Prix maximal</label> 
                    <input type="range" id="prix-max" name="prix_max" min="40000" max="200000" step="500" class="w-40 h-2 py-2 bg-gray-300 rounded-full">
                    <span id="max-price" class="text-gray-500 text-sm">40000 FCFA</span>
                </div>
            
                <!-- Quartier -->
                <div class="flex items-center w-1/4">
                    <label for="quartier" class="mr-2 text-sm font-semibold">Quartier</label>
                    <select id="quartier" name="quartier" class="border border-gray-300 rounded p-2 w-full quartier-basic-multiple focus:outline-none focus:border-none" name="states[]" multiple="multiple" aria-placeholder="Les quartiers">
                        <option></option>
                        <option value="appartement">Total</option>
                        <option value="villa">Diata</option>
                        <option value="studio">Moungalie</option>
                        <option value="chambre">Plateaux</option>
                    </select>
                </div>
            
                <!-- Type de Logement -->
                <div class="flex items-center w-1/4">
                    <label for="type" class="mr-2 text-sm font-semibold">Type</label>
                    <select id="type" name="type" class="border border-gray-300 rounded p-2 w-full type-multiple focus:outline-none focus:border-none" name="states[]" multiple="multiple">
                        <option></option>
                        <option value="appartement">Appartement</option>
                        <option value="villa">Villa</option>
                        <option value="studio">Studio</option>
                        <option value="chambre">Chambre</option>
                    </select>
                </div>
            
                <!-- Bouton de recherche -->
                <div class="flex justify-end">
                    <button type="submit" class="bg-amber-500 text-white p-2 rounded hover:bg-blue-600">Rechercher</button>
                </div>
            </div>
        </form>
    </section>
    <section id="all-maison" class="bg-[#EDF3FD] py-20 px-16" style="height: 1800px">
        <div class="flex justify-between">
            <p class="font-medium text-xl">76 maisons</p>
            <div class="flex gap-4" >
                <i class='bx bxs-grid-alt text-amber-500' style="font-size: 24px"></i>
                <i class='bx bx-spreadsheet hover:text-amber-500 ' style="font-size: 24px"></i>
            </div>
        </div>
        <div class="flex flex-wrap mt-6 justify-between gap-y-10">
    
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
        <div class="flex mt-12 gap-4 justify-center">
              <span class="flex items-center justify-center px-4 py-2 border rounded-md cursor-pointer bg-amber-500 text-white">
                    1
              </span>
              <span class="flex items-center justify-center px-4 py-2 border rounded-md bg-white cursor-pointer hover:text-white hover:bg-amber-500">
                2
              </span>
              <span class="flex items-center justify-center px-4 py-2 border rounded-md bg-white cursor-pointer hover:text-white hover:bg-amber-500">
                3
              </span>
              <span class="flex items-center justify-center px-4 py-2 border rounded-md bg-white cursor-pointer hover:text-white hover:bg-amber-500">
                4
              </span>
                <span class="flex items-center justify-center px-4 py-2 border rounded-md bg-white cursor-pointer hover:text-white hover:bg-amber-500">
                5
                </span>
        </div>
    </section>
    <section id="conseil" class="py-20 px-16">
        <div class="w-full flex justify-between">
            <div class="w-[49%]">
                <h2 class="font-bold text-2xl" style="font-family: poppins">Rentabilisez ou trouvez votre bien en quelques clics !</h2>
                <p class="mt-3 font-serif">Vous êtes propriétaire ? Profitez de notre plateforme pour mettre votre bien en location en toute simplicité et atteindre un large public d’intéressés. Vous cherchez un logement ? Abonnez-vous pour explorer des centaines d’annonces vérifiées et faites votre choix parmi une grande variété de maisons et appartements.</p>
                <div class="flex gap-4 mt-4">
                    <a href="#" class="relative font-bold rounded-sm bg-amber-500 px-4 py-2 text-white hover:bg-amber-300" style="font-family: poppins">
                      Publier votre maison
                    </a>
                    <a href="#" class="relative font-bold rounded-sm bg-amber-500 px-4 py-2 text-white hover:bg-amber-300" style="font-family: poppins">
                        Payer votre abonnement
                    </a>
                  </div>
            </div>
            <div class="w-[49%]">
                <img src="{{ asset('images/men-glasses.jpg') }}" alt="girl-glasses" srcset="" style="width: 600px;height:400px" class="rounded-lg" >
            </div>
        </div>
    </section>

</x-layoult>