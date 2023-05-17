<!DOCTYPE html>
<html>

<head>
    <title>Form Izin Orang Tua</title>
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
        <h2 class="mb-4">Surat Izin Orang Tua</h2>
        <form method="post" action="{{ url('/proses-izinOrtu') }}">
            {{ csrf_field() }}
            <div class="container mt-4">
                <h3>Biodata Orang Tua</h3>
                <div class="form-group">
                    <label for="nama">Nama Orang Tua</label>
                    <input type="text" class="form-control" id="isiNamaOrtu" name="isiNamaOrtu"
                        placeholder="Masukkan Nama Lengkap Anda" required />
                </div>
                <div class="form-group">
                    <label for="ktp">No. KTP</label>
                    <input type="text" class="form-control" id="isiNoKtp" name="isiNoKtp"
                        placeholder="xxxxxxxxxxxxxx" required />
                </div>
                <div class="form-group">
                    <label for="tempatLahir">Tempat Lahir</label>
                    <input type="text" class="form-control" id="isiTempatLahirOrtu" name="isiTempatLahirOrtu"
                        placeholder="Masukkan Tempat Lahir Anda" required />
                </div>

                <div class="form-group">
                    <label for="tglOrtu">Tangal Lahir</label>
                    <input type="date" class="form-control" id="isiTglLahirOrtu" name="isiTglLahirOrtu"
                        placeholder="Masukkan Tanggal Lahir Orang Tua" required />
                </div>

                <div class="form-group">
                    <label for="pekerjaanOrtu">Pekerjaan Orang Tua</label>
                    <input type="text" class="form-control" id="isiPekerjaanOrtu" name="isiPekerjaanOrtu"
                        placeholder="Masukkan Pekerjaan Orang Tua" required />
                </div>
                <div class="form-group">
                    <label for="noTeleponOrtu">No. Telepon Orang Tua</label>
                    <input type="text" class="form-control" id="isiNoTeleponOrtu" name="isiNoTeleponOrtu"
                        placeholder="08xx xxxx xxxx" required />
                </div>
                <div class="form-group">
                    <label for="alamatOrtu">Alamat Orang Tua</label>
                    <textarea name="isiAlamatOrtu" rows="4" class="form-control"></textarea>
                </div>

            </div>

            <div class="container mt-4">
                <h3>Biodata Anak</h3>
                <div class="form-group">
                    <label for="nama">Nama Anak</label>
                    <input type="text" class="form-control" id="isiNamaAnak" name="isiNamaAnak"
                        placeholder="Masukkan Nama Lengkap Anak" required />
                </div>
                <div class="form-group">
                    <label for="pendidikan">Pendidikan</label>
                    <select class="form-control" name="isiPendidikanAnak" aria-label="Default select example"
                        required="">
                        <option selected="" value="">Pilih Jenjang Pendidikan</option>
                        <option value="TK">TK/PAUD</option>
                        <option value="SD">SD</option>
                        <option value="SMP">SMP</option>
                        <option value="SMA">SMA</option>
                        <option value="D1">D1</option>
                        <option value="D2">D2</option>
                        <option value="D3">D3</option>
                        <option value="S1">S1</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="tempatLahir">Tempat Lahir Anak</label>
                    <input type="text" class="form-control" id="isiTempatLahirAnak" name="isiTempatLahirAnak"
                        placeholder="Masukkan Tempat Lahir Anda" required />
                </div>

                <div class="form-group">
                    <label for="tglAnak">Tangal Lahir</label>
                    <input type="date" class="form-control" id="isiTglLahirAnak" name="isiTglLahirAnak"
                        placeholder="Masukkan Tanggal Lahir Anak" required />
                </div>

                <div class="form-group">
                    <label for="alamatAnak">Alamat Anak</label>
                    <textarea name="isiAlamatAnak" rows="4" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label for="organisasi">Kegiatan</label>
                    <input type="text" class="form-control" id="isiKegiatan" name="isiKegiatan"
                        placeholder="Masukkan Kegiatan yang akan anda lakukan" required />
                </div>
                <div class="form-group">
                    <label for="nama">Tempat Pembuatan Surat</label>
                    <input type="text" class="form-control" id="isiTempatBuatSurat" name="isiTempatBuatSurat"
                        placeholder="Masukkan Tempat Pembuatan Surat" required />
                </div>
                <div class="form-group">
                    <label for="nama">Tangal Pembuatan Surat</label>
                    <input type="date" class="form-control" id="isiTanggalSurat" name="isiTanggalSurat"
                        placeholder="Masukkan Tanggal Pembuatan Surat" required />
                </div>
            </div>
    </div>

    <button type="submit" class="btn btn-primary">Buat Surat</button>
    </form>
    </div>
</body>

</html>
