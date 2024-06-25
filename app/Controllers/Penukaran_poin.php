<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Penukaran_poin extends BaseController
{
    public function index(): string
    {
        return view('penukaran_poin');
    }
}
