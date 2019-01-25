<?php

namespace App\Http\Controllers\Site\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ConnexionController extends Controller
{
    public function show(){
        return view('pages.site.auth.connexion');
    }
}
