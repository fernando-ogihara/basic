<?php

namespace app\services;

use yii\web\HttpException;

class ExternalService
{
    private $baseUrl;
    private $query;
    private $curl;
    private $result;
    private $error;
    
    public function __construct($baseUrl, $query) {
        $this->baseUrl = $baseUrl;
        $this->query = $query;
    }

    public function apiCall()
    {
        $this->curl = $this->call();

        $this->result = curl_exec($this->curl);
        $this->error = curl_error($this->curl);
        $httpCode = curl_getinfo($this->curl, CURLINFO_HTTP_CODE);

        curl_close($this->curl);

        if ($this->error) {
            throw new HttpException(500, 'cURL Error: ' . $this->error);
        }

        if ($this->result === false) {
            throw new HttpException(500, 'cURL request failed');
        }

        if ($httpCode >= 400) {
            throw new HttpException($httpCode, 'API returned HTTP code: ' . $httpCode);
        }

        $this->result = json_decode($this->result, true);

        return $this->result;
    }

    private function call() {
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => $this->baseUrl . $this->query,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
        ]);    

        return $curl;
    }
}
