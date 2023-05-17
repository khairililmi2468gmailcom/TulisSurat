<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Dompdf\Dompdf;

class LamaranController extends Controller
{
    public function index()
    {
        // ...
    }
    public function store(Request $request)
    {
        // Mendapatkan data dari form
        $nama = $request->input('nama');
        $alamat = $request->input('alamat');
        $telpon = $request->input('telpon');
        $email = $request->input('email');
        $posisi = $request->input('posisi');

        // Membaca file HTML
        $html = file_get_contents('surat-lamaran.blade.php');

        // Mengganti placeholder dengan data yang diambil dari form
        $html = str_replace('{nama}', $nama, $html);
        $html = str_replace('{alamat}', $alamat, $html);
        $html = str_replace('{telpon}', $telpon, $html);
        $html = str_replace('{email}', $email, $html);
        $html = str_replace('{posisi}', $posisi, $html);

        // Membuat objek Dompdf
        $dompdf = new Dompdf();

        // Mengubah HTML menjadi PDF
        $dompdf->loadHtml($html);
        // Proses pembuatan file PDF
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();

        // Buat tautan unduh ke file PDF
        $filename = 'Surat lamaran-' . $nama . '.pdf';
        $pdf_content = $dompdf->output();
        header('Content-Type: application/pdf');
        header('Content-Disposition: attachment; filename="' . $filename . '"');
        echo $pdf_content;

        echo 'File PDF berhasil dibuat';
    }

}