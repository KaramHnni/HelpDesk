<?php

namespace App\Http\Controllers\Admin\Maintenances;

use App\Models\Maintenance;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function show(){

        return view('pages.admin.maintenances.index',[
            'maintenances' => Maintenance::all(),
        ]);
    }
}
