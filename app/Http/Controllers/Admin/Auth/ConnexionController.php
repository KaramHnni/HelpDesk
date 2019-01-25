<?php

namespace App\Http\Controllers\Admin\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ConnexionController extends Controller
{
    public function show(){
        return view('pages.admin.auth.connexion');
    }

    public function auth(Request $request){

        $credentials = $request->only('email,password');

        if(Auth::guard('admin')->attempt($credentials)){

            return redirect()->intended('admin/dashboard');

        }else{
            return redirect()->back()->with(['credentials'=>false]);

        }

    }
}
