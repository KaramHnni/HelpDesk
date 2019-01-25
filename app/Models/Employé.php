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


    public function getFullNameAttribute(){

        return $this->nom . $this->prenom ;
    }

    public function user(){

        return $this->hasOne('App\Models\User','id','user_id');
    }


    public function departement(){

        return $this->hasOne('\App\Models\Departement','id','departement_id');
    }
}
