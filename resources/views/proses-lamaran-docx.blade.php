<?php
function generateSurat(Request $request)
{
    // Get the form input values
    $nama = $request->input('nama');
    $tempat_lahir = $request->input('tplahir');
    $tanggal_lahir = $request->input('tanggal_lahir');
    $jenis_kelamin = $request->input('kelamin');
    $pendidikan_terakhir = $request->input('pendidikan');
    $perusahaan = $request->input('perusahaan');
    $posisi = $request->input('posisi');
    $tglsurat = $request->input('tglsurat');
    $alamat = $request->input('alamat');
    $agama = $request->input('agama');
    $telepon = $request->input('nohp');

    // Load the template file
    $template = new TemplateProcessor(public_path('/template.docx'));

    // Replace the placeholders with form input values
    $template->setValue('isiNama', $nama);
    $template->setValue('isiTempat. isiTgl', $tempat_lahir . ' / ' . $tanggal_lahir);
    $template->setValue('isiJK', $jenis_kelamin);
    $template->setValue('isiPendidikan', $pendidikan_terakhir);
    if (isset($alamat) && is_countable($alamat)) {
        $count = count($alamat);
    } else {
        $count = 0;
    }
    for ($i = 1; $i <= $count; $i++) {
        $template->setValue('isiAlamat' . $i, $alamat[$i - 1]);
    }
    $template->setValue('isiAgama', $agama);
    $template->setValue('isiTelepon', $telepon);
    $template->setValue('isiNamaPerusahaan', $perusahaan);
    $template->setValue('isiPosisi', $posisi);
    $template->setValue('isiTglSurat', $tglsurat);

    // Set the output filename
    $filename = 'Surat Lamaran Kerja - ' . $nama . '.docx';

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
