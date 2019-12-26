<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller as BaseCtrl;

class Controller extends BaseCtrl
{
    public function __construct()
    {
        $this->middleware('auth');
    }
}
