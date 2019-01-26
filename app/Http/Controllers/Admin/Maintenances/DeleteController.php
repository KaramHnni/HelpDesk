<?php

namespace App\Http\Controllers\Admin\Maintenances;

use App\Models\Maintenance;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DeleteController extends Controller
{
    public function supprimer($id){

        $maintenance = Maintenance::findOrFail($id);
        $user = User::where('id',$maintenance->user_id);
        $maintenance->delete();   
        $user->delete();
        return redirect()->back()->with(['deleted' => true]);
    }
}
