<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Artikel extends BaseController
{
    public function index(): string
    {
        return view('artikel');
    }
    public function sidebar(): string
    {
        return view('artikel');
    }
}
