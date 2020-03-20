<?php

namespace App\Models;

use Backpack\CRUD\CrudTrait;
use Faker\Factory;
use Faker\Provider\Address;
use Illuminate\Database\Eloquent\Model;
use Spatie\Geocoder\Facades\Geocoder;

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
    protected $fillable = ['name', 'address1', 'address2', 'address3', 'city', 'state_or_province', 'country', 'postal_code'];
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
         * via Geocoder lib and assign in the coords table.
         *
         * TO DO: Implement Google API key with Geocoder library.
         * Currently, this is faking random coordinates in order to move
         * forward unblocked.  */
        static::created(function ($localGroup) {
            //$address = $localGroup->address1."," . $localGroup->address2."," . $localGroup->address3."," . $localGroup->city."," . $localGroup->state_or_province."," . $localGroup->country."," . $localGroup->postal_code;
            //$location = Geocoder::getCoordinatesForAddress($address);

            $faker = Factory::create();

            $lat = $faker->latitude();
            $lng = $faker->longitude();

            $localGroup->coords()->create([
                'lat' => $lat,
                'lng' => $lng,
            ]);
        });

        static::deleted(function ($localGroup) {
            $localGroup->coords()->delete();
        });
    }

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */
    public function coords()
    {
        return $this->hasOne('App\Models\Coord');
    }

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
