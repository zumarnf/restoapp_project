<?php
require_once("services/database.php");
$login_notification = "";

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $select_admin_query = "SELECT * FROM admin WHERE username='$username' AND password = '$password'";

    $select_admin = $db->query($select_admin_query);

    if ($select_admin->num_rows > 0) {
        echo "ada datanya ";
    } else {
        $login_notification = "akun admin tidak ada";
    }

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
        <div>
            <label>username</label>
            <input name="username" />
        </div>
        <div>
            <label>password</label>
            <input type="password" name="password" />
        </div>
        <button type="submit" name="login">LOGIN</button>
    </form>
    <i>
        <?= $login_notification ?>
    </i>
</body>

</html>