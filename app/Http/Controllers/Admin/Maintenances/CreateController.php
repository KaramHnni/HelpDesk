<?php

namespace App\Http\Controllers\Admin\Maintenances;

use App\Models\User;
use App\Models\Maintenance;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CreateController extends Controller
{
    public function show(){

        return view('pages.admin.maintenances.create');

            }

            public function create(Request $request){

                $user = new User;
                $user->name = $request->nom;
                $user->email = $request->email;
                $user->password = bcrypt($request->password);
                $user->created_at = now();
                $user->updated_at = now();
                $user->type = 1;
                $user->save();
                $maintenance = new Maintenance;
                $maintenance->user_id = $user->id;
                $maintenance->nom = $request->nom;
                $maintenance->prenom = $request->prenom;
                $maintenance->grade = $request->grade;
                $maintenance->created_at = now();
                $maintenance->updated_at = now();
                $maintenance->status = 1;
                $maintenance->save();
                return redirect()->back()->with(['created' => true]);
                
        
        
        
            }
}
