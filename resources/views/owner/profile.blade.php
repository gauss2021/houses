<x-dashboard-layoult>
    <section class="py-5 px-5 mt-3">

        <div class="flex">
            <div class="w-[30%]">
                <p class="font-bold text-center">Votre image de profile</p>
                <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="profile-picture" class="rounded-md mt-3 cursor-pointer"  srcset="">
            </div>
            <div class="w-[70%] bg-gray-100 py-4 px-4 rounded-md">
              
                <form action="" method="post">
                    @csrf
                    <div class="flex flex-col">
                        <label class="font-semibold" for="complete_name">Noms (<span class="text-red-500">*</span>)</label>
                        <input type="text" class="mt-2 border border-slate-300 rounded-md px-2 py-2 focus:border-slate-400" placeholder="Entrer votre nom complet " name="complete_name" value="{{ old('complete_name') }}" required>
                        @error('complete_name')
                            <p class="mt-2 text-red-500 font-semibold">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="flex flex-col mt-3">
                        <label class="font-semibold" for="tel">Tel (<span class="text-red-500">*</span>)</label>
                        <input type="text" class="mt-2 border border-slate-300 rounded-md px-2 py-2 focus:border-slate-400" placeholder="Entrer votre nom complet " name="tel" value="{{ old('tel') }}" required>
                        @error('tel')
                            <p class="mt-2 text-red-500 font-semibold">{{ $message }}</p>
                        @enderror
                    </div>
                    <hr>
                    <div class="flex flex-col mt-3">
                        <label class="font-semibold" for="old_password">Ancien mot de passe (<span class="text-red-500">*</span>)</label>
                        <input type="passe" class="mt-2 border border-slate-300 rounded-md px-2 py-2 focus:border-slate-400" placeholder="Entrer votre nom complet " name="old_password" value="{{ old('old_password') }}" required>
                        @error('old_password')
                            <p class="mt-2 text-red-500 font-semibold">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="flex flex-col mt-3">
                        <label class="font-semibold" for="new_password">Nouveau mot de passe (<span class="text-red-500">*</span>)</label>
                        <input type="passe" class="mt-2 border border-slate-300 rounded-md px-2 py-2 focus:border-slate-400" placeholder="Entrer votre nom complet " name="new_password" value="{{ old('new_password') }}" required>
                        @error('new_password')
                            <p class="mt-2 text-red-500 font-semibold">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mt-3">
                        <button class="bg-amber-500 px-4 py-2 font-bold text-white rounded-md">Modifier</button>
                    </div>
                </form>
            </div>
        </div>

    </section>
    
</x-dashboard-layoult>