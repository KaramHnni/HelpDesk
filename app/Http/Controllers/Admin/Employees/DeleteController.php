<?php

namespace App\Http\Controllers\Admin\Employees;

use App\Models\Employé;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DeleteController extends Controller
{
    public function supprimer($id){

        $employé = Employé::findOrFail($id);
        $employé->delete();   
        return redirect()->back()->with(['deleted' => true]);
    }
}
