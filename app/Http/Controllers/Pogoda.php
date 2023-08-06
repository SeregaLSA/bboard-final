<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class Pogoda extends Controller
{
    //
    public function pogoda(){ 
        $apiKey = "253fdbcba9f39f1d15ac66a9bd73a1c8";
        $cityId = "1520240";
        $apiUrl = "http://api.openweathermap.org/data/2.5/weather?id=" . $cityId . "&lang=ru&units=metric&APPID=" . $apiKey;

        $crequest = curl_init();

        curl_setopt($crequest, CURLOPT_HEADER, 0);
        curl_setopt($crequest, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($crequest, CURLOPT_URL, $apiUrl);
        curl_setopt($crequest, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($crequest, CURLOPT_VERBOSE, 0);
        curl_setopt($crequest, CURLOPT_SSL_VERIFYPEER, false);
        $response = curl_exec($crequest);

        curl_close($crequest);
        $data = json_decode($response);
        $currentTime = time();

        //var_dump($data);
        //dd($data);

        return  $data;
    }
}
