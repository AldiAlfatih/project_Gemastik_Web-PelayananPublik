<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Video_edukasi extends BaseController
{
    public function index(): string
    {
        return view('video_edukasi');
    }
}
