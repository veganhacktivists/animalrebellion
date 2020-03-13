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
    protected $fillable = ['name', 'start_date', 'end_date', 'start_time', 'end_time', 'address', 'city', 'country', 'type', 'hosted_by', 'description', 'image', 'slug'];
    // protected $hidden = [];
    // protected $dates = [];

    public function setDatetimeAttribute($value)
    {
        $this->attributes['start_date'] = Date::parse($value);
        $this->attributes['end_date'] = Date::parse($value);
        $this->attributes['start_time'] = Date::parse($value);
        $this->attributes['end_time'] = Date::parse($value);
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
    const TYPE_TRAINING = 'training';

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
