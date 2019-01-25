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
                <tr>
                    <td style="width:15%;line-height:1.66;" class="py-2 px-2 border-b border-solid border-grey-lighter">Mohamed abdelkrim mohamed</td>
                    <td style="width:10%;" class="py-2 px-2 border-b border-solid border-grey-lighter">karam.tenes@tenes@gmail.com</td>
                    <td style="width:12%;" class="py-2 px-2 border-b border-solid border-grey-lighter">Maitre assistant <a href=""></a></td>
                    <td style="width:10%;" class="py-2 px-2 border-b border-solid border-grey-lighter">Informatique</td>
                    <td style="width:5%;" class="py-2 px-2 border-b border-solid border-grey-lighter">78PC1</td>
                    <td style="width:7%" class="py-2  px-2  border-b border-solid border-grey-lighter"><span class="rounded inline-block px-2 py-2 bg-green-light text-white">valide</span></td>
                    <td style="width:5%;"class="py-2  px-2  border-b border-solid border-grey-lighter text-red-dark">suspendre</td>
                    <td style="width:5%;"class=" py-2  px-2  border-b border-solid border-grey-lighter text-red-dark">supprimer</td>
                </tr>
                <tr>
                        <td style="width:15%;line-height:1.66;" class="py-2 px-2 border-b border-solid border-grey-lighter">Mohamed abdelkrim mohamed</td>
                        <td style="width:10%;" class="py-2 px-2 border-b border-solid border-grey-lighter">karam.tenes@tenes@gmail.com</td>
                        <td style="width:12%;" class="py-2 px-2 border-b border-solid border-grey-lighter">Maitre assistant <a href=""></a></td>
                        <td style="width:10%;" class="py-2 px-2 border-b border-solid border-grey-lighter">Informatique</td>
                        <td style="width:5%;" class="py-2 px-2 border-b border-solid border-grey-lighter">78PC1</td>
                        <td style="width:7%" class="py-2  px-2  border-b border-solid border-grey-lighter"><span class="rounded inline-block px-2 py-2 bg-green-light text-white">valide</span></td>
                        <td style="width:5%;"class="py-2  px-2  border-b border-solid border-grey-lighter text-red-dark">suspendre</td>
                        <td style="width:5%;"class="py-2  px-2  border-b border-solid border-grey-lighter text-red-dark">supprimer</td>
                    </tr>
            </table>
        </div>

    </div>
@endsection