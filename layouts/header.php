<header>
    <div>
        <a href="index.php">BRO RESTO</a>
    </div>
    <div>
        <?php
        if (isset($_SESSION['is_login'])) {
            echo "<div class='right'>";
            echo "<a href='report.php'>report</a>";
            echo "<a href='logout.php'>logout</a>";
            echo "</div>";
        } else {
            echo "<a href='login.php'>login</a>";
        }
        ?>
    </div>
</header>