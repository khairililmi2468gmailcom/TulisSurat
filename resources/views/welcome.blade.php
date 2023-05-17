<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TulisSurat</title>
    <!-- Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;700&display=swap" rel="stylesheet">

    <!-- Feather Icons-->
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- My Style -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body>

    {{-- Navbar start --}}
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
    {{-- Navbar end --}}

    {{-- Hero Section start --}}
    <section class="hero" id="home">
        <main class="content">
            <div>
                <h1>
                    Membuat surat jadi lebih gampang
                    <br>dengan<span> tulisSurat</span>
                </h1>
                <p>
                    Ingin membuat surat digital dengan mudah
                    dan cepat? <br>TulisSurat menyediakan berbagai
                    fitur unggulan<br>untuk memudahkan Anda. Gratis, Mudah, dan Cepat!
                </p>
                <a href="/#fitur" class="cta">Buat Surat</a>
            </div>
            <span class="tulisImage">

                <img src="/images/komputerPeople.png" alt="logoKomputerdanOrang">

            </span>

            <div>
                <footer>
                    TulisSurat adalah sebuah platform online yang dirancang untuk memudahkan pembuatan surat. Dengan
                    TulisSurat, pengguna dapat membuat surat dengan cepat dan mudah menggunakan berbagai format surat
                    yang telah tersedia. Platform ini didesain agar mudah digunakan, sehingga pengguna dapat fokus pada
                    isi surat tanpa khawatir dengan teknis penulisan surat. Tujuannya adalah untuk membantu pengguna
                    membuat surat yang terlihat profesional dan mudah dibaca.
                </footer>

            </div>
        </main>

    </section>



    {{-- Fitur section start --}}
    <section id="fitur" class="fitur">
        <div>
            <h1>
                Membuat surat jadi lebih gampang
                <br>dengan tulisSurat
            </h1>
            <p>
                Ingin membuat surat digital dengan mudah
                dan cepat? <br>TulisSurat menyediakan berbagai
                fitur unggulan<br>untuk memudahkan Anda. Gratis, Mudah, dan Cepat!
            </p>
        </div>
        <span class="tulisImage">
            <img src="/images/DALL.png" alt="logoKomputerdanOrang">
        </span>
        <h2 class="titleJenis">Jenis-Jenis Surat</h2>
        <div class="jenisSurat">
            <a href="/suratLamaran" class="label">
                <img src="/images/LamaranLabel.png" alt="gambarLamaran">
                <div class="labelkecil">
                    <h3>By TulisSurat</h3>
                    <img src="/images/ceklis.png" alt="ceklis">
                </div>
                <h2>Surat Lamaran Pekerjaan</h2>
                <p>Surat lamaran kerja adalah surat yang digunakan untuk mengajukan permohonan pekerjaan ke perusahaan
                    atau organisasi. Isinya berisi informasi tentang kualifikasi, pengalaman kerja, dan minat untuk
                    bergabung dengan perusahaan tersebut.</p>
                <span>Link Label</span>
            </a>

            <a href="SPD" class="label">
                <img src="/images/pengunduranDiri.png" alt="Gambar Label">
                <div class="labelkecil">
                    <h3>By TulisSurat</h3>
                    <img src="/images/ceklis.png" alt="ceklis">
                </div>
                <h2>Surat Pengunduran Diri</h2>
                <p>Surat pengunduran diri adalah dokumen tertulis yang berisi pemberitahuan resmi dari seseorang kepada
                    pihak yang berwenang atau atasan mengenai keputusannya untuk mengundurkan diri dari pekerjaan,
                    organisasi, atau posisi yang dipegang.</p>
                <span>Link Label</span>
            </a>

            <a href="DRH" class="label">
                <img src="/images/DRH.png" alt="Gambar Label">
                <div class="labelkecil">
                    <h3>By TulisSurat</h3>
                    <img src="/images/ceklis.png" alt="ceklis">
                </div>
                <h2>Daftar Riwayat Hidup</h2>
                <p>Surat daftar riwayat hidup adalah dokumen atau tulisan berisikan informasi diri, identitas dan
                    pengalam atau kegiatan yang dilakukan oleh seseorang.</p>
                <span>Link Label</span>
            </a>
            <a href="SIO" class="label">
                <img src="/images/IzinOrtu.png" alt="Gambar Label">
                <div class="labelkecil">
                    <h3>By TulisSurat</h3>
                    <img src="/images/ceklis.png" alt="ceklis">
                </div>
                <h2>Surat Izin Orang Tua</h2>
                <p>Surat izin orang tua atau disebut juga dengan surat persetujuan orang tua adalah dokumen yang
                    menyatakan bahwa orang tua menyerahkan tanggung jawab sementara terhadap anak kepada guru, individu,
                    maupun kelompok yang dipercaya.</p>
                <span>Link Label</span>
            </a>
            <a href="STMK" class="label">
                <img src="/images/tidakMasukKerja.png" alt="Gambar Label">
                <div class="labelkecil">
                    <h3>By TulisSurat</h3>
                    <img src="/images/ceklis.png" alt="ceklis">
                </div>
                <h2>Surat Tidak Masuk Kerja</h2>
                <p>Surat izin tidak masuk kerja adalah surat dari karyawan yang dibuat secara tertulis berisi pernyataan
                    berhalangan hadir ke tempat kerja karena alasan tertentu. Contoh surat izin tidak masuk kerja
                    berikut bisa Anda sontek untuk digunakan ketika ada keperluan mendesak.</p>
                <span>Link Label</span>
            </a>
            <a href="SKUASA" class="label">
                <img src="/images/SuratKuasa.png" alt="Gambar Label">
                <div class="labelkecil">
                    <h3>By TulisSurat</h3>
                    <img src="/images/ceklis.png" alt="ceklis">
                </div>
                <h2>Surat Kuasa</h2>
                <p>Surat izin orang tua atau disebut juga dengan surat persetujuan orang tua adalah dokumen yang
                    menyatakan bahwa orang tua menyerahkan tanggung jawab sementara terhadap anak kepada guru, individu,
                    maupun kelompok yang dipercaya.</p>
                <span>Link Label</span>
            </a>
            <a href="SBR" class="label">
                <img src="/images/permohonanBlokirRekening.png" alt="Gambar Label">
                <div class="labelkecil">
                    <h3>By TulisSurat</h3>
                    <img src="/images/ceklis.png" alt="ceklis">
                </div>
                <h2>Surat Permohonan Blokir Rekening</h2>
                <p>Surat izin orang tua atau disebut juga dengan surat persetujuan orang tua adalah dokumen yang
                    menyatakan bahwa orang tua menyerahkan tanggung jawab sementara terhadap anak kepada guru, individu,
                    maupun kelompok yang dipercaya.</p>
                <span>Link Label</span>
            </a>
            <a href="SPO" class="label">
                <img src="/images/penghasilanOrtu.png" alt="Gambar Label">
                <div class="labelkecil">
                    <h3>By TulisSurat</h3>
                    <img src="/images/ceklis.png" alt="ceklis">
                </div>
                <h2>Surat Penghasilan Orang Tua</h2>
                <p>Surat izin orang tua atau disebut juga dengan surat persetujuan orang tua adalah dokumen yang
                    menyatakan bahwa orang tua menyerahkan tanggung jawab sementara terhadap anak kepada guru, individu,
                    maupun kelompok yang dipercaya.</p>
                <span>Link Label</span>
            </a>

        </div>
        <div>
            <footer>
                TulisSurat adalah sebuah platform online yang dirancang untuk memudahkan pembuatan surat. Dengan
                TulisSurat, pengguna dapat membuat surat dengan cepat dan mudah menggunakan berbagai format surat
                yang telah tersedia. Platform ini didesain agar mudah digunakan, sehingga pengguna dapat fokus pada
                isi surat tanpa khawatir dengan teknis penulisan surat. Tujuannya adalah untuk membantu pengguna
                membuat surat yang terlihat profesional dan mudah dibaca.
            </footer>

        </div>
    </section>
    {{-- Fitur section end --}}


    {{-- About section start --}}
    <section id="tentang" class="tentang">
        <br>
        <h2><span>Tentang</span> Kami</h2>
        <div class="row">
            <div class="tentang-img">
                <img src="/images/apel.png" alt="gambarTentang">
            </div>
            <div class="content">
                <h3>Khairil Ilmi</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi facilis nulla recusandae. Aut rem
                    eveniet blanditiis fugiat eligendi dolor. Neque in error ipsam, magnam dignissimos dolorem inventore
                    eaque nesciunt sint.
                    Aliquid temporibus minus quasi optio reprehenderit fugit a asperiores quisquam incidunt deleniti
                    earum sunt, assumenda cupiditate, perspiciatis unde repellat officia. Odio a ea officia eos illo
                    praesentium obcaecati dolorem optio!
                    Delectus vel provident unde facilis tenetur cum modi eligendi dolorum impedit illo et aspernatur,
                    est saepe assumenda. Ducimus tempora laborum nihil dolor optio modi saepe corporis soluta molestiae,
                    sunt totam?

                </p>
                <h3>Khairil Ilmi</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi facilis nulla recusandae. Aut rem
                    eveniet blanditiis fugiat eligendi dolor. Neque in error ipsam, magnam dignissimos dolorem inventore
                    eaque nesciunt sint.
                    Aliquid temporibus minus quasi optio reprehenderit fugit a asperiores quisquam incidunt deleniti
                    earum sunt, assumenda cupiditate, perspiciatis unde repellat officia. Odio a ea officia eos illo
                    praesentium obcaecati dolorem optio!
                    Delectus vel provident unde facilis tenetur cum modi eligendi dolorum impedit illo et aspernatur,
                    est saepe assumenda. Ducimus tempora laborum nihil dolor optio modi saepe corporis soluta molestiae,
                    sunt totam?

                </p>
                <h3>Khairil Ilmi</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi facilis nulla recusandae. Aut rem
                    eveniet blanditiis fugiat eligendi dolor. Neque in error ipsam, magnam dignissimos dolorem inventore
                    eaque nesciunt sint.
                    Aliquid temporibus minus quasi optio reprehenderit fugit a asperiores quisquam incidunt deleniti
                    earum sunt, assumenda cupiditate, perspiciatis unde repellat officia. Odio a ea officia eos illo
                    praesentium obcaecati dolorem optio!
                    Delectus vel provident unde facilis tenetur cum modi eligendi dolorum impedit illo et aspernatur,
                    est saepe assumenda. Ducimus tempora laborum nihil dolor optio modi saepe corporis soluta molestiae,
                    sunt totam?

                </p>
                <h3>Khairil Ilmi</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi facilis nulla recusandae. Aut rem
                    eveniet blanditiis fugiat eligendi dolor. Neque in error ipsam, magnam dignissimos dolorem inventore
                    eaque nesciunt sint.
                    Aliquid temporibus minus quasi optio reprehenderit fugit a asperiores quisquam incidunt deleniti
                    earum sunt, assumenda cupiditate, perspiciatis unde repellat officia. Odio a ea officia eos illo
                    praesentium obcaecati dolorem optio!
                    Delectus vel provident unde facilis tenetur cum modi eligendi dolorum impedit illo et aspernatur,
                    est saepe assumenda. Ducimus tempora laborum nihil dolor optio modi saepe corporis soluta molestiae,
                    sunt totam?

                </p>
            </div>
        </div>
    </section>
    {{-- About section end --}}



    {{-- Syarat Section start --}}
    <section class="syarat" id="syarat">

        <h2> Syarat dan Ketentuan Penggunaan<br>tulis<span>Surat</span></h2>
        <div>


            <h3>1. Persyaratan</h3>
            <p> mengakses Situs Web ini, dapat diakses dari https://vokasi.ui.ac.id/web, Anda setuju untuk terikat
                dengan Syarat dan Ketentuan Penggunaan Situs Web ini dan setuju bahwa Anda bertanggung jawab atas
                perjanjian
                dengan segala ketentuan yang berlaku hukum setempat. Jika Anda tidak setuju dengan salah satu
                persyaratan
                ini, Anda dilarang mengakses situs ini. Materi yang terkandung dalam Situs Web ini dilindungi oleh
                undang-undang hak cipta dan merek dagang.
            </p>
            <h3>2. Gunakan Lisensi</h3>
            <p>Izin diberikan untuk mengunduh sementara satu salinan materi di Situs Web Program Pendidikan Vokasi,
                Universitas Indonesia hanya untuk dilihat sementara dan non-komersial. Ini adalah pemberian lisensi,
                bukan
                pengalihan hak, dan di bawah lisensi ini Anda tidak boleh:

                memodifikasi atau menyalin materi;
                menggunakan materi untuk tujuan komersial apa pun atau untuk tampilan publik apa pun;
                berusaha merekayasa balik perangkat lunak apa pun yang terdapat di Situs Web Program Pendidikan Vokasi,
                Universitas Indonesia;
                menghapus hak cipta atau notasi kepemilikan lainnya dari materi; atau
                mentransfer materi ke orang lain atau “mencerminkan” materi di server lain mana pun.
                Ini akan membuat Program Pendidikan Vokasi Universitas Indonesia berhenti jika melanggar salah satu
                batasan
                tersebut. Setelah pengakhiran, hak menonton Anda juga akan dihentikan dan Anda harus memusnahkan materi
                unduhan apa pun yang Anda miliki baik dalam format cetak maupun elektronik. Persyaratan Layanan ini
                dibuat
                dengan bantuan Pembuat Persyaratan Layanan.
            </p>
            <h3>3. Penafian</h3>
            <p>Semua materi Website Program Pendidikan Vokasi, Universitas Indonesia disediakan “apa adanya”. Program
                Pendidikan Vokasi Universitas Indonesia tidak memberikan jaminan, baik tersurat maupun tersirat,
                sehingga
                meniadakan semua jaminan lainnya. Lebih lanjut, Program Pendidikan Vokasi, Universitas Indonesia tidak
                membuat pernyataan apa pun mengenai keakuratan atau keandalan penggunaan materi di Situs Webnya atau
                yang
                berkaitan dengan materi tersebut atau situs apa pun yang tertaut ke Situs Web ini.
            </p>
            <h3>4. Batasan</h3>
            <p>Program Pendidikan Vokasi, Universitas Indonesia atau pemasoknya tidak akan bertanggung jawab atas segala
                kerugian yang akan timbul dengan penggunaan atau ketidakmampuan untuk menggunakan materi pada Situs Web
                Program Pendidikan Vokasi, Universitas Indonesia, bahkan jika Program Pendidikan Vokasi, Universitas
                Indonesia atau perwakilan resmi dari Situs Web ini telah diberitahu, secara lisan atau tertulis, tentang
                kemungkinan kerusakan tersebut. Beberapa yurisdiksi tidak mengizinkan batasan pada jaminan tersirat atau
                batasan tanggung jawab atas kerusakan insidental, batasan ini mungkin tidak berlaku untuk Anda.
            </p>
            <h3>5. Revisi dan Errata</h3>
            <p>Materi yang muncul pada Website Program Pendidikan Vokasi, Universitas Indonesia dapat mengandung
                kesalahan
                teknis, tipografi, atau fotografi. Program Pendidikan Vokasi, Universitas Indonesia tidak akan
                menjanjikan
                bahwa materi apa pun di Situs Web ini akurat, lengkap, atau terkini. Program Pendidikan Vokasi
                Universitas
                Indonesia sewaktu-waktu dapat mengubah materi yang terdapat pada Websitenya tanpa pemberitahuan. Program
                Vokasi Universitas Indonesia tidak berkomitmen untuk memperbarui materi.
            </p>

            <h3>6. Tautan</h3>
            <p>Program Pendidikan Vokasi, Universitas Indonesia belum meninjau semua situs yang tertaut ke Situs Webnya
                dan
                tidak bertanggung jawab atas isi dari situs tertaut tersebut. Kehadiran tautan apa pun tidak menyiratkan
                dukungan dari Program Pendidikan Vokasi Universitas Indonesia terhadap situs tersebut. Penggunaan situs
                web
                tertaut adalah risiko pengguna sendiri.
            </p>
            <h3> 7. Modifikasi Persyaratan Penggunaan Situs</h3>
            <p> Program Pendidikan Vokasi, Universitas Indonesia dapat merevisi Ketentuan Penggunaan Situs Web ini
                sewaktu-waktu tanpa pemberitahuan sebelumnya. Dengan menggunakan Situs Web ini, Anda setuju untuk
                terikat
                dengan versi terbaru dari Syarat dan Ketentuan Penggunaan ini.
            </p>
            <h3> 8. Privasi Anda
            </h3>
            <p>Harap baca Kebijakan Privasi kami.
            </p>
            <h3> 9. Hukum yang Mengatur
            </h3>
            <p> Setiap klaim yang terkait dengan Situs Web Program Pendidikan Vokasi, Universitas Indonesia akan diatur
                oleh
                hukum Indonesia tanpa memperhatikan pertentangan ketentuan hukumnya.
            </p>







        </div>
        <div>
            <footer>
                TulisSurat adalah sebuah platform online yang dirancang untuk memudahkan pembuatan surat. Dengan
                TulisSurat, pengguna dapat membuat surat dengan cepat dan mudah menggunakan berbagai format surat
                yang telah tersedia. Platform ini didesain agar mudah digunakan, sehingga pengguna dapat fokus pada
                isi surat tanpa khawatir dengan teknis penulisan surat. Tujuannya adalah untuk membantu pengguna
                membuat surat yang terlihat profesional dan mudah dibaca.
            </footer>

        </div>
    </section>



    {{-- Syarat Section end --}}

    <!-- feather icons-->
    <script>
        feather.replace()
    </script>

    {{-- My JavaScript --}}
    <script src="/js/script.js"></script>
</body>

</html>
