<?php

namespace App\Controller;

use CodeIgniter\Controller;

class pages extends Controller
{
    public function profile()
    {
        return view('profile');
    }
}