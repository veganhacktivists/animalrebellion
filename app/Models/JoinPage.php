<?php

namespace App\Models;

use Backpack\CRUD\CrudTrait;
use Backpack\CRUD\ModelTraits\SpatieTranslatable\HasTranslations;
use Parental\HasParent;

class JoinPage extends Page
{
    use CrudTrait;
    use HasParent;
    use HasTranslations;
    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    // protected $table = 'join_pages';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    // protected $guarded = ['id'];
    protected $fillable = [];
    // protected $hidden = [];
    // protected $dates = [];
    public $translatable = ['title', 'header', 'content'];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */
    public function addResponse($rawInput)
    {
        $validatedInput = [];

        foreach ($rawInput as $key => $value) {
            if (array_key_exists($key, $this->formNameToFullNameMap)) {
                $readableKey = $this->formNameToFullNameMap[$key];

                $validatedInput[$readableKey] = $value;
            }
        }

        JoinResponse::create([
            'page_id' => $this->id,
            'response' => $validatedInput,
        ]);
    }

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */
    public function formInputs()
    {
        return $this->belongsToMany(
            PageFormInput::class,
            'page_form_input_pivot_table',
            'page_id'
        )->withTimestamps();
    }

    public function joinResponses()
    {
        return $this->hasMany(JoinResponse::class, 'page_id');
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
    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function getFormNameToFullNameMapAttribute()
    {
        $nameToFullNameMap = [];

        foreach ($this->formInputs as $formInput) {
            $nameToFullNameMap[$formInput->formName] = $formInput->name;
        }

        return $nameToFullNameMap;
    }

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */
}
