<?php
require_once("services/database.php");
require_once("services/pdf/fpdf.php");

if (isset($_POST['report'])) {
    $hari = $_POST['hari'];
    $pdf = new FPDF();
    $pdf->AddPage();
    $pdf->SetTitle("Laporan Pengunjung");
    $pdf->SetFont("Arial", "B", 14);
    $pdf->Cell(40, 10, "Test", 1, 1);
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