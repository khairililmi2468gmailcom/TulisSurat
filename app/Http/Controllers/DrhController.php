<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Dompdf\Dompdf;
use PhpOffice\PhpWord\TemplateProcessor;

class DrhController extends Controller
{
    public function index()
    {
        // ...
    }
    public function store(Request $request)
    {
        // Mendapatkan data dari form
        $nama = $request->input('isiNama');
        $alamat = $request->input('isiAlamat');
        $tempatLahir = $request->input('isiTempatLahir');
        $tanggalLahir = $request->input('isiTglLahir');
        $status = $request->input('isiStatus');
        $kelamin = $request->input('isiKelamin');
        $negara = $request->input('isiNegara');
        $agama = $request->input('isiAgama');
        $noHp = $request->input('isiNoHp');
        $pendidikan = $request->input('isiPendidikan');
        $organisasi = $request->input('isiOrganisasi');
        $email = $request->input('isiEmail');
        $keahlian = $request->input('isiKeahlian');

        //buat template word
        $template = new TemplateProcessor(public_path('templateDrh.docx'));

        // Replace the placeholders with form input values
        $template->setValue('isiNama', $nama);
        $template->setValue('isiTempatLahir', $tempatLahir);
        $template->setValue('isiTglLahir', $tanggalLahir);
        $template->setValue('isiKelamin', $kelamin);
        $template->setValue('isiPendidikan', $pendidikan);
        $template->setValue('isiAlamat', $alamat);
        $template->setValue('isiNegara', $negara);
        $template->setValue('isiAgama', $agama);
        $template->setValue('isiStatus', $status);
        $template->setValue('isiNoHp', $noHp);
        $template->setValue('isiEmail', $email);
        $organisasiSip = str_replace("\n", "</w:t><w:br/><w:t>", $organisasi);
        $template->setValue('isiOrganisasi', $organisasiSip);
        $pendidikanSip = str_replace("\n", "</w:t><w:br/><w:t>", $pendidikan);
        $template->setValue('isiPendidikan', $pendidikanSip);
        $keahlianSip = str_replace("\n", "</w:t><w:br/><w:t>", $keahlian);
        $template->setValue('isiKeahlian', $keahlianSip);

        $filename = 'Daftar Riwayat Hidup - ' . $nama . '.docx';

        // Download file
        $header = [
            'Content-Type' => 'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
            'Content-Disposition' => 'attachment; filename="' . $filename . '"',

        ];
        $path = public_path($filename);
        $template->saveAs($path);

        return response()->download($path, $filename, $header);

    }


}