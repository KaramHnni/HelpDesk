<?php

namespace App\Http\Controllers\Admin\Employees;

use App\Models\Employé;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function show(){

        return view('pages.admin.employees.index',[
            'employés' => Employé::all(),
        ]);
    }
}
