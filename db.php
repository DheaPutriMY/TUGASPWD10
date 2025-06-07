<?php
class Database {
    private $host = "localhost";
    private $dbname = "login_db";
    private $username = "root";
    private $password = "";

    public function connect() {
        return new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->username, $this->password);
    }
}
?>
