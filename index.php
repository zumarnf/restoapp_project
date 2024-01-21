<?php
require_once "services/database.php";
define("APP_NAME", "BroResto - Website Penerima Tamu");

$select_meja_query = "SELECT * FROM meja";
$select_meja = $db->query($select_meja_query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
    <title>
        <?= APP_NAME ?>
    </title>
</head>

<body>
    <h1 align="center">
        DAFTAR MEJA
    </h1>
    <div class="container">

        <?php
        foreach ($select_meja as $meja) {
            ?>
            <div class="cards">
                <p>
                    <?= $meja['tipe_meja'] . " " . $meja['no_meja'] ?>
                </p>
                <p>

                    <?= $meja['nama_pelanggan'] == NULL && $meja['jum_orang'] == NULL ? "meja kosong" : $meja['nama_pelanggan'] . " " . $meja['jum_orang'] . " " . "orang" ?>


                </p>
            </div>

        <?php } ?>
    </div>
</body>

</html>