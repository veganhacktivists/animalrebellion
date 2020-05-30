<?php

namespace App\Models;

use Backpack\CRUD\CrudTrait;
use Backpack\CRUD\ModelTraits\SpatieTranslatable\HasTranslations;

class PageFormInput extends Model
{
    use CrudTrait;
    use HasTranslations;

    const TYPE_TEXT = 'text';
    const TYPE_EMAIL = 'email';
    const TYPE_PHONE = 'phone';
    const TYPE_CHECKBOX = 'checkbox';
    const TYPE_RADIO_BUTTON = 'radio';

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'page_form_inputs';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    // protected $guarded = ['id'];
    protected $fillable = ['name', 'type', 'required'];
    // protected $hidden = [];
    // protected $dates = [];
    protected $translatable = ['name'];
    protected $casts = [
        'required' => 'boolean',
    ];

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
    public function pages()
    {
        return $this->belongsToMany(
            JoinPage::class,
            'page_form_input_pivot_table',
            'page_form_input_id'
        )->withTimestamps();
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
    public function getFormNameAttribute()
    {
        $exploded = explode(' ', $this->name);

        return $filtered = collect($exploded)->filter(function ($str) {
            return $str !== '';
        })->map(function ($str) {
            $str = preg_replace('/&#?[a-z0-9]+;/i', '', $str);

            return str_slug($str);
        })->join('_');
    }

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */
}
