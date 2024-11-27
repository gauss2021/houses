<x-layoult>
    <div class="">
        <div class="h-full flex ps-8 pe-8 lg:pe-0 py-10 sm:py-16 sm:ps-10 xl:ps-20" >
            <div class="h-full w-full lg:w-1/2 bg-white rounded-xl md:p-5 xl:p-10">
                <h2 class="text-3xl text-center font-semibold text-amber-500">S'enregister</h2>
                <p class="mt-3 text-center">Creez votre compte afin de profiter de nos services</p>
                <form action="/inscription" method="Post" class="mt-3">
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
                        <input type="tel" class="mt-2 border border-slate-300 rounded-md px-2 py-2 focus:border-slate-400" placeholder="Entrer votre numero de telephone" name="tel" value="{{ old('tel') }}" required>
                        @error('tel')
                            <p class="mt-2 text-red-500 font-semibold">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="flex flex-col mt-3">
                        <label class="font-semibold" for="password">Mot de passe (<span class="text-red-500">*</span>)</label>
                        <div class="mt-2 flex items-center gap-3 w-full border border-slate-300 rounded-md">
                            <input type="password" class="border-0 rounded-md px-2 py-2 focus:outline-none focus:border-none w-[90%]" placeholder="Entrer votre mot de passe" name="password" value="{{ old('password') }}" required>
                            <span class="cursor-pointer">
                                <i class='bx bx-show'style="font-size:26px" id="show"></i>
                            </span>
                        </div>
                        @error('password')
                            <p class="mt-2 text-red-500 font-semibold">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="flex flex-col mt-3">
                        <label class="font-semibold" for="password_confirmation">Confirmer mot de passe (<span class="text-red-500">*</span>)</label>
                        <div class="mt-2 flex items-center gap-3 w-full border border-slate-300 rounded-md">
                            <input type="password" class="border-0 rounded-md px-2 py-2 focus:outline-none focus:border-none w-[90%]" placeholder="Confirmer votre mot de passe" name="password_confirmation" value="{{ old('password_confirmation') }}" required>
                            <span class="cursor-pointer">
                                <i class='bx bx-show'style="font-size:26px" id="show_confirmation"></i>
                            </span>
                        </div>
                    </div>
                    <div class="mt-3 flex gap-2 items-center">
                        <input type="checkbox" name="owner" id=""><h6 style="font-size: 14px" class="font-medium">Vous souhaitez vous inscrire en tant que proprietaire de biens immobilier</h6>
                    </div>
                    <div class="mt-3">
                        <div class="flex gap-2 items-center">
                            <input type="checkbox" name="allow" id=""><h6 style="font-size: 14px" class="font-medium" required>Accepter les conditions d'utilisations</h6>
                        </div>
                        @error('allow')
                        <p class="mt-2 text-red-500 font-semibold">{{ $message}}</p> 
                        @enderror($allow)
                            
                    
                        
                    </div>

                    <button class="py-2 px-3 bg-amber-500 mt-3 w-full rounded-md text-white">S'enregister</button>
                    <div class="mt-3 flex justify-center gap-2">
                        <h6 class="font-medium" style="font-size: 16px">Avez vous deja un compte?</h6>
                        <a href="/connexion" class="text-amber-500 hover:text-amber-600">Se connecter</a>
                    </div>
                </form>
            </div>
            <div class="lg:w-1/2" style="background:url({{ Vite::asset('resources/images/register-gars.jpg') }});background-repeat: no-repeat;background-size:cover;">
                
            </div>
        </div>
    </div>
</x-layoult>