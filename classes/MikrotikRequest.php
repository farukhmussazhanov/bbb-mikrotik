<?php

class MikrotikRequest
{
//    public static string $url = '/login';

    public static function make(string $url, array $payload){
//        $gatewayIP  = Config::getGatewayIp();
//        $url        = $gatewayIP . self::$url;
        return self::sendRequest($url,$payload);
    }
    private static function sendRequest(string $url,array $postfields){
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => $postfields,
        ]);

        $response = curl_exec($curl);

        curl_close($curl);
        return  $response;
    }
}