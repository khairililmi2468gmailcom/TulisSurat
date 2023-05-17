<?php
// Include autoloader
require_once 'dompdf/autoload.inc.php';
// Reference the Dompdf namespace
use Dompdf\Dompdf;
// Instantiate and use the dompdf class
// Mendapatkan data dari form
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$telpon = $_POST['telpon'];
$email = $_POST['email'];
$posisi = $_POST['posisi'];

// Membaca file HTML
$html = file_get_contents('surat-lamaran.html');

// Mengganti placeholder dengan data yang diambil dari form
$html = str_replace('{nama}', $nama, $html);
$html = str_replace('{alamat}', $alamat, $html);
$html = str_replace('{telpon}', $telpon, $html);
$html = str_replace('{email}', $email, $html);
$html = str_replace('{posisi}', $posisi, $html);

// Membuat objek Dompdf
$dompdf = new Dompdf();

// Mengubah HTML menjadi PDF
$dompdf->loadHtml($html);
// Proses pembuatan file PDF
$dompdf->setPaper('A4', 'portrait');
$dompdf->render();

// Buat tautan unduh ke file PDF
$filename = $nama . '.pdf';
$pdf_content = $dompdf->output();
header('Content-Type: application/pdf');
header('Content-Disposition: attachment; filename="' . $filename . '"');
echo $pdf_content;

echo 'File PDF berhasil dibuat';
?>
