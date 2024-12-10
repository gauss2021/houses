<x-dashboard-layoult>
    <section class="px-5 py-5">

        @if (count($allTenant) > 0)
        <h2 class="text-xl font-bold text-center">Tous les locataires</h2>
        <div class="container mx-auto my-8">
            <table class="table-auto w-full bg-white shadow-md rounded-lg overflow-hidden">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-4 py-2 text-left text-gray-600 font-semibold">Nom complet</th>
                        <th class="px-4 py-2 text-left text-gray-600 font-semibold">Image</th>
                        <th class="px-4 py-2 text-left text-gray-600 font-semibold">Tel</th>
                        <th class="px-4 py-2 text-left text-gray-600 font-semibold">Maison actuelle</th>
                        <th class="px-4 py-2 text-left text-gray-600 font-semibold">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($allTenant as $tenant)
                        <tr class="border-b hover:bg-gray-50">
                                <td class="px-4 py-3 text-gray-700">{{ $tenant->name }}</td>
                                <td class="px-4 py-3">
                                    <img src="{{$tenant->user->image  }}" alt="Image de la maison" class="w-16 h-16 rounded-md object-cover">
                                </td>
                                <td class="px-4 py-3 text-gray-600">{{ $tenant->user->tel }}</td>
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
            <div class="mt-12 sm:flex justify-center">
                {{ $allTenant->links() }}
            </div>
        </div>
        @else
            <div class="flex justify-center">
                <h3 class="font-bold text-xl  text-red-500">Aucun locataire pour l'instant</h3>
            </div>
        @endif


    </section>
</x-dashboard-layoult>