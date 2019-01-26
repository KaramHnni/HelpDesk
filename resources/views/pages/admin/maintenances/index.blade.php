@extends('layouts.admin')
@section('page-title')
Maintenances
@endsection

@section('main-content')
    @include('components.admin.navigation')
    <div class="flex">
        @include('components.admin.sidebar')
        <div class="flex-grow h-screen">
             <div style="width:97%;" class="mx-auto h-screen my-4 px-2 py-16 bg-white">
                <div class="flex justify-between items-center px-8">
                <h2 class="">Les Agents de maintenances</h2>
                <a href="#" class="bg-blue-dark py-2 font-bold rounded text-white px-4">+</a>
            </div>
            @if($maintenances->count()> 0 ) 
            <table class="w-full border-l border-r border-grey-lighter border-solid  mt-8">
                <tr class="text-left py-4 bg-grey-lighter">
                    <td class="py-4 px-2  text-grey-darker">Nom</td>
                    <td class="py-4 px-2 text-grey-darker">E-mail</td>
                    <td class="py-4 px-2 text-grey-darker">Grade</td>
                    <td class="py-4 px-2 text-grey-darker">Status</td>
                    <td class="py-4 px-2 text-grey-darker"></td>
                    <td class="py-4 px-2  text-grey-darker"></td>
                
                </tr>
                @foreach($maintenances as $maintenance)
                <tr>
                <td style="width:15%;line-height:1.66;" class="py-2 px-2 border-b border-solid border-grey-lighter">{{$maintenance->FullName}}</td>
                <td style="width:10%;" class="py-2 px-2 border-b border-solid border-grey-lighter">{{$maintenance->user->email}}</td>
                    <td style="width:12%;" class="py-2 px-2 border-b border-solid border-grey-lighter">{{$maintenance->grade}}</td>
                <td style="width:7%" class="py-2  px-2  border-b border-solid border-grey-lighter"><span class="rounded inline-block px-2 py-2 bg-green-light text-white">{{$maintenance->StatusName}}</span></td>
                    @if($maintenance->status == 1) 
                <td style="width:5%;"class=" py-2  px-2  border-b border-solid border-grey-lighter "><a  class="text-red-dark "href="{{route('admin.maintenances.suspendre',$maintenance->id)}}">suspendre</a></td>
                    @endif
                    @if($maintenance->status== 0)
                    <td style="width:5%;"class=" py-2  px-2  border-b border-solid border-grey-lighter "><a class="text-blue" href="{{route('admin.maintenances.valider',$maintenance->id)}}">valider</a></td>
                   @endif
                <td style="width:5%;"class=" py-2  px-2  border-b border-solid border-grey-lighter "><a class="text-red-dark" href="{{route('admin.maintenances.supprimer',$maintenance->id)}}">supprimer</a></td>

                </tr>
                @endforeach
            </table>
            @else

            <h3 class="text-center mt-8 text-grey-dark">Aucun Agent de maintenance n'a été trouvé</h3>
            @endif
        </div>

    </div>
@endsection