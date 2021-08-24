<?php
require 'functions.php';

//ambil data di url
$id = $_GET["id"];

//query data user berdasarkan id
$usr = query("SELECT * FROM user WHERE id_user = $id")[0];

require_once 'dompdf/autoload.inc.php';

use Dompdf\Dompdf;

?>

<?php ob_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>certificate</title>
    <link rel="stylesheet" href="template.css">

</head>

<body>
    <div class="border-pattern">
        <div class="content">
            <div class="inner-content">
                <div class="badge">
                    <img src="img/logo.png" alt="img">
                </div>
                <h3 class="judul">KEMENTRIAN PENDIDIKAN DAN KEBUDAYAAN</h3>
                <h3 class="judul">POLITEKNIK NEGERI CILACAP</h3>
                <h3 class="judul">PUSAT PENELITIAN DAN PENGABDIAN KEPADA MASYARAKAT</h3>
                <h3 class="sertifikat">SERTIFIKAT</h3>
                <span>Diberikan Kepada</span>
                <h3 class="nama"><?= $usr['nama']; ?></h3>
                <p>Atas peran serta sebagai <strong><?= $usr['jenis']; ?></strong> dalam kegiatan Webinar dengan tema “Diskusi Strategi Membangun
                    Keunggulan Kompetitif Dosen dalam Bidang Penelitan” yang diselenggarakan pada 28 Juli 2020, dalam
                    kurun waktu 4 (empat) jam pertemuan yang diselengarakan oleh Pusat Penelitian dan Pengabdian kepada
                    Masyarakat (P3M) Politeknik Negeri Cilacap. </p>
                <p><?= date('d F Y'); ?></p>
            </div>
        </div>
    </div>
</body>

</html>


<?php
$html = ob_get_clean();
$dompdf = new Dompdf();
$dompdf->loadHtml($html);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream();
