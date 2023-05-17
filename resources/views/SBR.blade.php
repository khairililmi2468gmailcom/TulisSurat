<!DOCTYPE html>
<html>

<head>
    <title>Form Blokir Rekening</title>
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
        <h2 class="mb-4">Surat Permohonan Blokir Rekening</h2>
        <form method="post" action="{{ url('/proses-Blokir') }}">
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
                <div class="form-group">
                    <label for="tempatsuratdibuat">Tujuan *</label>
                    <input type="text" class="form-control" id="isiTujuanInstansi" name="isiTujuanInstansi"
                        placeholder="Bank Aceh" required />
                </div>
            </div>
            <div class="container mt-4">
                <h3>DATA DIRI PELAPOR</h3>
                <div class="form-group">
                    <label for="nama">Nama Lengkap</label>
                    <input type="text" class="form-control" id="isiNama" name="isiNama"
                        placeholder="Siuman Tringgadeng" required />
                </div>

                <div class="form-group">
                    <label for="desa">Nomor Rekening </label>
                    <input type="number" class="form-control" id="isiNoRekening" name="isiNoRekening"
                        placeholder=" 12134567890" required />
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat Lengkap </label>
                    <textarea name="isiAlamat" rows="4" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label for="desa">No. Telepon </label>
                    <input type="number" class="form-control" id="isiNoTelepon" name="isiNoTelepon"
                        placeholder=" 0822231322" required />
                </div>
            </div>
            <div class="container mt-4">
                <h3>DATA REKENING YANG AKAN DILAPORKAN</h3>
                <div class="form-group">
                    <label for="nama">Nama Pemilik Rekening</label>
                    <input type="text" class="form-control" id="isiNamaPemilikRekening" name="isiNamaPemilikRekening"
                        placeholder="Muzails" required />
                </div>

                <div class="form-group">
                    <label for="tempat">No. Rekening</label>
                    <input type="number" class="form-control" id="isiNoRekeningLaporkan" name="isiNoRekeningLaporkan"
                        placeholder="12134354678909" required />
                </div>
                <div class="form-group">
                    <label for="tglOrtu">Alasan Pemblokiran</label>
                    <input type="text" class="form-control" id="isiAlasanBlokir" name="isiAlasanBlokir"
                        placeholder="Contoh: Melakukan penipun pada saat jual beli" required />
                </div>
            </div>
            <div class="container mt-4">
                <h3>KRONOLOGI TRANSAKSI</h3>
                <div class="form-group">
                    <label for="tglOrtu">Jumlah Transfer</label>
                    <input type="number" class="form-control" id="isiJumlahTransfer" name="isiJumlahTransfer"
                        placeholder="Contoh: 5000000" required />
                </div>
                <div class="form-group">
                    <label for="tglOrtu">Melalui</label>
                    <input type="text" class="form-control" id="isiMelaluiInstansi" name="isiMelaluiInstansi"
                        placeholder="Contoh: Bank Aceh" required />
                </div>
                <div class="form-group">
                    <label for="tglOrtu">Waktu Transaksi</label>
                    <input type="date" class="form-control" id="isiWaktuTransaksi" name="isiWaktuTransaksi"
                        required />
                </div>

            </div>
    </div>

    <button type="submit" class="btn btn-primary">Buat Surat</button>
    </form>
    </div>
</body>

</html>
