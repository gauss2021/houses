<x-layoult>
    <section id="formulaire" class="w-full px-8 py-8">
        <form action="">
            <div class="flex items-center flex-wrap gap-x-4 gap-y-4 lg:flex-nowrap">
                <!-- Prix Min/Max (Range) -->
                <div class="flex items-center">
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
    <section id="all-maison" class="bg-[#EDF3FD] py-10 px-8 sm:py-20 sm:px-16" >
        <div class="flex justify-between">
            <p class="font-medium text-xl">76 maisons</p>
            <div class="flex gap-4 hidden sm:block">
                <i class='bx bxs-grid-alt text-amber-500 cursor-pointer hover:text-amber-500' style="font-size: 24px" id="layoult-horizontal"></i>
                <i class='bx bx-spreadsheet hover:text-amber-500 cursor-pointer' style="font-size: 24px" id="layoult-vertical"></i>
            </div>
        </div>
        <div id="final-container-houses" class="flex flex-wrap mt-6 sm:justify-between gap-y-10">
    
            <x-items-house></x-items-house>

            <x-items-house></x-items-house>

            <x-items-house></x-items-house>

            <x-items-house></x-items-house>

            <x-items-house></x-items-house>

            <x-items-house></x-items-house>

            <x-items-house></x-items-house>

            <x-items-house></x-items-house>
            
            <x-items-house></x-items-house>
            
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
    <section id="conseil" class="py-10 px-8 sm:py-20 sm:px-16">
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