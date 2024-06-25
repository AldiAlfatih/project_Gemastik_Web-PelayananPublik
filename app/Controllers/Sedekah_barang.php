<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Sedekah_barang extends BaseController
{
    public function index(): string
    {
        return view('sedekah_barang');
    }
}
