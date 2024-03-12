<?php
require_once("services/database.php");
require_once("services/pdf/fpdf.php");


if (isset($_POST['report'])) {
    $hari = $_POST['hari'];
    $pdf = new FPDF();
    $pdf->AddPage();
    $pdf->SetTitle("Laporan Pengunjung");
    $pdf->SetFont("Arial", "B", 14);

    $pdf->Text(10, 6, "Laporan Pengunjung Tanggal $hari");

    $select_history_query = "SELECT * FROM history WHERE hari='$hari'";
    $select_history = $db->query($select_history_query);

    $pdf->Cell(22, 10, "no_meja", 1, 0);
    $pdf->Cell(44, 10, "nama_pelanggan", 1, 0);
    $pdf->Cell(38, 10, "hari_keluar", 1, 0);
    $pdf->Cell(38, 10, "jam_keluar", 1, 0);
    $pdf->Cell(40, 10, "", 0, 1);

    foreach ($select_history as $history) {
        $pdf->Cell(22, 10, $history["no_meja"], 1, 0);
        $pdf->Cell(44, 10, $history["nama_pelanggan"], 1, 0);
        $pdf->Cell(38, 10, $history["hari"], 1, 0);
        $pdf->Cell(38, 10, $history["jam"], 1, 1);
    }

    $pdf->Output();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
    <title>Report</title>
</head>

<body>
    <?php include("layouts/header.php") ?>
    <div class="super-center">
        <h3>Cetak PDF</h3>
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
            <input type="date" name="hari" />
            <button type="submit" name="report">Generate Report</button>
        </form>
    </div>
</body>

</html>