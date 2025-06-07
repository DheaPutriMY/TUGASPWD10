<?php
require_once 'db.php';
session_start();

class User {
    private $db;

    public function __construct() {
        $this->db = (new Database())->connect();
    }

    public function login($username, $password) {
        $sql = "SELECT * FROM users WHERE username = :username AND password = :password";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([
            ':username' => $username,
            ':password' => md5($password)  // pastikan sesuai dengan penyimpanan di DB
        ]);

        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($user) {
            $_SESSION['username'] = $user['username'];
            $_SESSION['level'] = $user['level'];
            return $user['level'];
        }

        return false;
    }

    public function isLoggedIn() {
        return isset($_SESSION['username']);
    }

    public function logout() {
        session_destroy();
    }
}
?>
