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

    <section class="px-5 py-5">
        @if (count($allOwner)>0)
        <h2 class="text-xl font-bold text-center">Tous les prpprietaires</h2>
        <div class="container mx-auto my-8">
            <table class="table-auto w-full bg-white shadow-md rounded-lg overflow-hidden">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-4 py-2 text-left text-gray-600 font-semibold">Nom complet</th>
                        <th class="px-4 py-2 text-left text-gray-600 font-semibold">Image</th>
                        <th class="px-4 py-2 text-left text-gray-600 font-semibold">Tel</th>
                        <th class="px-4 py-2 text-left text-gray-600 font-semibold">Maison actuelle</th>
                        <th class="px-4 py-2 text-left text-gray-600 font-semibold">Date d'inscription</th>
                        <th class="px-4 py-2 text-left text-gray-600 font-semibold">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($allOwner as $owner)
                        <tr class="border-b hover:bg-gray-50">
                                <td class="px-4 py-3 text-gray-700">{{ $owner->name }}</td>
                                <td class="px-4 py-3">
                                    <img src="{{$owner->user->image  }}" alt="Image de la maison" class="w-16 h-16 rounded-md object-cover">
                                </td>
                                <td class="px-4 py-3 text-gray-600">{{ $owner->user->tel }}</td>
                                <td class="px-4 py-3 text-gray-700 font-bold">{{ count($owner->houses) }}</td>
                                <td class="px-4 py-3 text-gray-700 font-bold">{{ $owner->user->created_at->format('d/m/Y') }}</td>
                                <td class="px-4 py-3">
                        
                                    <!-- Supprimer -->
                                    <button type="submit" form="{{ 'delete-house-'.$owner->id }}" class="px-4 py-2 bg-red-500 text-white text-sm font-semibold rounded-md hover:bg-red-400 flex items-center">
                                            <i class="bx bx-trash mr-2"></i> Supprimer
                                    </button>
                                    <form action="{{ '/admin/delete/owner/'.$owner->id }}" method="post" class="hidden" id="{{ 'delete-house-'.$owner->id }}">
                                        @csrf
                                    </form>
                                </td>
                        </tr>
                    @endforeach
                   
                </tbody>
            </table>
            <div class="mt-12 sm:flex justify-center">
                {{ $allOwner->links() }}
            </div>
        </div>    
        @else
            <div class="flex justify-center">
                <h3 class="font-bold text-xl  text-red-500">Aucun proprietaire pour l'instant</h3>
            </div>    
        @endif
        
    </section>
</x-dashboard-layoult>