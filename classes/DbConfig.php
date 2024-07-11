<?php

class DbConfig {
    private static $instance = null;
    private $conn;

    private $name = 'bbb';
    private $host = 'db';
    private $user = 'bbb_user';
    private $pass = 'dGOGLWgrNE';

    private function __construct()
    {
        $this->conn = new PDO("mysql:host={$this->host};
    dbname={$this->name}", $this->user,$this->pass,
            [PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"]);
        $this->conn->exec("SET time_zone='+05:00'");
    }
    public static function getInstance()
    {
        if(!self::$instance)
        {
            self::$instance = new DbConfig();
        }

        return self::$instance;
    }
    public function getConnection()
    {
        return $this->conn;
    }
}
