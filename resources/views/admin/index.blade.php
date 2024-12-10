<x-dashboard-layoult>
        <section class="py-5 px-5 bg-gray-100 flex justify-between">
                <div class="bg-white rounded-lg px-4 py-4 shadow-md w-52 h-24" >
                  <h2 class="font-bold">Proprietaires</h2>
                  <p class="mt-4">{{ $nbreOwner }}</p>
                </div>
                <div class="bg-white rounded-lg px-4 py-4 shadow-md w-52 h-24" >
                        <h2 class="font-bold">Locataires</h2>
                        <p class="mt-4">{{ $nbreTenant }}</p>
                </div>
                <div class="bg-white rounded-lg px-4 py-4 shadow-md w-52 h-24" >
                        <h2 class="font-bold">Maisons disponibles</h2>
                        <p class="mt-4">{{ $availableHouses }}</p>
                </div>
                <div class="bg-white rounded-lg px-4 py-4 shadow-md w-52 h-24" >
                        <h2 class="font-bold">Montant Deposé</h2>
                        <p class="mt-4">45000 FCFA</p>
                </div>
        </section>
        @if (count($recenteHouses) > 0)
                <section class="py-5 px-5">
                        <h2 class="text-center font-bold text-xl">Recentes maisons</h2>
                        <div class="container mx-auto my-8">
                        <table class="table-auto w-full bg-white shadow-md rounded-lg overflow-hidden">
                                <thead class="bg-gray-100">
                                <tr>
                                        <th class="px-4 py-2 text-left text-gray-600 font-semibold">Titre</th>
                                        <th class="px-4 py-2 text-left text-gray-600 font-semibold">Image</th>
                                        <th class="px-4 py-2 text-left text-gray-600 font-semibold">Prix</th>
                                        <th class="px-4 py-2 text-left text-gray-600 font-semibold">Quotient</th>
                                        <th class="px-4 py-2 text-left text-gray-600 font-semibold">Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($recenteHouses as $house)
                                        <tr class="border-b hover:bg-gray-50">
                                                <td class="px-4 py-3 text-gray-700">{{ $house->title }}</td>
                                                <td class="px-4 py-3">
                                                        @php
                                                        $images = $house->images ? explode(';', $house->images) : [];
                                                        @endphp
                                                        @if (!empty($images) && isset($images[0]))
                                                        <img src="{{ 'http://localhost:8000/storage/'.$images[0]  }}" alt="Image de la maison" class="w-16 h-16 rounded-md object-cover">
                                                        @else
                                                        <span class="text-gray-500 italic">Pas d'image</span>
                                                        @endif
                                                </td>
                                                <td class="px-4 py-3 text-gray-600">50 000 FCFA</td>
                                                <td class="px-4 py-3 text-gray-700 font-bold">4</td>
                                                <td class="px-4 py-3 flex space-x-2">
                                                <!-- Voir -->
                                                <a href="/detail/2" class="px-4 py-2 bg-green-500 text-white text-sm font-semibold rounded-md hover:bg-green-400 flex items-center">
                                                        <i class="bx bx-show mr-2"></i> Voir
                                                </a>
                                        
                                                <!-- Supprimer -->
                                                <button type="submit" form="delete-house" class="px-4 py-2 bg-red-500 text-white text-sm font-semibold rounded-md hover:bg-red-400 flex items-center">
                                                        <i class="bx bx-trash mr-2"></i> Supprimer
                                                </button>
                                                <form action="/supprimer/maison/2" method="post" class="hidden" id="delete-house">
                                                </form>
                                                </td>
                                        </tr>
                                @endforeach
                                
                                
                                
                                </tbody>
                        </table>
                        </div>
                </section>
        @else
                <h2 class="font-bold text-red-500 mt-4 text-center text-xl">Aucune maison</h2>
        @endif
</x-dashboard-layoult>