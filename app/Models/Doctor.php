<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class Doctor extends Model
{
    use CrudTrait;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'doctors';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    // protected $guarded = ['id'];
   protected $with=['Place'];
    protected $fillable = [
        'first_name','last_name','gender','age','clinic_name'
    ];
    // protected $hidden = [];
    // protected $dates = [];

    public function certificate(){
        return $this->hasMany(Certificate::class);
    }
    public function service(){
        return $this->hasMany(Service::class);
    }
    public function patient(){
        return $this->belongsToMany(Patient::class);
    }
    public function place(){
        return $this->morphMany(Place::class, 'placement');
    }
    public function reservation(){
        return $this->morphMany(Reservation::class, 'reserved');
    }
    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | ACCESORS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */
}
