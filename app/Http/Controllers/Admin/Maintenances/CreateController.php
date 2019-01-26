<?php

namespace App\Http\Controllers\Admin\Maintenances;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CreateController extends Controller
{
    public function show(){

        return view('pages.admin.maintenances.create');

            }
}
