<?php

namespace App\Controllers;

use App\Models\ModelEkstra;
use CodeIgniter\Controller;

class contrololim extends Controller
{
    public function index()
    {
        $model = new ModelEkstra();

        // Ambil data yang memiliki type = 'olim'
        $data['ekstra_olim'] = $model->getEkstraByType('olim');

        // Kirim data ke view 'olympiad'
        return view('olympiad', $data);
    }

    public function lelembut()
    {
        return view('lelembut');
    }
}
