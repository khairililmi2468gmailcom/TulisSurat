<!DOCTYPE html>
<html>

<head>
    <title>Form Penghasilan Orang Tua</title>
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
        <h2 class="mb-4">Surat Penghasilan Orang Tua</h2>
        <form method="post" action="{{ url('/proses-penghasilanOrtu') }}">
            {{ csrf_field() }}
            <div class="container mt-4">
                <div class="container mt-4">

                    <h3>TANGGAL DAN TEMPAT BUAT SURAT</h3>

                    <div class="form-group">
                        <label for="nama">Tanggal Buat Surat</label>
                        <input type="date" class="form-control" id="isiTanggalBuatSurat" name="isiTanggalBuatSurat"
                            placeholder="Masukkan Nama Lengkap Anda" required />
                    </div>
                    <div class="form-group">
                        <label for="ktp">Tempat Buat Surat</label>
                        <input type="text" class="form-control" id="isiTempatBuatSurat" name="isiTempatBuatSurat"
                            placeholder="Contoh: Bener Meriah" required />
                    </div>
                    <br>
                    <h3>KETERANGAN GAJI</h3>
                    <div class="form-group">
                        <label for="ktp">Jumlah Gaji Orang Tua</label>
                        <input type="number" class="form-control" id="isiPenghasilanOrtu" name="isiPenghasilanOrtu"
                            placeholder="Contoh: 1000000" required />
                    </div>
                    <br>
                    <h3>PENGESAHAN</h3>
                    <div class="form-group">
                        <label for="ktp">Nama Kepala Desa</label>
                        <input type="text" class="form-control" id="isiKepalaDesa" name="isiKepalaDesa"
                            placeholder="Contoh: Edy Fitra" required />
                    </div>
                </div>
            </div>
            <div class="container mt-4">
                <div class="container mt-4">
                    <h3>DATA ORANG TUA</h3>
                    <div class="form-group">
                        <label for="tempatLahir">Nama Lengkap</label>
                        <input type="text" class="form-control" id="isiNamaOrtu" name="isiNamaOrtu"
                            placeholder="Joko Andoko" required />
                    </div>
                    <div class="form-group">
                        <label for="tempatLahir">Jenis Kelamin</label>
                        <select class="form-control" name="isiJenisKelaminOrtu" aria-label="Default select example"
                            required="">
                            <option selected="" value="">Jenis Kelamin</option>
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="tempatLahir">Tempat Lahir</label>
                        <input type="text" class="form-control" id="isiTempatLahirOrtu" name="isiTempatLahirOrtu"
                            placeholder="Jakarta" required />
                    </div>
                    <div class="form-group">
                        <label for="tglOrtu">Tangal Lahir</label>
                        <input type="date" class="form-control" id="isiTanggalLahirOrtu" name="isiTanggalLahirOrtu"
                            placeholder="Masukkan Tanggal Lahir Orang Tua" required />
                    </div>
                    <div class="form-group">
                        <label for="">Agama <span class="text-danger">*<span></span></span></label>
                        <select class="form-control" name="isiAgamaOrtu" aria-label="Default select example"
                            required="">
                            <option selected="" value="">Pilih Agama</option>
                            <option value="Islam">Islam</option>
                            <option value="Protestan">Kristen Protestan</option>
                            <option value="Katholik">Katholik</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Budha">Budha</option>
                            <option value="Konghucu">Konghucu</option>

                        </select>
                    </div>
                    <div class="form-group">
                        <label for="tempatLahir">Pekerjaan</label>
                        <input type="text" class="form-control" id="isiPekerjaanOrtu" name="isiPekerjaanOrtu"
                            placeholder="Camat" required />
                    </div>
                    <div class="form-group">
                        <label for="alamatOrtu">Alamat Lengkap</label>
                        <textarea name="isiAlamatOrtu" rows="4" class="form-control"></textarea>
                    </div>
                </div>
            </div>
            <div class="container mt-4">
                <div class="container mt-4">
                    <h3>DATA ANAK</h3>
                    <div class="form-group">
                        <label for="tempatLahir">Nama Lengkap</label>
                        <input type="text" class="form-control" id="isiNamaAnak" name="isiNamaAnak"
                            placeholder="Joko Andoko" required />
                    </div>
                    <div class="form-group">
                        <label for="tempatLahir">Jenis Kelamin</label>
                        <select class="form-control" name="isiJenisKelaminAnak" aria-label="Default select example"
                            required="">
                            <option selected="" value="">Jenis Kelamin</option>
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="tempatLahir">Tempat Lahir</label>
                        <input type="text" class="form-control" id="isiTempatLahirAnak" name="isiTempatLahirAnak"
                            placeholder="Jakarta" required />
                    </div>
                    <div class="form-group">
                        <label for="tglAnak">Tangal Lahir</label>
                        <input type="date" class="form-control" id="isiTanggalLahirAnak"
                            name="isiTanggalLahirAnak" placeholder="Masukkan Tanggal Lahir Orang Tua" required />
                    </div>
                    <div class="form-group">
                        <label for="">Agama <span class="text-danger">*<span></span></span></label>
                        <select class="form-control" name="isiAgamaAnak" aria-label="Default select example"
                            required="">
                            <option selected="" value="">Pilih Agama</option>
                            <option value="Islam">Islam</option>
                            <option value="Protestan">Kristen Protestan</option>
                            <option value="Katholik">Katholik</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Budha">Budha</option>
                            <option value="Konghucu">Konghucu</option>

                        </select>
                    </div>
                    <div class="form-group">
                        <label for="tempatLahir">Pekerjaan</label>
                        <input type="text" class="form-control" id="isiPekerjaanAnak" name="isiPekerjaanAnak"
                            placeholder="Jakarta" required />
                    </div>
                    <div class="form-group">
                        <label for="alamatAnak">Alamat Lengkap</label>
                        <textarea name="isiAlamatAnak" rows="4" class="form-control"></textarea>
                    </div>
                </div>
            </div>
    </div>

    <button type="submit" class="btn btn-primary">Buat Surat</button>
    </form>
    </div>
</body>

</html>
