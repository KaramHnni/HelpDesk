<?php

namespace App\Http\Controllers\User\Employés;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function show(){

        return view('pages.user.employés.dashboard');
    }
}
