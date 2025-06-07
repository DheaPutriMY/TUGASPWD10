<?php
require_once 'User.php';

$user = new User();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $level = $user->login($_POST['username'], $_POST['password']);
    if ($level === 0) {
        header('Location: halaman_admin.php');
    } elseif ($level === 1) {
        header('Location: halaman_user.php');
    } else {
        echo "Login gagal. Username atau password salah.";
    }
}
?>

<!-- Form HTML -->
<form method="POST">
    <label>Username:</label><br>
    <input type="text" name="username" required><br>
    <label>Password:</label><br>
    <input type="password" name="password" required><br><br>
    <input type="submit" value="Login">
</form>
