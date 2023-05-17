<!DOCTYPE html>
<html>

<head>
    <title>Form Surat Lamaran Kerja</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <h1>Form Surat Lamaran Kerja</h1>

    <form action="{{ url('/proses-lamaran') }}" method="post">
        {{ csrf_field() }}
        <div class="form-floating mb-3" style="width: 500px; padding: 30px ">
            <input type="text" name="nama" class="form-control" id="floatingInput"
                placeholder="name@example.com" />
            <label for="floatingInput" style="padding: 48px;">Nama</label>
        </div>
        <div class="form-floating mb-3" style="width: 500px; padding: 30px "">
            <input type="email" name="email" class="form-control" id="floatingInput"
                placeholder="name@example.com" />
            <label for="floatingInpu" style="padding: 48px;">Alamat email</label>
        </div>
        <div class="form-floating mb-3" style="width: 500px; padding: 30px "">
            <input type="text" name="posisi" class="form-control" id="floatingInput"
                placeholder="name@example.com" />
            <label for="floatingInput" style="padding: 48px;">Posisi</label>
        </div>
        <div class="form-floating mb-3" style="width: 500px; padding: 30px "">
            <input type="text" name="alamat" class="form-control" id="floatingInput"
                placeholder="name@example.com" />
            <label for="floatingInput" style="padding: 48px;">alamat</label>
        </div>
        <div class="form-floating mb-3" style="width: 500px; padding: 30px "">
            <input type="text" name="telpon" class="form-control" id="floatingInput" itemid=""
                placeholder="08XXXXXXXXX" />
            <label for="floatingInput" style="padding: 48px;">telpon</label>
        </div>
        <input type="submit" class="btn btn-success" value="Kirim" />
    </form>
</body>

</html>
