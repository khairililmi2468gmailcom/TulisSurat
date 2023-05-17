<!DOCTYPE html>
<html>

<head>
    <title>Form Kuasa</title>
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
        <h2 class="mb-4">Surat Kuasa</h2>
        <form method="post" action="{{ url('/proses-kuasa') }}">
            {{ csrf_field() }}
            <div class="container mt-4">
                <h3>TANGGAL DAN TEMPAT SURAT DIBUAT</h3>
                <div class="form-group">
                    <label for="tempatsuratdibuat">Tempat Surat Dibuat</label>
                    <input type="text" class="form-control" id="isiTempatBuatSurat" name="isiTempatBuatSurat"
                        placeholder="Banda Aceh" required />
                </div>
                <div class="form-group">
                    <label for="tanggalsuratdibuat">Tanggal Surat Dibuat</label>
                    <input type="date" class="form-control" id="isiTanggalBuatSurat" name="isiTanggalBuatSurat"
                        required />
                </div>
            </div>
            <div class="container mt-4">
                <h3>DATA PEMBERI KUASA</h3>
                <div class="form-group">
                    <label for="nama">Nama Lengkap</label>
                    <input type="text" class="form-control" id="isiNamaPemberi" name="isiNamaPemberi"
                        placeholder="Siuman Tringgadeng" required />
                </div>

                <div class="form-group">
                    <label for="desa">Tempat Lahir </label>
                    <input type="text" class="form-control" id="isiTempatLahirPemberi" name="isiTempatLahirPemberi"
                        placeholder=" Darussalam " required />
                </div>
                <div class="form-group">
                    <label for="desa">Tanggal Lahir </label>
                    <input type="date" class="form-control" id="isiTanggalLahirPemberi" name="isiTanggalLahirPemberi"
                        required />
                </div>


                <div class="form-group">
                    <label for="telepon">No Telepon </label>
                    <input type="text" class="form-control" id="isiNoTeleponPemberi" name="isiNoTeleponPemberi"
                        placeholder=" 082398231212 " required />
                </div>
                <div class="form-group">
                    <label for="kelamin">Jenis Kelamin </label>
                    <select class="form-control" name="isiKelaminPemberi" aria-label="Default select example"
                        required="">
                        <option selected="" value="">Jenis Kelamin</option>
                        <option value="Laki-Laki">Laki-Laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="desa">No. KTP </label>
                    <input type="number" class="form-control" id="isiNoKtpPemberi" name="isiNoKtpPemberi"
                        placeholder="1117291321321" required />
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat </label>
                    <textarea name="isiAlamatPemberi" rows="4" class="form-control"></textarea>
                </div>
            </div>
            <div class="container mt-4">
                <h3>DATA PENERIMA KUASA</h3>
                <div class="form-group">
                    <label for="nama">Nama Penerima</label>
                    <input type="text" class="form-control" id="isiNamaPenerima" name="isiNamaPenerima"
                        placeholder="Muzails" required />
                </div>

                <div class="form-group">
                    <label for="tempat">Tempat Lahir</label>
                    <input type="text" class="form-control" id="isiTempatLahirPenerima"
                        name="isiTempatLahirPenerima" placeholder="Takengon" required />
                </div>
                <div class="form-group">
                    <label for="tglOrtu">Tanggal Lahir</label>
                    <input type="date" class="form-control" id="isiTanggalLahirPenerima"
                        name="isiTanggalLahirPenerima" placeholder="Mulai Izin Masuk Kerja" required />
                </div>


                <div class="form-group">
                    <label for="tglOrtu">No. Telepon</label>
                    <input type="number" class="form-control" id="isiNoTeleponPenerima" name="isiNoTeleponPenerima"
                        placeholder="082248324" required />
                </div>
                <div class="form-group">
                    <label for="kelamin">Jenis Kelamin </label>
                    <select class="form-control" name="isiKelaminPenerima" aria-label="Default select example"
                        required="">
                        <option selected="" value="">Jenis Kelamin</option>
                        <option value="Laki-Laki">Laki-Laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="desa">No. KTP </label>
                    <input type="number" class="form-control" id="isiNoKtpPenerima" name="isiNoKtpPenerima"
                        placeholder="1117291321321" required />
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat </label>
                    <textarea name="isiAlamatPenerima" rows="4" class="form-control"></textarea>
                </div>

            </div>
            <div class="container mt-4">
                <h3>ISI SURAT KUASA</h3>

                <div class="form-group">
                    <label for="tujuan">Tujuan Pembuatan Surat Kuasa </label>
                    <textarea name="isiKeperluan" rows="4" class="form-control"></textarea>
                </div>
            </div>
    </div>

    <button type="submit" class="btn btn-primary">Buat Surat</button>
    </form>
    </div>
</body>

</html>
