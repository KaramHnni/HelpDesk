<div style="width:15%; height:100vh;" class="bg-white">

    <ul class="p-0 my-4">
        <li><a href="#" class="block px-12 py-4 text-grey-dark mb-4 ">MENU</a></li>
    <li class="px-10  {{ request()->is('admin/dashboard') ? 'border-l-4 border-blue-dark border-solid bg-blue-lightest text-blue-dark font-bold ' : '' }} l"><a href="{{route('admin.dashboard')}}" class="   block py-4">Tableau de bord</a></li>
        <li class="px-10 {{ request()->is('admin/employees') ? 'border-l-4 border-blue-dark border-solid bg-blue-lightest text-blue-dark font-bold ' : '' }}"><a href="{{route('admin.employees')}}" class="   block py-4">Employés</a></li>
        <li class="px-10"><a href="#" class="block py-4">Maintenances</a></li>
        <li class="px-10"><a href="#" class="block py-4">Departements</a></li>
        <li class="px-10"><a href="#" class="block py-4">Tickets</a></li>
        <li class="px-10 "><a href="#" class="block py-4">Taches</a></li>
        <li class="px-10"><a href="#" class="block py-4">Base des problemes</a></li>
        <li class="px-10"><a href="#" class="block py-4">Base de connaissances</a></li>

    </ul>
</div>