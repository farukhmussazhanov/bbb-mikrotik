<?php

class Auth
{
    public static function authenticate(string $login,string $password): object
    {
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
        $sql = "SELECT * from users  
                WHERE username = :username";
        $c_iq = $pdo->getConnection()->prepare($sql);
        $c_iq->bindParam(':username', $login);
        $c_iq->execute();
        $user = $c_iq->fetchObject();
        if(empty($user)){
            return (object)[
                "success"   => false,
                "error"     => "Неверный логин или пароль"
            ];
        }
        if (!password_verify($password, $user->password)) {
            return (object)[
                "success"   => false,
                "error"     => "Неверный логин или пароль"
            ];
        }
        $_SESSION['user']['username'] = $login;
        $_SESSION['user']['is_admin'] = $user->is_admin;
        $_SESSION['user']['auth']     = true;

        return (object)[
            "success" => true,
            "message" => "Login SUCCESS"
        ];
    }
    public static function checkAuth(): bool
    {
        return !empty($_SESSION['user']['auth']);
    }
    public static function addUser(string $login,string $password): bool
    {
        try {
            $pdo = DbConfig::getInstance();
        }
        catch (PDOException $exception)
        {
            return false;
        }
        $hash = password_hash($password,PASSWORD_DEFAULT);
        $sql = "INSERT INTO users(username,`password`)  
                VALUES(
                       :username,
                       :password
                )";
        $c_iq = $pdo->getConnection()->prepare($sql);
        $c_iq->bindParam(':username', $login);
        $c_iq->bindParam(':password', $hash);
        return $c_iq->execute();
    }
}