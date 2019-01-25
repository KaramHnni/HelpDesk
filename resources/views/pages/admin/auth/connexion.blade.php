@extends('layouts.admin')
@section('page-title')
Connexion-Administrateur
@endsection
@section('main-content')
<div style="background:#48afeb31;"class=" h-screen">
    
    <section class="h-screen py-16">
        <div style=""class="bg-white  w-2/5 mx-auto  py-8">
        <h1 style=""class="text-center text-blue-darker font-bold text-2xl my-4">Connexion Admin</h1>
        <form class="w-3/4 mx-auto rounded my-12 py-4" action="{{route('admin.login')}}" method="POST">
            <input style="#48afeb41;" name="email" type="text" class="block mx-auto  w-full border border-solid  font-semibold py-2 pl-4 rounded mb-8" placeholder="Email">
            <input type="password" name="password"class="block mx-auto w-full border border-solid  font-semibold py-2 pl-4 rounded mb-8 " placeholder="Mot de passe">
            <input type="submit" value="connexion" class="block mx-auto rounded text-white font-bold bg-blue-darker py-2 px-2 ">
        </form>
        </div>
    </section>
<div>
@endsection
<style>
p{

}
</style>