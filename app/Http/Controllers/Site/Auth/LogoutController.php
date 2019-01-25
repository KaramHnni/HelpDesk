<?php

namespace App\Http\Controllers\Site\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LogoutController extends Controller
{
    public function logout(){

        auth()->logout();
        request()->session()->flush();
        return redirect()->route('login');
    }
}
