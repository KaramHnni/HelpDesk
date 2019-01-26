<?php

namespace App\Http\Controllers\Admin\Employees;

use App\Models\Employé;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DeleteController extends Controller
{
    public function supprimer($id){

        $employé = Employé::findOrFail($id);
        $user = User::where('id',$employé->user_id);
        $employé->delete();   
        $user->delete();

        return redirect()->back()->with(['deleted' => true]);
    }
}
