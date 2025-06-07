<?php
session_start();
if ($_SESSION['level'] !== 1) {
    header('Location: login.php');
    exit;
}
echo "Selamat datang User: " . $_SESSION['username'];
echo "<br><a href='logout.php'>Logout</a>";
?>
