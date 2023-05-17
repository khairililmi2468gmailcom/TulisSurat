<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpOffice\PhpWord\TemplateProcessor;
use App\Models\dataSuratModel;

class SuratController extends Controller
{
    public function index()
    {
        // ...
    }

    public function generateSurat(Request $request)
    {

        // Get the form input values
        $nama = $request->input('nama');
        $tempat_lahir = $request->input('tplahir');
        $tanggal_lahir = $request->input('tanggal-lahir');
        $jenis_kelamin = $request->input('kelamin');
        $pendidikan_terakhir = $request->input('pendidikan');
        $perusahaan = $request->input('perusahaan');
        $posisi = $request->input('posisi');
        $tglsurat = $request->input('tglsurat');
        $alamat = $request->input('alamat');
        $kabupaten = $request->input('kabupaten');
        $provinsi = $request->input('provinsi');
        $agama = $request->input('agama');
        $telepon = $request->input('nohp');
        $lampiran = $request->input('lampiran');

        // Load the template file
        $template = new TemplateProcessor(public_path('template.docx'));

        // Replace the placeholders with form input values
        $template->setValue('isiNama', $nama);
        $template->setValue('isiTempat', $tempat_lahir);
        $template->setValue('isiTgl', $tanggal_lahir);
        $template->setValue('isiJK', $jenis_kelamin);
        $template->setValue('isiPendidikan', $pendidikan_terakhir);
        $template->setValue('isiAlamat', $alamat);
        $template->setValue('isiKabupaten', $kabupaten);
        $template->setValue('isiProvinsi', $provinsi);
        $template->setValue('isiTS', $kabupaten);
        $template->setValue('isiAgama', $agama);
        $template->setValue('isiTelepon', $telepon);
        $template->setValue('isiNamaPerusahaan', $perusahaan);
        $template->setValue('isiPosisi', $posisi);
        $template->setValue('isiTglSurat', $tglsurat);
        $lampiranSip = str_replace("\n", "</w:t><w:br/><w:t>", $lampiran);
        $template->setValue('isiLampiran', $lampiranSip);
        $template->setValue('isiPT', $perusahaan);
        // Set the output filename
        $filename = 'Surat Lamaran Kerja - ' . $nama . '.docx';

        // Download the generated file
        $headers = [
            'Content-Type' => 'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
            'Content-Disposition' => 'attachment; filename="' . $filename . '"',
        ];

        $path = public_path($filename);
        $template->saveAs($path);




        // simpan input user ke dalam database
        $model = new dataSuratModel();
        $model->nama = $nama;
        $model->tempat_lahir = $tempat_lahir;
        $model->tanggal_lahir = $tanggal_lahir;
        $model->pendidikan_terakhir = $pendidikan_terakhir;
        $model->perusahaan = $perusahaan;
        $model->posisi = $posisi;
        $model->tglsurat = $tglsurat;
        $model->alamat = json_encode($alamat);
        $model->agama = $agama;
        $model->telepon = $telepon;
        $model->save();

        return response()->download($path, $filename, $headers);

    }
    public function storeIzinOrtu(Request $request)
    {
        // Mendapatkan data dari form
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
        $tanggalSurat = $request->input('isiTanggalSurat');

        //buat template word
        $template = new TemplateProcessor(public_path('templateIzinOrtu.docx'));

        // Replace the placeholders with form input values
        $template->setValue('iniNamaOrtu', $namaOrtu);
        $template->setValue('iniNamaAnak', $namaAnak);
        $template->setValue('iniNoKtp', $noKtp);
        $template->setValue('iniTempatLahirOrtu', $tempat_lahirOrtu);
        $template->setValue('iniTempatLahirAnak', $tempat_lahirAnak);
        $template->setValue('iniTglLahirOrtu', $tanggal_lahirOrtu);
        $template->setValue('iniTglLahirAnak', $tanggal_lahirAnak);
        $template->setValue('iniPekerjaanOrtu', $pekerjaanOrtu);
        $template->setValue('iniNoTeleponOrtu', $noTeleponOrtu);
        $template->setValue('iniAlamatOrtu', $alamatOrtu);
        $template->setValue('iniPendidikanAnak', $pendidikanAnak);
        $template->setValue('iniAlamatAnak', $alamatAnak);
        $template->setValue('iniKegiatan', $kegiatan);
        $template->setValue('iniTempatBuatSurat', $tempatSurat);
        $template->setValue('iniTanggalSurat', $tanggalSurat);

        $filename = 'Surat Izin Orang Tua - ' . $namaAnak . '.docx';

        // Download file
        $header = [
            'Content-Type' => 'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
            'Content-Disposition' => 'attachment; filename="' . $filename . '"',

        ];
        $path = public_path($filename);
        $template->saveAs($path);

        return response()->download($path, $filename, $header);

    }

    public function storeTidakMasukKerja(Request $request)
    {
        // Mendapatkan data dari form
        $nama = $request->input('isiNama');
        $desa = $request->input('isiDesa');
        $kecamatan = $request->input('isiKecamatan');
        $kabupaten = $request->input('isiKabupaten');
        $jenisIdentitas = $request->input('isiJenisIdentitas');
        $nomorIdentitas = $request->input('isiNomorIdentitas');
        $jabatan = $request->input('isiJabatan');
        $mulaiIzin = $request->input('isiMulaiIzin');
        $akhirIzin = $request->input('isiAkhirIzin');
        $sebab = $request->input('isiSebab');
        $alasanIzin = $request->input('isiAlasanIzin');
        $kepalaInstansi = $request->input('isiKepalaInstansi');
        $alamatInstansi = $request->input('isiAlamatInstansi');
        $tempatBuatSurat = $request->input('isiTempatBuatSurat');
        $tanggalBuatSurat = $request->input('isiTanggalBuatSurat');

        //buat template word
        $template = new TemplateProcessor(public_path('templateTMK.docx'));

        // Replace the placeholders with form input values
        $template->setValue('isiNama', $nama);
        $template->setValue('isiDesa', $desa);
        $template->setValue('isiKecamatan', $kecamatan);
        $template->setValue('isiKabupaten', $kabupaten);
        $template->setValue('isiJenisIdentitas', $jenisIdentitas);
        $template->setValue('isiNomorIdentitas', $nomorIdentitas);
        $template->setValue('isiJabatan', $jabatan);
        $template->setValue('isiMulaiIzin', $mulaiIzin);
        $template->setValue('isiAkhirIzin', $akhirIzin);
        $template->setValue('isiSebab', $sebab);
        $template->setValue('isiAlasanIzin', $alasanIzin);
        $template->setValue('isiKepalaInstansi', $kepalaInstansi);
        $template->setValue('isiAlamatInstansi', $alamatInstansi);
        $template->setValue('isiTempatBuatSurat', $tempatBuatSurat);
        $template->setValue('isiTanggalBuatSurat', $tanggalBuatSurat);

        $filename = 'Surat Tidak Masuk Kerja - ' . $nama . '.docx';

        // Download file
        $header = [
            'Content-Type' => 'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
            'Content-Disposition' => 'attachment; filename="' . $filename . '"',

        ];
        $path = public_path($filename);
        $template->saveAs($path);

        return response()->download($path, $filename, $header);

    }
    public function storeKuasa(Request $request)
    {
        // Mendapatkan data dari form
        $namaPemberi = $request->input('isiNamaPemberi');
        $tempatLahirPemberi = $request->input('isiTempatLahirPemberi');
        $tanggalLahirPemberi = $request->input('isiTanggalLahirPemberi');
        $kelaminPemberi = $request->input('isiKelaminPemberi');
        $alamatPemberi = $request->input('isiAlamatPemberi');
        $noKtpPemberi = $request->input('isiNoKtpPemberi');
        $noTeleponPemberi = $request->input('isiNoTeleponPemberi');
        $namaPenerima = $request->input('isiNamaPenerima');
        $tempatLahirPenerima = $request->input('isiTempatLahirPenerima');
        $tanggalLahirPenerima = $request->input('isiTanggalLahirPenerima');
        $kelaminPenerima = $request->input('isiKelaminPenerima');
        $alamatPenerima = $request->input('isiAlamatPenerima');
        $noKtpPenerima = $request->input('isiNoKtpPenerima');
        $noTeleponPenerima = $request->input('isiNoTeleponPenerima');
        $keperluan = $request->input('isiKeperluan');
        $tempatBuatSurat = $request->input('isiTempatBuatSurat');
        $tanggalBuatSurat = $request->input('isiTanggalBuatSurat');


        //buat template word
        $template = new TemplateProcessor(public_path('templateSKuasa.docx'));

        // Replace the placeholders with form input values
        $template->setValue('isiNamaPemberi', $namaPemberi);
        $template->setValue('isiTempatLahirPemberi', $tempatLahirPemberi);
        $template->setValue('isiTanggalLahirPemberi', $tanggalLahirPemberi);
        $template->setValue('isiKelaminPemberi', $kelaminPemberi);
        $template->setValue('isiAlamatPemberi', $alamatPemberi);
        $template->setValue('isiNoKtpPemberi', $noKtpPemberi);
        $template->setValue('isiNoTeleponPemberi', $noTeleponPemberi);
        $template->setValue('isiNamaPenerima', $namaPenerima);
        $template->setValue('isiTempatLahirPenerima', $tempatLahirPenerima);
        $template->setValue('isiTanggalLahirPenerima', $tanggalLahirPenerima);
        $template->setValue('isiKelaminPenerima', $kelaminPenerima);
        $template->setValue('isiAlamatPenerima', $alamatPenerima);
        $template->setValue('isiNoKtpPenerima', $noKtpPenerima);
        $template->setValue('isiNoTeleponPenerima', $noTeleponPenerima);
        $template->setValue('isiTempatBuatSurat', $tempatBuatSurat);
        $template->setValue('isiTanggalBuatSurat', $tanggalBuatSurat);

        $filename = 'Surat Kuasa - ' . $namaPemberi . '.docx';

        // Download file
        $header = [
            'Content-Type' => 'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
            'Content-Disposition' => 'attachment; filename="' . $filename . '"',
        ];
        $path = public_path($filename);
        $template->saveAs($path);

        return response()->download($path, $filename, $header);

    }
    public function storeBlokirRekening(Request $request)
    {
        // Mendapatkan data dari form
        $tujuanInstansi = $request->input('isiTujuanInstansi');
        $nama = $request->input('isiNama');
        $noRekening = $request->input('isiNoRekening');
        $noRekeningLaporkan = $request->input('isiNoRekeningLaporkan');
        $alamat = $request->input('isiAlamat');
        $noTelepon = $request->input('isiNoTelepon');
        $namaPemilikRekening = $request->input('isiNamaPemilikRekening');
        $alasanBlokir = $request->input('isiAlasanBlokir');
        $jumlahTransfer = $request->input('isiJumlahTransfer');
        $melaluiInstansi = $request->input('isiMelaluiInstansi');
        $waktuTransaksi = $request->input('isiWaktuTransaksi');
        $tempatBuatSurat = $request->input('isiTempatBuatSurat');
        $tanggalBuatSurat = $request->input('isiTanggalBuatSurat');


        //buat template word
        $template = new TemplateProcessor(public_path('templateBlokirRekening.docx'));

        // Replace the placeholders with form input values
        $template->setValue('isiTujuanInstansi', $tujuanInstansi);
        $template->setValue('isiNama', $nama);
        $template->setValue('isiNoRekening', $noRekening);
        $template->setValue('isiNoRekeningLaporkan', $noRekeningLaporkan);
        $template->setValue('isiAlamat', $alamat);
        $template->setValue('isiNoTelepon', $noTelepon);
        $template->setValue('isiNamaPemilikRekening', $namaPemilikRekening);
        $template->setValue('isiAlasanBlokir', $alasanBlokir);
        $template->setValue('isiJumlahTransfer', $jumlahTransfer);
        $template->setValue('isiMelaluiInstansi', $melaluiInstansi);
        $template->setValue('isiWaktuTransaksi', $waktuTransaksi);
        $template->setValue('isiTempatBuatSurat', $tempatBuatSurat);
        $template->setValue('isiTanggalBuatSurat', $tanggalBuatSurat);

        $filename = 'Surat Permohonan Blokir Rekening - ' . $nama . '.docx';

        // Download file
        $header = [
            'Content-Type' => 'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
            'Content-Disposition' => 'attachment; filename="' . $filename . '"',
        ];
        $path = public_path($filename);
        $template->saveAs($path);

        return response()->download($path, $filename, $header);

    }
    public function storePenghasilanOrtu(Request $request)
    {
        // Mendapatkan data dari form
        $namaOrtu = $request->input('isiNamaOrtu');
        $namaAnak = $request->input('isiNamaAnak');
        $tempat_lahirOrtu = $request->input('isiTempatLahirOrtu');
        $tempat_lahirAnak = $request->input('isiTempatLahirAnak');
        $tanggal_lahirOrtu = $request->input('isiTanggalLahirOrtu');
        $tanggal_lahirAnak = $request->input('isiTanggalLahirAnak');
        $jenisKelaminOrtu = $request->input('isiJenisKelaminOrtu');
        $jenisKelaminAnak = $request->input('isiJenisKelaminAnak');
        $agamaOrtu = $request->input('isiAgamaOrtu');
        $agamaAnak = $request->input('isiAgamaAnak');
        $pekerjaanOrtu = $request->input('isiPekerjaanOrtu');
        $pekerjaanAnak = $request->input('isiPekerjaanAnak');
        $alamatAnak = $request->input('isiAlamatAnak');
        $alamatOrtu = $request->input('isiAlamatOrtu');
        $penghasilanOrtu = $request->input('isiPenghasilanOrtu');
        $kepalaDesa = $request->input('isiKepalaDesa');
        $tempatSurat = $request->input('isiTempatBuatSurat');
        $tanggalSurat = $request->input('isiTanggalBuatSurat');

        //buat template word
        $template = new TemplateProcessor(public_path('templatePenghasilanOrtu.docx'));

        // Replace the placeholders with form input values
        $template->setValue('isiNamaOrtu', $namaOrtu);
        $template->setValue('isiNamaAnak', $namaAnak);
        $template->setValue('isiTempatLahirOrtu', $tempat_lahirOrtu);
        $template->setValue('isiTempatLahirAnak', $tempat_lahirAnak);
        $template->setValue('isiTanggalLahirOrtu', $tanggal_lahirOrtu);
        $template->setValue('isiTanggalLahirAnak', $tanggal_lahirAnak);
        $template->setValue('isiJenisKelaminOrtu', $jenisKelaminOrtu);
        $template->setValue('isiJenisKelaminAnak', $jenisKelaminAnak);
        $template->setValue('isiAgamaOrtu', $agamaOrtu);
        $template->setValue('isiAgamaAnak', $agamaAnak);
        $template->setValue('isiPekerjaanOrtu', $pekerjaanOrtu);
        $template->setValue('isiPekerjaanAnak', $pekerjaanAnak);
        $template->setValue('isiAlamatOrtu', $alamatOrtu);
        $template->setValue('isiAlamatAnak', $alamatAnak);
        $template->setValue('isiPenghasilanOrtu', $penghasilanOrtu);
        $template->setValue('isiKepalaDesa', $kepalaDesa);
        $template->setValue('isiTempatBuatSurat', $tempatSurat);
        $template->setValue('isiTanggalBuatSurat', $tanggalSurat);

        $filename = 'Surat Penghasilan Orang Tua - ' . $namaAnak . '.docx';

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
?>