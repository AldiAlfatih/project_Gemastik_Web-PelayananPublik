<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Lokasi_bank_sampah extends BaseController
{
    public function index(): string
    {
        return view('pusat_informasi');
    }
}
