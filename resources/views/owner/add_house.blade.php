<x-dashboard-layoult>
    <div class="px-10 py-10">
       <div class="flex items-center justify-between">
            <h2 class="font-bold text-center text-xl">Ajouter une nouvelle maison</h2>
            <h4 class="text-red-500">NB : Tous les champs avec des * sont obligatoires</h4>
       </div>
        <div class="py-4">
            <form action="/ajouter/maison" method="post" class="bg-gray-100 py-6 px-6 rounded-md" enctype='multipart/form-data'>
                @csrf 

                <div class="flex gap-4">
                    <div class="w-full flex flex-col space-y-2">
                        <label for="title" class="font-bold">Titre (<span class="text-red-500">*</span>)</label>
                        <input type="text" name="title" class="px-4 py-2 rounded-md" placeholder="Entrer un titre pour votre maison" required>
                        @error('title')
                            <p class="mt-2 text-red-500 font-semibold">{{ $message }}</p> 
                        @enderror
                    </div>
                    
                </div>
                <div class="mt-4 flex gap-4">
                    <div class="w-full flex flex-col space-y-2">
                        <label for="address" class="font-bold">Adresse (<span class="text-red-500">*</span>)</label>
                        <input type="text" name="address" class="px-4 py-2 rounded-md" placeholder="Entrer l'adresse complete de votre maison" required>
                        @error('title')
                            <p class="mt-2 text-red-500 font-semibold">{{ $message }}</p> 
                        @enderror
                    </div>
                    
                </div>
                <div class="mt-4 flex gap-3">
                    <div class="w-1/2 flex flex-col space-y-2">
                        <label for="price" class="font-bold">Prix par mois (<span class="text-red-500">*</span>)</label>
                        <input type="number" name="price" class="px-4 py-2 rounded-md" placeholder="Entrer le prix par mois" required>
                        @error('price')
                            <p class="mt-2 text-red-500 font-semibold">{{ $message }}</p> 
                        @enderror
                    </div>
                    <div class="w-1/2 flex flex-col space-y-2">
                        <label for="quotient" class="font-bold">Nombre de quotient (<span class="text-red-500">*</span>)</label>
                        <input type="number" name="quotient" class="px-4 py-2 rounded-md" placeholder="Entrer le nombre de quotient" required>
                        @error('quotient')
                            <p class="mt-2 text-red-500 font-semibold">{{ $message }}</p> 
                        @enderror
                    </div>
                </div>
                <div class="mt-4">
                    <div class="space-y-2">
                        <label for="description" class="font-bold">Description de la maison (<span class="text-red-500">*</span>)</label>
                        <textarea name="description" rows="5" class="w-full px-4 py-2" style="resize: none" placeholder="Entrer une description de votre maison"></textarea>
                        @error('description')
                            <p class="mt-2 text-red-500 font-semibold">{{ $message }}</p> 
                        @enderror
                    </div>
                </div>
                <div class="mt-4">
                    <div class="space-y-2">
                        <label for="rules" class="font-bold">Vos regles (<span class="text-red-500">*</span>)</label>
                        <textarea name="rules" rows="5" class="w-full px-4 py-2" style="resize: none" placeholder="Entrer vos regles pour votre maison"></textarea>
                        @error('rules')
                            <p class="mt-2 text-red-500 font-semibold">{{ $message }}</p> 
                        @enderror
                    </div>
                </div>
                <div class="mt-4">
                    <div class="w-full flex flex-col space-y-2">
                        <label for="images[]" class="font-bold">Images (<span class="text-red-500">*</span>)</label>
                        <input type="file" multiple  placeholder="Choississez des images de la maison" name="images[]" required >
                        @error('images[]')
                            <p class="mt-2 text-red-500 font-semibold">{{ $message }}</p> 
                        @enderror
                    </div>
                    
                </div>
                <hr class="mt-4">
                <div class="mt-2">
                    <div class="w-full flex flex-col space-y-2">
                        <label for="tags" class="font-bold">Tags</label>
                        <select id="tags" name="tags[]" class="px-4 py-3 rounded-md w-full tag-basic-multiple focus:outline-none focus:border-none"  multiple="multiple" aria-placeholder="Les quartiers">
                            <option></option>
                            @foreach ($tags as $tag)
                                <option value="{{ $tag->name }}">{{ $tag->name }}</option>
                            @endforeach

                        </select>
                    </div>
                    
                </div>
                <div class="mt-4">
                    <button type="submit" class="py-2 px-4 bg-amber-500 text-white hover:bg-amber-400 rounded-md">Terminer</button>
                </div>
                
            </form>
        </div>
    </div>
</x-dashboard-layoult>