<?php

namespace App\Http\Controllers\Admin;

use Barryvdh\Elfinder\ElfinderController as OriginalElfinderController;
use Illuminate\Foundation\Application;

class ElfinderController extends OriginalElfinderController
{
    public function __construct(Application $app)
    {
        parent::__construct($app);
        $this->middleware(function ($request, $next) {
            return redirect('admin');
        });
    }
}
