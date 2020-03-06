<?php

namespace App\Models;

use Backpack\CRUD\CrudTrait;
use Carbon\Traits\Date;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use CrudTrait;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'events';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    // protected $guarded = ['id'];
    protected $fillable = ['name', 'start', 'end', 'address', 'city', 'country', 'type', 'hosted_by', 'description'];
    // protected $hidden = [];
    // protected $dates = [];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'start' => 'datetime',
        'end' => 'datetime',
    ];

    public function setDatetimeAttribute($value) {
        $this->attributes['start'] = Date::parse($value);
        $this->attributes['end'] = Date::parse($value);
    }

    /*
    |--------------------------------------------------------------------------
    | CONSTANTS
    |--------------------------------------------------------------------------
    */
    const TYPE_ALL = 'all';
    const TYPE_ACTION = 'action';
    const TYPE_ACTIVITY = 'activity';
    const TYPE_EVENT = 'event';
    const TYPE_MEETING = 'meeting';
    const TYPE_TALK = 'talk';

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
