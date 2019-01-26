<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Maintenance extends Model
{
    protected $table ='maintenances';
    
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    public function getStatusNameAttribute(){

        if($this->status == 1){

            return 'valide';
        }

        if($this->status == 0){

            return 'suspendu';
        }

    }

    public function getInitialsAttribute(){

        return substr($this->nom,0,1) ." ". substr($this->prenom,0,1);
    }
    public function getFullNameAttribute(){

        return $this->nom ." ". $this->prenom ;
    }

    public function user(){

        return $this->hasOne('App\Models\User','id','user_id');
    }

    public function valider(){

        $this->status = 1;
        $this->updated_at = now();
        $this->save();
    }
    public function suspendre(){

        $this->status = 0;
        $this->updated_at = now();
        $this->save();
    }
}
