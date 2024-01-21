<?php
define("APP_NAME", "MEJA");

$no_meja = "";
if (isset($_GET["no_meja"]) && $_GET['no_meja'] !== "") {
    $no_meja = $_GET['no_meja'];
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
    <div class="super-center">
        <h1>
            <?= APP_NAME;
            echo $no_meja ?>
        </h1>
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
            <label>Nama Pelanggan</label>
            <input name="nama_pelanggan" />
            <label>Jumlah Orang</label>
            <input name="jumlah_orang" />
            <button type="submit" name="update">Update Meja</button>
        </form>
    </div>
</body>

</html>