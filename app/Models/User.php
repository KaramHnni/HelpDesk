<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
class User extends Authenticatable
{
    protected $guard ='web';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table ='users';
    
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    public function Employé(){

        return $this->hasOne('\App\Models\Employé','user_id','id');
    }
    public function Maintenance(){

        return $this->hasOne('\App\Models\Maintenance','user_id','id');
    }

    public function getTypeNameAttribute(){

        if($this->type == 0 ){

            return 'employé';
        }
        if($this->type == 1 ){

            return 'maintenance';
        }
    }
    
}
