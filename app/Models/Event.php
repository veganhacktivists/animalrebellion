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
    protected $fillable = ['name', 'start_date', 'end_date', 'start_time', 'end_time', 'address', 'city', 'country', 'type', 'hosted_by', 'short_description', 'full_description', 'image', 'slug', 'lat', 'lng'];
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
    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }

    protected static function boot()
    {
        parent::boot();

        static::created(function (Event $event) {
            $address = $event->address . ', ' . $event->city . ', ' . ', ' . $event->country;
            $results = app()->make('Geocoder')->geocode($address);
            if (count($results['results'])) {
                $event->update([
                    'lat' => $results['results'][0]['geometry']['lat'],
                    'lng' => $results['results'][0]['geometry']['lng']
                ]);
            }
        });
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
