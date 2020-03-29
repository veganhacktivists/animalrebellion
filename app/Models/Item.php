<?php

namespace App\Models;

use App\Models\ItemTag;
use App\Models\ItemType;
use Backpack\CRUD\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use CrudTrait;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'items';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    // protected $guarded = ['id'];
    protected $fillable = ['title', 'url', 'blurb', 'publication_date', 'source', 'primary_author', 'secondary_author'];
    // protected $hidden = [];
    // protected $dates = [];

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

    /** Establish belongsTo relationship with ItemType */
    public function item_type()
    {
        return $this->belongsTo(ItemType::class);
    }

     /** Establish belongsToMany relationship with ItemTag.
      * Specify table and value to relieve ambiguity
      * of automatically general SQL.
     */
     public function tags()
     {
         return $this->belongsToMany(ItemTag::class, 'item_tags_pivot_table', 'item_id')->withTimestamps();
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
