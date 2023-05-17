<?php
// composer require phpoffice/phpword
public function generateSurat(Request $request)
{
    // Get the form input values
    $nama = $request->input('isiNama');
    $tempat_lahir = $request->input('isiTempatLahir');
    $tanggal_lahir = $request->input('isiTanggalLahir');
    $status = $request->input('isiStatus');
    $negara = $request->input('isiNegara');
    $agama = $request->input('isiAgama');
    $posisi = $request->input('isiPendidikan');
    $tglsurat = $request->input('isiOrganisasi');
    $keahlian = $request->input('isiKeahlian');
    $alamat = $request->input('isiAlamat');
    $email = $request->input('isiEmail');
    $telepon = $request->input('isiNoHp');

    // Load the template file
    $template = new TemplateProcessor(public_path('/templateDrh.docx'));

    // Replace the placeholders with form input values
    $template->setValue('isiNama', $nama);
    $template->setValue('isiTempatLahir. isiTanggalLahir', $tempat_lahir . ' / ' . $tanggal_lahir);
    $template->setValue('isiStatus', $status);
    $template->setValue('isiPendidikan', $negara);
    // if (isset($alamat) && is_countable($alamat)) {
    //     $count = count($alamat);
    // } else {
    //     $count = 0;
    // }
    // for ($i = 1; $i <= $count; $i++) {
    //     $template->setValue('isiAlamat' . $i, $alamat[$i - 1]);
    // }
    $template->setValue('isiAlamat',$alamat);
    $template->setValue('isiEmail', $email);
    $template->setValue('isiNoHp', $telepon);
    $template->setValue('isiAgama', $agama);
    $template->setValue('isiPosisi', $posisi);
    $template->setValue('isiTglSurat', $tglsurat);
    $template->setValue('isiKeahlian', $keahlian);

    // Set the output filename
    $filename = 'Daftar Riwayat Hidup - ' . $nama . '.docx';

    // Download the generated file
    $headers = [
        'Content-Type' => 'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
        'Content-Disposition' => 'attachment; filename="' . $filename . '"',
    ];

    $path = public_path($filename);
    $template->saveAs($path);

    return response()->download($path, $filename, $headers);
}
?>
