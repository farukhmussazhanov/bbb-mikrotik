<?php

class Config
{
    public static function getGatewayIp(){
        $pdo = DbConfig::getInstance();
        $sql = "SELECT gateway_ip from config LIMIT 1";
        $c_iq = $pdo->getConnection()->prepare($sql);
        $c_iq->execute();
        return $c_iq->fetchColumn();
    }
}