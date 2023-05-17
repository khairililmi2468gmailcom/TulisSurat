<?php
// composer require phpoffice/phpword
public function generateSurat(Request $request)
{
    // Get the form input values
    $namaOrtu = $request->input('isiNamaOrtu');
    $namaAnak = $request->input('isiNamaAnak');
    $noKtp = $request->input('isiNoKtp');
    $tempat_lahirOrtu = $request->input('isiTempatLahirOrtu');
    $tempat_lahirAnak = $request->input('isiTempatLahirAnak');
    $tanggal_lahirOrtu = $request->input('isiTglLahirOrtu');
    $tanggal_lahirAnak = $request->input('isiTglLahirAnak');
    $pekerjaanOrtu = $request->input('isiPekerjaanOrtu');
    $noTeleponOrtu = $request->input('isiNoTeleponOrtu');
    $pendidikanAnak = $request->input('isiPendidikanAnak');
    $kegiatan = $request->input('isiKegiatan');
    $alamatAnak = $request->input('isiAlamatAnak');
    $alamatOrtu = $request->input('isiAlamatOrtu');
    $tempatSurat = $request->input('isiTempatBuatSurat');
    $tanggalSurat= $request->input('isiTanggalSurat');

    // Load the template file
    $template = new TemplateProcessor(public_path('/templateIzinOrtu.docx'));

    // Replace the placeholders with form input values
    $template->setValue('iniNamaOrtu', $namaOrtu);
    $template->setValue('iniNamaAnak', $namaAnak);
    $template->setValue('iniNoKtp', $noKtp);
    $template->setValue('iniTempatLahirOrtu. iniTglLahirOrtu', $tempat_lahirOrtu . ' / ' . $tanggal_lahirOrtu);
    $template->setValue('iniTempatLahirAnak. iniTglLahirAnak', $tempat_lahirAnak . ' / ' . $tanggal_lahirAnak);
    $template->setValue('iniPekerjaanOrtu', $pekerjaanOrtu);
    $template->setValue('iniNoTeleponOrtu', $noTeleponOrtu);
    $template->setValue('iniAlamatOrtu',$alamatOrtu);
    $template->setValue('iniPendidikanAnak', $pendidikanAnak);
    $template->setValue('iniAlamatAnak', $alamatAnak);
    $template->setValue('iniKegiatan', $kegiatan);
    $template->setValue('iniTempatBuatSurat', $tempatSurat);
    $template->setValue('iniTanggalSurat', $tanggalSurat);

    // Set the output filename
    $filename = 'Surat Izin Orang Tua - ' . $namaAnak . '.docx';

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
