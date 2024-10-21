<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class home extends Controller
{
    public function index()
    {
        return view('homepage');
    }

    public function olympiad()
    {
        return view('olympiad');
    }
}
