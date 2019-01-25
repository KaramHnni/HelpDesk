<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employé extends Model
{
    protected $table ='employés';
    
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    public function getStatusNameAttribute(){

        if($this->status = 1){

            return 'valide';
        }

        if($this->status = 0){

            return 'suspendu';
        }

    }

    public function departement(){

        return $this->hasOne('\App\Models\Departement','id','departement_id');
    }
}
