<x-dashboard-layoult>
      <section class="py-5 px-5 bg-gray-100">
        <h2 class="text-lg text-center font-bold">Modifier tag</h2>
         <form class="mt-4 bg-white px-4 rounded-md py-4">
            <div class="flex flex-col">
                <label class="font-semibold" for="name">Nom (<span class="text-red-500">*</span>)</label>
                    <input type="text" class="mt-2 border border-slate-300 rounded-md px-2 py-2 focus:border-slate-400" placeholder="Entrer le nom du tag" name="name" value="{{ $tag->name }}" required>
                    @error('name')
                        <p class="mt-2 text-red-500 font-semibold">{{ $message }}</p>
                    @enderror
            </div>
            <div class="mt-4">
                <button class="bg-amber-500 text-white px-3 py-2 rounded w-full" type="submit">Modifier</button>
            </div>
         </form>
      </section>
</x-dashboard-layoult>