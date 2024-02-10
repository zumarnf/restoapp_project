<?php
require_once("services/database.php");
session_start();

if ($_SESSION['is_login'] == false) {
    header("location: login.php");
}

define("APP_NAME", "NOMOR MEJA ");

$no_meja = "";
$update_notification = "";

if (isset($_GET['no_meja']) && $_GET['no_meja'] !== "") {
    $no_meja = $_GET['no_meja'];
}

if (isset($_POST['update'])) {
    $nama_pelanggan = $_POST['nama_pelanggan'];
    $jum_orang = $_POST['jum_orang'];

    $update_meja_query = "UPDATE meja SET nama_pelanggan='$nama_pelanggan', jum_orang='$jum_orang' WHERE no_meja='$no_meja'";

    $update_meja = $db->query($update_meja_query);

    if ($update_meja) {
        header("location: index.php");
    } else {
        $update_notification = "gagal update data meja, silahkan coba lagi";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
    <title>Update Meja</title>
</head>

<body>
    <?php include("layouts/header.php"); ?>
    <div class="super-center">
        <h1>
            <?= APP_NAME;
            echo $no_meja ?>
        </h1>
        <i>
            <?= $update_notification ?>
        </i>
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
            <label>Nama Pelanggan</label>
            <input name="nama_pelanggan" />
            <label>Jumlah Orang</label>
            <input name="jum_orang" />
            <button type="submit" name="update">Update Meja</button>
        </form>
    </div>
</body>

</html>