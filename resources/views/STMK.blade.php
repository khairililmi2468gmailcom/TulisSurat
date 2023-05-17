<!DOCTYPE html>
<html>

<head>
    <title>Form Tidak Masuk Kerja</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
</head>

<body>
    <nav class="navbar">
        <img src="/images/tulisSuratIcon.png" alt="tulisSurat">

        <div class="navbar-nav">
            <a href="/#">
                <img src="/images/homeIcon.png">Home</a>
            <a href="/#fitur">
                <img src="/images/fiturIcon.png">
                Fitur</a>
            <a href="/#syarat">
                <img src="/images/syaratIcon.png">
                Syarat</a>
            <a href="#tentang" class="tentangIcon">
                <img src="/images/tentangIcon.png">
                Tentang Kami
            </a>
        </div>
        <div class="navbar-extra">
            <a href="#" id="search"> <i data-feather="search"></i></a>
            <a href="#" id="sun"> <i data-feather="moon"></i></a>
            <a href="#" id="menu"> <i data-feather="menu"></i></a>
        </div>
    </nav>

    <div class="container mt-4">
        <h2 class="mb-4">Surat Tidak Masuk Kerja</h2>
        <form method="post" action="{{ url('/proses-tidakMasukKerja') }}">
            {{ csrf_field() }}
            <div class="container mt-4">
                <h3>Biodata</h3>
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="isiNama" name="isiNama"
                        placeholder="Masukkan Nama Lengkap Anda" required />
                </div>
                <div class="form-group">
                    <label for="desa">Desa/Kelurahan </label>
                    <input type="text" class="form-control" id="isiDesa" name="isiDesa"
                        placeholder="Desa Durian Runtuh" required />
                </div>
                <div class="form-group">
                    <label for="desa">Kecamatan </label>
                    <input type="text" class="form-control" id="isiKecamatan" name="isiKecamatan"
                        placeholder="Darussalam" required />
                </div>
                <div class="form-group">
                    <label for="desa">Kabupaten </label>
                    <input type="text" class="form-control" id="isiKabupaten" name="isiKabupaten"
                        placeholder="Aceh Besar" required />
                </div>

                <div class="form-group">
                    <label for="jenis">Jenis Identitas </label>
                    <select class="form-control" name="isiJenisIdentitas" aria-label="Default select example"
                        required="">
                        <option selected="" value="">Pilih Jenis Identitas</option>
                        <option value="KTP">KTP</option>
                        <option value="KIK">KIK</option>
                        <option value="KTK">KTK</option>

                    </select>
                </div>
                <br>
                <div class="form-group">
                    <label for="desa">No. Identitas </label>
                    <input type="text" class="form-control" id="isiNomorIdentitas" name="isiNomorIdentitas"
                        required />
                </div>

            </div>
            <div class="container mt-4">
                <div class="form-group">
                    <label for="desa">Jabatan</label>
                    <input type="text" class="form-control" id="isiJabatan" name="isiJabatan"
                        placeholder="Mis. Staf Regist" required />
                </div>
                <div class="form-group">
                    <label for="tglOrtu">Mulai Izin Kerja</label>
                    <input type="date" class="form-control" id="isiMulaiIzin" name="isiMulaiIzin"
                        placeholder="Mulai Izin Masuk Kerja" required />
                </div>

                <div class="form-group">
                    <label for="tglOrtu">Akhir Izin Kerja</label>
                    <input type="date" class="form-control" id="isiAkhirIzin" name="isiAkhirIzin"
                        placeholder="Akhir Izin Masuk Kerja" required />
                </div>
                <div class="form-group">
                    <label for="sebab">Sebab</label>
                    <input type="text" class="form-control" id="isiSebab" name="isiSebab"
                        placeholder="Berhalangan/Sakit" required />
                </div>

                <div class="form-group">
                    <label for="keteranganizin">Keterangan Izin</label>
                    <input type="text" class="form-control" id="isiAlasanIzin" name="isiAlasanIzin" required />
                </div>
            </div>
            <div class="container mt-4">

                <div class="form-group">
                    <label for="nama">Kepala Instansi</label>
                    <input type="text" class="form-control" id="isiKepalaInstansi" name="isiKepalaInstansi"
                        placeholder="Masukkan Nama Instansi" required />
                </div>
                <div class="form-group">
                    <label for="nama">Alamat Instansi</label>
                    <input type="text" class="form-control" id="isiAlamatInstansi" name="isiAlamatInstansi"
                        placeholder="Masukkan Alamat Instansi" required />
                </div>
                <div class="form-group">
                    <label for="tempatbuatsurat">Tempat Pembuatan Surat Instansi</label>
                    <input type="text" class="form-control" id="isiTempatBuatSurat" name="isiTempatBuatSurat"
                        placeholder="Masukkan Tempat Pembuatan Surat" required />
                </div>
                <div class="form-group">
                    <label for="tanggal">Tangal Pembuatan Surat</label>
                    <input type="date" class="form-control" id="isiTanggalBuatSurat" name="isiTanggalBuatSurat"
                        placeholder="Masukkan Tanggal Pembuatan Surat" required />
                </div>
            </div>
    </div>

    <button type="submit" class="btn btn-primary">Buat Surat</button>
    </form>
    </div>
</body>

</html>
