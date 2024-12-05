<x-dashboard-layoult>
    <section class="py-5 px-6 bg-gray-100">
        <h2 class="text-bold text-center text-2xl">Details de la maison</h2>
        <div class="mt-4">
                @php
                    $images = $house->images ? explode(';', $house->images) : [];
                @endphp
                @if (!empty($images) && isset($images[0]))
                    <img src="{{ 'http://localhost:8000/storage/'.$images[0]  }}" alt="Image de la maison" class="w-full h-72 rounded-md object-cover">
                @endif
        </div>
        <div class="mt-4 flex gap-4">
            @foreach ($images as $image)
                <img  src="{{ 'http://localhost:8000/storage/'.$image  }}" alt="Image de la maison" class="w-16 h-16 rounded-md object-cover cursor-pointer">
            @endforeach
            
        </div>
        <div class="mt-4">
            <p class="text-center text-bold text-lg">{{ $house->title }}</p>
        </div>
        <div class="mt-4 flex flex-items-center justify-between">
            <p class="font-bold">Prix par mois: <span>{{ number_format($house->price, 0, ',', ' ').' FCFA' }}</span></p>
            <p class="font-bold">Nombre de quotient: <span>{{ $house->quotient }}</span></p>
        </div>

        <div class="mt-4">
            <p class="font-bold">Adresse : <span>{{ $house->address}}</span></p>
        </div>

        <hr class="mt-4">
        <div class="mt-4">
            <p class="font-bold">Description</p>
            <p class="mt-4">{{ $house->description }}</p>
        </div>
        <div class="mt-4">
            <p class="font-bold text-red-500">Vos regles</p>
            <p class="mt-3">{{ $house->rules }}</p>
        </div>
        <hr class="mt-4">

        @if (count($house->tags) >0 )
            <div class="mt-4 flex flex-wrap gap-3">
                @foreach ($house->tags as $tag)
                    <span class="px-4 py-3 bg-gray-300 rounded-xl">
                        {{ $tag->name }}
                    </span> 
                @endforeach
                 
            </div>
        @endif

        

        <div class="mt-4 flex justify-between">
            <a href="{{ "/modifier/detail/maison/".$house->id }}" class="px-4 py-2 bg-blue-500 text-white text-sm font-semibold rounded-md hover:bg-blue-400 flex items-center">
                <i class="bx bx-edit mr-2"></i> Modifier
            </a>
            <!-- Supprimer -->
            <button class="px-4 py-2 bg-red-500 text-white text-sm font-semibold rounded-md hover:bg-red-400 flex items-center">
                <i class="bx bx-trash mr-2"></i> Supprimer
            </button>
        </div>
    </section>

</x-dashboard-layoult>