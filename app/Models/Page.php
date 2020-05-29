<?php

namespace App\Models;

use Parental\HasChildren;

class Page extends Model
{
    use HasChildren;

    protected $table = 'pages';

    protected $guarded = ['id'];

    protected $casts = [
        'published' => 'boolean',
    ];

    protected $childTypes = [
        'about_page' => AboutPage::class,
        'blog_post' => BlogPost::class,
        'join_page' => JoinPage::class,
    ];
}
