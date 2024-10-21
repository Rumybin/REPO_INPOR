<?php

namespace App\Controllers;

use App\Models\ModelEkstra;
use CodeIgniter\Controller;

class controljadwal extends Controller
{
    public function index()
    {
        // Daftar nama hari dalam bahasa Indonesia
        $namaHari = [
            'Sunday' => 'Minggu',
            'Monday' => 'Senin',
            'Tuesday' => 'Selasa',
            'Wednesday' => 'Rabu',
            'Thursday' => 'Kamis',
            'Friday' => 'Jumat',
            'Saturday' => 'Sabtu'
        ];

        // Dapatkan hari ini dalam bahasa Inggris
        $hariInggris = date('l');
        // Konversi ke bahasa Indonesia
        $hari = $namaHari[$hariInggris];
        
        // Ambil kegiatan ekstrakurikuler berdasarkan hari ini
        $model = new ModelEkstra();
        $data['ekstra_hari_ini'] = $model->getEkstraByDay($hari);

        // Kirim data ke view
        return view('jadwal_view', $data);
    }
}
