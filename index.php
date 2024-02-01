<?php
require_once("services/database.php");
session_start();

if ($_SESSION['is_login'] == false) {
    header("location: login.php");
}

define("APP_NAME", "BRO RESTO");

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
    <?php include("layouts/header.php") ?>

    <h1 align="center">DAFTAR MEJA</h1>

    <div class="container">
        <?php
        foreach ($select_meja as $meja) {
            ?>
            <div class="cards" onclick="goToMeja(`<?= $meja['no_meja'] ?>`, `<?= $meja['nama_pelanggan'] ?>`)">
                <b>
                    <?= $meja['tipe_meja'] . " " . $meja['no_meja'] ?>
                </b>
                <p>
                    <?= $meja['nama_pelanggan'] == NULL && $meja['jum_orang'] == NULL ? "meja kosong" : $meja['nama_pelanggan'] . " " . $meja['jum_orang'] . " orang" ?>
                </p>
            </div>

        <?php } ?>
    </div>
    <script>
        function goToMeja(no_meja, nama_pelanggan) {
            const url = "meja.php";
            const params = `?no_meja=${no_meja}&nama_pelanggan=${nama_pelanggan}`

            window.location.replace(url + params);
        }
    </script>
</body>

</html>