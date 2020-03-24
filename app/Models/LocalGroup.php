<?php

namespace App\Models;

use Backpack\CRUD\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class LocalGroup extends Model
{
    use CrudTrait;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'local_groups';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    // protected $guarded = ['id'];
    protected $fillable = ['name', 'address1', 'address2', 'city', 'state_or_province', 'country', 'postal_code', 'lat', 'lng', 'website_url', 'facebook_url', 'instagram_url', 'twitter_url'];
    // protected $hidden = [];
    // protected $dates = [];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */

    protected static function boot()
    {
        parent::boot();

        /** On creation of a new localGroup, grab lat/lng coordinates
         * via Geocoder lib and assign in the coords table. */
        static::created(function ($localGroup) {
            $address = $localGroup->address1;

            if ($localGroup->address2) {
                $address = $address.', '.$localGroup->address2;
            }

            if ($localGroup->address3) {
                $address = $address.', '.$localGroup->address3;
            }

            if ($localGroup->state_or_province) {
                $address = $address.', '.$localGroup->state_or_province;
            }

            $address = $address.', '.$localGroup->city.', '.$localGroup->postal_code.', '.$localGroup->country;

            $results = app()->make('Geocoder')->geocode($address);
            $localGroup->lat = $results['results'][0]['geometry']['lat'];
            $localGroup->lng = $results['results'][0]['geometry']['lng'];
            $localGroup->save();
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
