@extends('layouts.admin')
@section('page-title')
Tableau de Bord
@endsection

@section('main-content')
    @include('components.admin.navigation')
    <div class="flex">
        @include('components.admin.sidebar')
        <div class="flex-grow h-screen">
             <div style="width:97%;" class="mx-auto h-screen my-4 px-2 py-16 bg-white">
                <div class="flex justify-between items-center px-8">
                <h2 class="">Les Employés</h2>
                <a href="{{route('admin.employees.create')}}" class="bg-blue-dark py-2 font-bold rounded text-white px-4">+</a>
            </div>
            @if($employés->count()> 0 ) 
            <table class="w-full border-l border-r border-grey-lighter border-solid  mt-8">
                <tr class="text-left py-4 bg-grey-lighter">
                    <td class="py-4 px-2  text-grey-darker">Nom</td>
                    <td class="py-4 px-2 text-grey-darker">E-mail</td>
                    <td class="py-4 px-2 text-grey-darker">Grade</td>
                    <td class="py-4 px-2 text-grey-darker">Departement</td>
                    <td class="py-4 px-2 text-grey-darker">Bureau</td>
                    <td class="py-4 px-2  text-grey-darker">Status</td>
                    <td></td>
                    <td></td>
                
                </tr>
                @foreach($employés as $employé)
                <tr>
                <td style="width:15%;line-height:1.66;" class="py-2 px-2 border-b border-solid border-grey-lighter text-grey-darkest">{{$employé->FullName}}</td>
                <td style="width:10%;" class="py-2 px-2 border-b border-solid border-grey-lighter text-grey-darkest">{{$employé->user->email}}</td>
                    <td style="width:12%;" class="py-2 px-2 border-b border-solid border-grey-lighter text-grey-darkest">{{$employé->grade}}</td>
                    <td style="width:10%;" class="py-2 px-2 border-b border-solid border-grey-lighter text-grey-darkest">{{$employé->departement->nom}}</td>
                    <td style="width:5%;" class="py-2 px-2 border-b border-solid border-grey-lighter text-grey-darkest">{{$employé->Bureau}}</td>
                    <td style="width:7%" class="py-2  px-2  border-b border-solid border-grey-lighter text-grey-darkest">
                        @if($employé->estValide())
                    <div style="background:rgb(120, 221, 178,0.2);"class="rounded inline-block px-2 py-2  text-grey-darker text-sm flex items-center justify-around ">
                        <svg  height="10" width="8" >
                            <circle cx="4" cy="5" r="4" fill="rgb(120, 221, 178)" />
                        </svg>
                        <span>{{$employé->StatusName}}</span>
                    </div>
                        @endif
                        @if(!$employé->estValide())
                        <div class=" bg-red-lightest rounded inline-block px-2 py-2  text-grey-darker text-sm flex items-center justify-around ">
                                <svg  height="10" width="8" >
                                    <circle cx="4" cy="5" r="4" fill="red" />
                                </svg>
                                <span>{{$employé->StatusName}}</span>
                            </div>
                        @endif
                    </td>
                    @if($employé->status == 1) 
                    <td style="width:5%;"class=" py-2  px-2  border-b border-solid border-grey-lighter "><a  class="text-red-dark "href="{{Route('admin.employees.suspendre',$employé->id)}}">suspendre</a></td>
                    @endif
                    @if($employé->status== 0)
                    <td style="width:5%;"class=" py-2  px-2  border-b border-solid border-grey-lighter "><a class="text-blue" href="{{Route('admin.employees.valider',$employé->id)}}">valider</a></td>
                   @endif
                   <td style="width:5%;"class=" py-2  px-2  border-b border-solid border-grey-lighter "><a class="text-red-dark" href="{{route('admin.employees.supprimer',$employé->id)}}">supprimer</a></td>

                </tr>
                @endforeach
            </table>
            @else

            <h3 class="text-center mt-8 text-grey-dark">Aucun Employé n'a été trouvé</h3>
            @endif
        </div>

    </div>
@endsection