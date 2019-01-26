<?php

namespace App\Http\Controllers\Admin\Employees;

use App\Models\Departement;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Employé;
use App\Http\Controllers\Controller;

class CreateController extends Controller
{
    public function show(){

        return view('pages.admin.employees.create',[

                'departements' => Departement::all(),

        ]);

            }

    public function create(Request $request){

        $user = new User;
        $user->name = $request->nom;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->type = 0;
        $user->created_at = now();
        $user->updated_at = now();
        $user->save();
        $employé = new Employé;
        $employé->user_id = $user->id;
        $employé->nom = $request->nom;
        $employé->prenom = $request->prenom;
        $employé->grade = $request->grade;
        $employé->departement_id = $request->departement;
        $employé->bureau = $request->bureau;
        $employé->created_at = now();
        $employé->updated_at = now();
        $employé->status = 1;
        $employé->save();
        return redirect()->back()->with(['created' => true]);
        



    }
}
