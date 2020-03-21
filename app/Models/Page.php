<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Parental\HasChildren;

class Page extends Model
{
    use HasChildren;

    protected $table = 'pages';

    protected $guarded = ['id'];

    protected $childTypes = [
        'about_page' => AboutPage::class,
    ];
}
