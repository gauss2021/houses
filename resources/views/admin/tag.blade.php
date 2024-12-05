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
     <section class="flex justify-between py-5 px-5 ">

        <div class="w-[45%]">

            @if (count($tags) >0)
            <table class="table-auto w-full bg-white shadow-md rounded-lg overflow-hidden">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-4 py-2 text-left text-gray-600 font-semibold">Titre</th>
                        <th class="px-4 py-2 text-left text-gray-600 font-semibold">Actions</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($tags as $item)
                    <tr class="border-b hover:bg-gray-50">
                        <td class="px-4 py-3 text-gray-700">{{ $item->name }}</td>
                        <td class="px-4 py-3 flex space-x-2">
                            <!-- Modifier -->
                            <a  href="{{ "/edit/tag/".$item->id}}" class="px-4 py-2 bg-blue-500 text-white text-sm font-semibold rounded-md hover:bg-blue-400 flex items-center">
                                <i class="bx bx-edit text-md"></i>
                            </a>
                            <!-- Supprimer -->
                            <button type="submit" form="{{'delete-house-'.$item->id }}"  class="px-4 py-2 bg-red-500 text-white text-sm font-semibold rounded-md hover:bg-red-400 flex items-center">
                                <i class="bx bx-trash text-md"></i>
                            </button>
                            <form action="{{ '/delete/tag/'.$item->id  }}" method="post" class="hidden" id="{{'delete-house-'.$item->id }}">
                                @csrf
                            </form>
                        </td>
                    </tr>
                    @endforeach

                        
                        
                    

                  

                    
        
                  
                </tbody>
            </table>

            @else 

                <p class="text-lg font-bold text-center text-red-500 mt-5">Aucun tag pour l'instant</p>

            @endif

           
        </div>

        <div class="w-[50%] bg-gray-100 px-4 py-4 rounded-md">
            <h2 class="text-center text-bold text-lg">Ajouter un nouveau tag</h2>

            <form method="POST" action="/admin/tags" class="mt-4 bg-white px-4 rounded-md py-4">
                @csrf
                <div class="flex flex-col">
                    <label class="font-semibold" for="name">Nom (<span class="text-red-500">*</span>)</label>
                    <input type="text" class="mt-2 border border-slate-300 rounded-md px-2 py-2 focus:border-slate-400" placeholder="Entrer le nom du tag" name="name" required>
                    @error('name')
                        <p class="mt-2 text-red-500 font-semibold">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mt-4">
                    <button class="bg-amber-500 text-white px-3 py-2 rounded w-full" type="submit">Ajouter</button>
                </div>
            </form>

        </div>
         
     </section>
</x-dashboard-layoult>