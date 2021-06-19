<?php

namespace App;

class Covid
{
    const API_URL = 'https://ncovi.vnpt.vn/thongtindichbenh_v2';
    private $response;
    
    public function get()
    {
        return $this->request();
    }

    public function decode($decode = true)
    {
        if ($decode) {
            $this->response = json_decode($this->response, true);
        }

        return $this->response;
    }

    private function request()
    {
        $header =  [
            "Accept: */*",
            "Accept-Language: vi,en;q=0.9,vi-VN;q=0.8,en-US;q=0.7",
            "Cache-Control: no-cache",
            "Referer: https://ncovi.vnpt.vn/views/ncovi_detail.html",
            "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36",
            "X-Requested-With: XMLHttpRequest",
        ];

        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => self::API_URL,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_POSTFIELDS => "",
            CURLOPT_HTTPHEADER => $header,
        ]);
        
        $this->response = curl_exec($curl);
        $err      = curl_error($curl);
        
        curl_close($curl);
        
        if ($err) {
            throw new Exception("Error Processing Request", 1);
        }
        
        return $this->response;
    }
}
