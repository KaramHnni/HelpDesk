<?php

namespace App\Http\Controllers\Admin\Employees;

use App\Models\Departement;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CreateController extends Controller
{
    public function show(){

        return view('pages.admin.employees.create',[

                'departements' => Departement::all(),

        ]);

            }

    public function create(Request $request){

        

    }
}
