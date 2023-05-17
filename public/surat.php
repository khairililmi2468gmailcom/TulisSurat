<!DOCTYPE html>
<html>

<head>
    <title>Surat Pengunduran Diri</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 14px;
            line-height: 1.5;
            margin: 0;
            padding: 0;
        }

        .container {
            margin: 0 auto;
            max-width: 800px;
            padding: 20px;
        }

        h1 {
            font-size: 28px;
            font-weight: bold;
            margin-bottom: 20px;
            text-align: center;
        }

        p {
            margin-bottom: 10px;
            text-align: justify;
        }

        .text-right {
            text-align: right;
        }

        .signature {
            margin-top: 50px;
            text-align: center;
        }

        .signature p {
            margin-bottom: 20px;
        }

        .signature h3 {
            margin-bottom: 10px;
        }

        .date {
            margin-top: 40px;
            text-align: right;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>SURAT PENGUNDURAN DIRI</h1>

        <p>Kepada Yth,</p>
        <p>{perusahaan}</p>
        <p>{alamatperusahaan}</p>
        <p></p>

        <p>
            Sehubungan dengan beberapa pertimbangan dan keputusan yang telah saya
            pikirkan matang-matang, maka dengan ini saya menyatakan untuk
            mengundurkan diri dari jabatan yang saya emban sebagai:
        </p>

        <p>Jabatan : {jabatan}</p>
        <p>Divisi : {divisi}</p>

        <p>Pengunduran diri ini akan berlaku efektif pada tanggal :</p>
        <p>Hari/Tanggal : {tanggal}</p>
        <p>
            Atas perhatian dan kerjasamanya selama ini, saya ucapkan terima kasih.
        </p>

        <div class="signature">
            <p>Hormat Saya,</p>
            <h3>{nama}</h3>
            <p>No.KTP: {KTP}</p>
        </div>

        <div class="date">
            <p>{tanggal},</p>
            <br />
            <p>_______________</p>
        </div>

        <p class="text-right">Tembusan:</p>
        <p class="text-right">1. Direktur Utama</p>
        <p class="text-right">2. Kepala Departemen Sumber Daya Manusia</p>
    </div>
</body>

</html>
