<div style="width:15%;" class=" h-screen bg-white py-8 shadow">

    <a href="#" class="text-2xl font-bold block text-center mb-16">HelpDesk</a>
    
    <a style="padding-left:20px;" class="block py-4 bg-blue-lighter text-blue-darker border-blue-darker border-l-4 border-solid ">Tableau de bord</a>
    <a style="padding-left:20px;" class="block py-4  border-white border-l-4 border-solid ">Consultation</a>
    <a style="padding-left:20px;" class="block py-4 border-white border-l-4 border-solid ">Tickets</a>
    <div style="bottom:20px; padding-left:20px; width:15%;" class="absolute border-white border-l-4 border-solid">
    <a href="#" style="border-radius:25px; " class="inline-block px-4  py-4 border-solid border-blue-light border mb-4 font-bold ">{{auth()->user()->employé->Initials}}</a>
    <a href="{{route('logout')}}" class="block">Deconnexion</a>
    </div>
</div>