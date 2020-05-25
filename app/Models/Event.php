<?php

namespace App\Models;

use Backpack\CRUD\CrudTrait;
use Backpack\CRUD\ModelTraits\SpatieTranslatable\HasTranslations;
use Carbon\Traits\Date;

class Event extends Model
{
    use CrudTrait;
    use HasTranslations;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'events';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    // protected $guarded = ['id'];
    protected $fillable = ['name', 'start_date', 'end_date', 'start_time', 'end_time', 'address', 'city', 'country', 'type', 'hosted_by', 'short_description', 'full_description', 'image', 'slug', 'lat', 'lng'];
    // protected $hidden = [];
    // protected $dates = [];
    public $translatable = ['name', 'short_description', 'full_description'];

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

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }

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
