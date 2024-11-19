@props(['id',"title","price","image"])

<div class="w-[100%] sm:w-[48%] lg:w-[32%] border border-transparent hover:border-amber-500 group transition-colors duration-300 rounded-xl">
    <div class="relative sm:h-[200px] md:h-[260px]">
       <a href="{{ "/maison/$id" }}"> 
        <img src={{ $image }} alt="" srcset="" class="rounded-xl h-full w-full cursor-pointer"></a>
        <span class="absolute top-2 left-2 px-3 bg-white rounded-2xl text-amber-500 flex items-center gap-1"><i class='bx bxs-camera text-amber-500' style="font-size: 22px"></i><span class="font-medium">3</span></span>
        <span class="absolute top-2 right-2 p-1 bg-white rounded-full text-amber-500 flex justify-center"><i class='bx bx-heart' style="font-size: 22px"></i></span>
    </div>
    <a href="{{ "/maison/$id" }}"><h3 class="font-bold mt-4 group-hover:text-amber-500 transition-colors duration-300" style="font-family: poppins">{{ $title }}</h3></a> 
    <div class="mt-4 flex gap-1 items-center">
        <i class='bx bx-location-plus text-amber-500' style="font-size: 22px"></i>
        <p class="font-serif">55 Rue Bonga moungalie</p>
    </div>
    <p class="mt-2 font-medium" style="font-family: poppins">Appartement</p>

    <div class="flex mt-3 justify-between">
        <div>
            <p class="font-serif"><span class="font-bold" style="font-family: poppins">{{ $price }}</span>/ Par mois</p>
        </div>
        <div class="flex gap-1 items-center">
            <span class="text-amber-500">2</span>
            <i class='bx bx-bed text-amber-500' style="font-size: 20px"></i>  
            <span class="text-amber-500">2</span>
            <i class='bx bx-bath text-amber-500' style="font-size: 20px"></i>  
            <span class="text-amber-500">1</span>
            <i class='bx bx-door-open text-amber-500' style="font-size: 20px"></i>  
        </div>
    </div>
    <div class="mt-4 flex gap-3 items-center">
        <div class="flex gap-1">
            <i class='bx bxs-star text-amber-500' style='font-size:20px' ></i>
            <i class='bx bxs-star text-amber-500' style='font-size:20px' ></i>
            <i class='bx bxs-star text-amber-500' style='font-size:20px' ></i>
            <i class='bx bxs-star text-amber-500' style='font-size:20px' ></i>
            <i class='bx bxs-star text-amber-500' style='font-size:20px' ></i>
        </div>
       <p class="text-slate-400 font-serif" style="font-size: 14px" ><span class="font-medium text-black" style="font-family: poppins">Ajouter:</span> le 17 Octobre 2024</p> 
    </div> 
</div>

