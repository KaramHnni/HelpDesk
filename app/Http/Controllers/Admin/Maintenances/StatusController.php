<?php

namespace App\Http\Controllers\Admin\Maintenances;

use App\Models\Maintenance;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StatusController extends Controller
{
    public function suspendre($id){
        $maintenance = Maintenance::findOrFail($id);
        $maintenance->suspendre();
        return back()->with(['suspendu' => true]);
    }


    public function valider($id){
        $maintenance = Maintenance::findOrFail($id);
        $maintenance->valider();
        return back()->with(['valider' => true]);
    }
}
