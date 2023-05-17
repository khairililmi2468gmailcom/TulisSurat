<?php

require_once 'vendor/autoload.php'; // Require the PHPWord autoloader

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the form data
    $nama = $_POST['nama'];
    $tplahir = $_POST['tplahir'];
    $tanggal_lahir = $_POST['tanggal-lahir'];
    $kelamin = $_POST['kelamin'];
    $agama = $_POST['agama'];
    $pendidikan = $_POST['pendidikan'];
    $nohp = $_POST['nohp'];
    $alamat = $_POST['alamat'];
    $kota = $_POST['kota'];
    $propinsi = $_POST['propinsi'];
    $perusahaan = $_POST['perusahaan'];
    $posisi = $_POST['posisi'];
    $tanggal_lamaran = $_POST['tanggal-lamaran'];

    // Create a new PHPWord object
    $phpWord = new \PhpOffice\PhpWord\PhpWord();

    // Add a section to the document
    $section = $phpWord->addSection();

    // Add a title to the section
    $section->addTitle('SURAT LAMARAN PEKERJAAN');

    // Add some text to the section
    $section->addText("Kepada Yth. HRD $perusahaan");
    $section->addText('Dengan Hormat,');
    $section->addText('Saya yang bertanda tangan di bawah ini :');

    // Add a table to the section
    $table = $section->addTable();
    $table->addRow();
    $table->addCell(2000)->addText('Nama Lengkap');
    $table->addCell(5000)->addText($nama);
    $table->addRow();
    $table->addCell(2000)->addText('Tempat Lahir');
    $table->addCell(5000)->addText($tplahir);
    $table->addRow();
    $table->addCell(2000)->addText('Tanggal Lahir');
    $table->addCell(5000)->addText($tanggal_lahir);
    $table->addRow();
    $table->addCell(2000)->addText('Jenis Kelamin');
    $table->addCell(5000)->addText($kelamin);
    $table->addRow();
    $table->addCell(2000)->addText('Agama');
    $table->addCell(5000)->addText($agama);
    $table->addRow();
    $table->addCell(2000)->addText('Pendidikan Terakhir');
    $table->addCell(5000)->addText($pendidikan);
    $table->addRow();
    $table->addCell(2000)->addText('No Handphone');
    $table->addCell(5000)->addText($nohp);
    $table->addRow();
    $table->addCell(2000)->addText('Alamat');
    $table->addCell(5000)->addText($alamat);
    $table->addRow();
    $table->addCell(2000)->addText('Kota / Kabupaten');
    $table->addCell(5000)->addText($kota);
    $table->addRow();
    $table->addCell(2000)->addText('Provinsi');
    $table->addCell(5000)->addText($propinsi);
    $section->addText("Dengan ini saya bermaksud mengajukan lamaran pekerjaan pada perusahaan yang Bapak/Ibu pimpin untuk posisi $posisi. Saya mengetahui informasi lowongan pekerjaan tersebut melalui $perusahaan dan merasa tertarik untuk bergabung dengan perusahaan yang Bapak/Ibu pimpin.");
    $section->addText("Saya memiliki pengalaman kerja selama beberapa tahun di bidang yang sama, sehingga saya yakin dapat memberikan kontribusi yang positif bagi perusahaan. Saya juga memiliki kemampuan dalam hal $posisi dan kompetensi lain yang relevan dengan pekerjaan tersebut.");
    $section->addText('Berikut adalah lampiran yang saya sertakan dalam lamaran ini:');
    $section->addListItem('Curriculum Vitae', 0);
    $section->addListItem('Fotocopy Ijazah dan Transkip Nilai', 0);
    $section->addListItem('Fotocopy Sertifikat Pelatihan atau Seminar', 0);
    $section->addListItem('Pas Foto Terbaru', 0);

    $section->addText('Demikian surat lamaran ini saya buat dengan sebenar-benarnya dan saya siap untuk dihadirkan pada saat wawancara atau seleksi berikutnya.');

    $section->addText('Hormat saya,');
    $section->addText("$nama");

    // Save the document as a Word file
    $writer = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
    $writer->save('surat_lamaran.docx');
    if(isset($_POST['submit'])){
            // Download the file

            // $filename = 'nama_file.docx';
            // header('Content-type: application/vnd.openxmlformats-officedocument.wordprocessingml.document');
            // header('Content-Disposition: attachment; filename='.$filename);

            // // Output generated file to output buffer
            // $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
            // ob_end_clean(); // Clear output buffer
            // $objWriter->save('php://output');
            // exit();
    header('Content-Description: File Transfer');
    header('Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document');
    header('Content-Disposition: attachment; filename="surat_lamaran.docx"');
    header('Content-Transfer-Encoding: binary');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize('surat_lamaran.docx'));
    ob_clean();
    flush();
    readfile('surat_lamaran.docx');
    unlink('surat_lamaran.docx');
    exit();
    }
}else {
    echo 'Invalid request';
}
?>
