<x-dashboard-layoult>

    @if (session('success'))
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            Toastify({
                text: "{{ session('success') }}",
                duration: 3000,
                close: true,
                gravity: "top",
                position: "center",
                backgroundColor: "linear-gradient(to right, #00b09b)",
            }).showToast();
        });
    </script>
        
    @endif

    @if (count($houses)> 0)
    <div class="px-8 py-10">
        <h3 class="font-bold text-center text-xl">La liste de toutes mes maisons</h3>

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



                    @foreach ($houses as $house)
                        <tr class="border-b hover:bg-gray-50">
                            <td class="px-4 py-3 text-gray-700"> {{ \Illuminate\Support\Str::limit($house->title, 25, '...') }}</td>
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
                            <td class="px-4 py-3 text-gray-600">
                                {{ number_format($house->price, 0, ',', ' ') }} FCFA
                            </td>
                            <td class="px-4 py-3 text-gray-700 font-bold">{{ $house->quotient}}</td>
                            <td class="px-4 py-3 flex space-x-2">
                                <!-- Voir -->
                                <a href="{{ '/detail/'.$house->id }}" class="px-4 py-2 bg-green-500 text-white text-sm font-semibold rounded-md hover:bg-green-400 flex items-center">
                                    <i class="bx bx-show mr-2"></i> Voir
                                </a>
                                <!-- Modifier -->
                                <a  href="{{ "/modifier/detail/maison/".$house->id }}" class="px-4 py-2 bg-blue-500 text-white text-sm font-semibold rounded-md hover:bg-blue-400 flex items-center">
                                    <i class="bx bx-edit mr-2"></i> Modifier
                                </a>
                                <!-- Supprimer -->
                                <button type="submit" form="delete-house" class="px-4 py-2 bg-red-500 text-white text-sm font-semibold rounded-md hover:bg-red-400 flex items-center">
                                    <i class="bx bx-trash mr-2"></i> Supprimer
                                </button>
                                <form action="/supprimer/maison/{{ $house->id }}" method="post" class="hidden" id="delete-house">
                                    @csrf
                                </form>
                            </td>
                        </tr>
                    @endforeach

                    <!-- Exemple de ligne -->
                    

                    
        
                  
                </tbody>
            </table>
        </div>
        
        

    </div>
    @else
    <div class="py-20">
        <p class="text-center text-red-500 text-xl font-bold">Vous avez aucune maison en location pour le moment</p>
    </div>
       
    @endif

    
    

    
   
    
</x-dashboard-layoult>