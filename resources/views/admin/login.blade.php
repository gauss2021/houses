<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-gray-100">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        

        {{-- SELECt 2 --}}
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
        

       @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>
    <body class="font-sans antialiased  bg-gray-100 text-[#20282D]">

        <section class="px-32 py-20 flex justify-center items-center">
                <div class="bg-white rounded-md w-[500px] py-6">
                     <h2 class="text-bold text-center text-xl">Bienvenu admin</h2>
                     <form action="/connexion" method="post" class="mt-4 px-5">
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
                        <button type="submit" class="py-2 px-3 bg-amber-500 hover:bg-amber-400 lg:mt-3 mt-2 w-full rounded-md text-white">Se connecter</button>
                     </form>
                </div>
        </section>
       
       
    </body>
</html>
