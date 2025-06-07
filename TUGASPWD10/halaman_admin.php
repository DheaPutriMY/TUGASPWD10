<?php
session_start();
if ($_SESSION['level'] !== 0) {
    header('Location: login.php');
    exit;
}
echo "Selamat datang Admin: " . $_SESSION['username'];
echo "<br><a href='logout.php'>Logout</a>";
?>
