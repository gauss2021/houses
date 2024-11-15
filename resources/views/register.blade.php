<x-layoult>
    <div class="">
        <div class="h-full flex ps-8 pe-8 lg:pe-0 py-10 sm:py-16 sm:ps-10 xl:ps-20" >
            <div class="h-full w-full lg:w-1/2 bg-white rounded-xl md:p-5 xl:p-10">
                <h2 class="text-3xl text-center font-semibold text-amber-500">S'enregister</h2>
                <p class="mt-3 text-center">Creez votre compte afin de profiter de nos services</p>
                <form action="" method="post" class="mt-3">
                    <div class="flex flex-col">
                        <label class="font-semibold" for="">Noms (<span class="text-red-500">*</span>)</label>
                        <input type="text" class="mt-2 border border-slate-300 rounded-md px-2 py-2 focus:border-slate-400" placeholder="Entrer votre nom complet ">
                    </div>
                    <div class="flex flex-col mt-3">
                        <label class="font-semibold" for="">Email (<span class="text-red-500">*</span>)</label>
                        <input type="email" class="mt-2 border border-slate-300 rounded-md px-2 py-2 focus:border-slate-400" placeholder="Entrer votre adresse email">
                    </div>
                    <div class="flex flex-col mt-3">
                        <label class="font-semibold" for="">Mot de passe (<span class="text-red-500">*</span>)</label>
                        <input type="text" class="mt-2 border border-slate-300 rounded-md px-2 py-2 focus:border-slate-400" placeholder="Entrer votre mot de passe">
                    </div>
                    <div class="flex flex-col mt-3">
                        <label class="font-semibold" for="">Confirmer mot de passe (<span class="text-red-500">*</span>)</label>
                        <input type="text" class="mt-2 border border-slate-300 rounded-md px-2 py-2 focus:border-slate-400" placeholder="Confirmer votre mot de passe">
                    </div>
                    <div class="mt-3 flex gap-2 items-center">
                        <input type="checkbox" name="" id=""><h6 style="font-size: 14px" class="font-medium">Vous souhaitez vous inscrire en tant que proprietaire de biens immobilier</h6>
                    </div>
                    <div class="mt-3 flex gap-2 items-center">
                        <input type="checkbox" name="" id=""><h6 style="font-size: 14px" class="font-medium">Accepter les conditions d'utilisations</h6>
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