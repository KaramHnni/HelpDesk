<nav class="flex  items-center justify-between w-full bg-white">

    <div style="width:15%;" class=" text-center block  border-r border-b border-solid border-grey-lightest font-bold text-2xl py-6  "><a href="#" class="text-center">HelpDesk</a></div>
    <input type="text" class=" font-semibold py-2 pl-12 flex-grow " placeholder="Search">
    <ul class="relative liste-exterieure-navigation pr-8 " >
    <li style="border-radius:20px; background:linear-gradient(25deg,#d49961, #8a3cd3);" class=" text-white font-bold  px-4 py-2">
        N
        <ul class="absolute liste-interieure-navigation bg-white shadow text-center py-2 px-4">
                <li><a class="block text-center py-4 font-light " href="#"> Mon Profile</a> </li>
                <li><a class="block text-center py-4 font-light " href="{{route('admin.deconnexion')}}">Deconnexion</a></li>
                </ul>
        </ul>
    </li>
</nav>