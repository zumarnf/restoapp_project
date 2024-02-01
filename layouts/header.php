<header>
    <div>
        <h3>
            Bro Resto
        </h3>
    </div>
    <div>
        <?php
        if (isset($_SESSION['is_login'])) {
            echo "<a href='logout.php'>logout</a>";

        } else {
            echo "<a href='login.php'>login</a>";
        }
        ?>
    </div>
</header>