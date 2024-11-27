<x-layoult>
    <div class="h-[420px] sm:h-[65vh] md:h-[70vh] lg:h-[90vh] xl:h-[100vh] inscription">
        <div class="h-full bg-black/30 py-6 sm:py-6 lg:py-10 xl:py-20 flex gap-3 px-8 md:px-20" >
            <div class="h-full w-full sm:w-[65%] md:w-[70%] lg:w-1/2 bg-white rounded-xl sm:px-4 py-4 px-6 sm:py-2 md:p-6 lg:p-10">
                <h2 class="text-2xl lg:text-3xl text-center font-semibold text-amber-500">Se connecter</h2>
                <p class="mt-2 lg:mt-3 text-center">Welcome back</p>
                <form action="/connexion" method="post" class="lg:mt-3 mt-2">
                   @csrf
                    <div class="flex flex-col lg:mt-3 mt-2">
                        <label class="font-semibold" for="tel">Tel (<span class="text-red-500">*</span>)</label>
                        <input type="tel" class="mt-2 border border-slate-300 rounded-md px-2 py-2 focus:border-slate-400" placeholder="Entrer votre numero de telephone" name="tel" value="{{ old('tel') }}" required>
                        @error('tel')
                            <p class="mt-2 text-red-500 font-semibold">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="flex flex-col lg:mt-3 mt-2">
                        <label class="font-semibold" for="">Mot de passe (<span class="text-red-500">*</span>)</label>
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
                    
                    <button class="py-2 px-3 bg-amber-500 lg:mt-3 mt-2 w-full rounded-md text-white">Se connecter</button>
                    <div class="lg:mt-3 mt-2 flex justify-center gap-2">
                        <h6 class="font-medium" style="font-size: 16px">Pas encore de compte?</h6>
                        <a href="/inscription" class="text-amber-500 hover:text-amber-600">Inscrivez vous</a>
                    </div>
                </form>
            </div>
            <div>

            </div>
        </div>
    </div>
</x-layoult>