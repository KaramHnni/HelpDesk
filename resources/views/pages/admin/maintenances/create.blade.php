@extends('layouts.admin')
@section('page-title')
Ajout d'un agent
@endsection

@section('main-content')
    @include('components.admin.navigation')
    <div class="flex">
        @include('components.admin.sidebar')
        <div class="flex-grow h-screen">
             <div style="width:60%;" class="mx-auto h-screen my-4 px-2 py-16 bg-white">
                    <h2 class="text-center">Creer un agent de maintenance</h2>
                    <form class="w-3/4 mx-auto rounded my-12 py-4" action="{{route('admin.maintenances.create')}}" method="POST">
                        @csrf
                        <div class="flex justify-between items-center">
                        <input style="" name="nom" type="text" class="block  w-2/5 border border-solid  font-semibold py-2 pl-4 rounded mb-8" placeholder="Nom">
                        <input style="" name="prenom" type="text" class="block w-2/5 border border-solid  font-semibold py-2 pl-4 rounded mb-8" placeholder="Prenom">
                        </div>
                        <input style="" name="grade" type="text" class="block   w-full border border-solid  font-semibold py-2 pl-4 rounded mb-8" placeholder="Grade">
                        <input style="" name="email" type="text" class="block   w-full border border-solid  font-semibold py-2 pl-4 rounded mb-8" placeholder="Email">
                        <input style="" name="password" type="password" class="block   w-full border border-solid  font-semibold py-2 pl-4 rounded mb-8" placeholder="Mot de passe">
                        <input type="submit" value="Valider" class="block mx-auto rounded text-white font-bold bg-blue-darker py-2 px-2 ">

                    </form>
             </div>
        </div>
    </div>
@endsection