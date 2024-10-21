<?php

namespace App\Controllers;

use App\Models\ModelEkstra;

use CodeIgniter\Controller;

class controlhalaman extends Controller
{
    protected $ekstraModel;

    public function __construct()
    {
        $this->ekstraModel = new ModelEkstra();
    }
    public function index($ekstra)
    {
        $ekstra = $this->ekstraModel->where('Nama', $ekstra)->first();

        $data = [
            'ekstra' => $ekstra
        ];
        return view('halaman', $data);
    }
}
