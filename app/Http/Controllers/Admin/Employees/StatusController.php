<?php

namespace App\Http\Controllers\Admin\Employees;

use App\Models\Employé;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StatusController extends Controller
{
    public function suspendre($id){
        $employé = Employé::findOrFail($id);
        $employé->suspendre();
        return back()->with(['suspendu' => true]);
    }


    public function valider($id){
        $employé = Employé::findOrFail($id);
        $employé->valider();
        return back()->with(['valider' => true]);
    }
}
