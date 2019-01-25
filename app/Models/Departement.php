<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Departement extends Model
{
    public function employees(){

        return $this->hasMany('\App\Models\Employés','departement_id','id');
    }
}
