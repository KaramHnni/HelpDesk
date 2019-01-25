<?php

namespace App\Http\Controllers\Site\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ConnexionController extends Controller
{
    public function show(){
        return view('pages.site.auth.connexion');
    }

    public function auth(Request $request){

        $credentials = $request->only('email','password');

        if(Auth::guard('web')->attempt($credentials)){

            return redirect()->intended('user/dashboard');
        
        }
        else{

            return redirect()->back()->with('credentials', false);
        }
    }
}
