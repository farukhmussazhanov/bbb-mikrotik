<?php

class Slider
{
    public static function getAll(){
        try {
            $pdo = DbConfig::getInstance();
        }
        catch (PDOException $exception)
        {
            return (object)[
                "success"   => false,
                "error"     => $exception->getMessage()
            ];
        }
        $sql = "SELECT * from carousel";
        $c_iq = $pdo->getConnection()->prepare($sql);
        $c_iq->execute();
        return $c_iq->fetchAll(PDO::FETCH_OBJ);
    }
    public static function add(string $src){
        try {
            $pdo = DbConfig::getInstance();
        }
        catch (PDOException $exception)
        {
            return (object)[
                "success"   => false,
                "error"     => $exception->getMessage()
            ];
        }
        $sql = "INSERT INTO carousel(src) VALUES(:src)";
        $c_iq = $pdo->getConnection()->prepare($sql);
        $c_iq->bindParam(':src', $src);
        return $c_iq->execute();
    }
}