@extends('navbar')
@section('navbar')
    @parent
    <div class="surat mb-4">
        <div class="surat-body">
            <h5>FORMULIR DATA PRIBADI</h5>
            <hr style="color:blue">

            <form method="post" action="{{ url('/proses-lamaran-docx') }}" class="php-email-form">
                {{ csrf_field() }}
                <div class="row pt-2">
                    <div class="form-group">
                        <label for="name">Nama Lengkap <span class="text-danger">*<span></span></span></label>
                        <input type="text" name="nama" value="" class="form-control"
                            placeholder="Contoh : Khairil Ilmi" required="">
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="name">Tempat Lahir <span class="text-danger">*<span></span></span></label>
                        <input type="text" class="form-control" name="tplahir" value=""
                            placeholder="Contoh : Bener Meriah" required="">
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="">Tanggal Lahir <span class="text-danger">*<span></span></span></label>
                        <input type="date" class="form-control" name="tanggal-lahir" value="" placeholder=""
                            required="">
                    </div>
                    <div class="form-group mt-3">
                        <label for="message">Alamat <span class="text-danger">*<span></span></span></label>
                        <textarea name="alamat" rows="3" class="form-control" placeholder="Contoh : Jalan xxxxxx Kampung xxxxxxx"
                            required=""></textarea>
                    </div>

                </div>
                <div class="row pt-2">
                    <div class="col-md-6 form-group">
                        <label for="">Agama </label>
                        <input type="text" class="form-control" name="agama" value=""
                            placeholder="Contoh : Islam">
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="">Kota / Kabupaten <span class="text-danger">*<span></span></span></label>
                        <input type="text" class="form-control" name="kabupaten" value=""
                            placeholder="Contoh : Bener Meriah" required="">
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="">Provinsi <span class="text-danger">*<span></span></span></label>
                        <input type="text" class="form-control" name="provinsi" value=""
                            placeholder="Contoh : Aceh" required="">
                    </div>
                </div>
                <div class="row pt-2">
                    <div class="col-md-6 form-group">
                        <label for="">Jenis Kelamin <span class="text-danger">*<span></span></span></label>
                        <select class="form-control" name="kelamin" aria-label="Default select example" required="">
                            <option selected="" value="">Pilih Jenis Kelamin</option>
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                        <div class="col-md-6 form-group">
                            <label for="">Pendidikan Terakhir <span
                                    class="text-danger">*<span></span></span></label>
                            <input type="text" class="form-control" name="pendidikan" value=""
                                placeholder="Contoh : S1 Informatika" required="">
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="">No Handphone <span class="text-danger">*<span></span></span></label>
                            <input type="text" class="form-control" name="nohp" value=""
                                placeholder="Contoh : 0822xxxxxxxxxx" required="">
                        </div>
                    </div>
                </div>

        </div>
    </div>
    <div class="surat">
        <div class="surat-body">
            <h5 class="">FORMULIR DATA LAMARAN</h5>
            <hr style="color:blue">
            <div class="form-group">
                <label for="name">Nama Perusahaan <span class="text-danger">*<span></span></span></label>
                <input type="text" class="form-control" name="perusahaan" id="namaPerusahaan"
                    placeholder="Contoh : PT. Shopee">
                </Shopee <div class="row pt-2">
                <div class="col-md-6  form-group">
                    <label for="">Posisi / Jabatan <span class="text-danger">*<span></span></span></label>
                    <input type="text" class="form-control" name="posisi" value=""
                        placeholder="Contoh : Arsitek Engineer / Software Engineer / Programmer" required="">
                </div>
                <div class="col-md-6 form-group">
                    <label for="">Tanggal Pengajuan Lamaran <span
                            class="text-danger">*<span></span></span></label>
                    <input type="date" class="form-control" name="tglsurat" value="" placeholder=""
                        required="">
                </div>
            </div>
            <div class="form-group mt-3">
                <label for="message">Lampiran <span class="text-danger">*<span></span></span></label>
                <textarea name="lampiran" rows="5" class="form-control"></textarea>
            </div>
        </div>
    </div>

    <div class="surat mt-3">
        <div class="surat-body">
            <div class="form-group mt-2">
                <input type="checkbox" id="check" name="check" value="" required="">
                <label for="check"> Saya Setuju Dengan <a target="_blank" href="/#syarat">Syarat dan Ketentuan</a>
                    Yang
                    Berlaku</label><br>
            </div>
            <div class="form-group mt-2 text-end">
                <input type="submit" value="Download Surat" name="submit" class="btn btn-primary">
            </div>

        </div>
        </form>
    </div>
    </body>
