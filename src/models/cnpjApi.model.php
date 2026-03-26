<?php
require 'vendor/autoload.php';
use GuzzleHttp\Client;

class CNPJApi
{
    private $client;

    public function __construct()
    {
        $this->client = new Client(
            [
                'base_uri' => 'https://www.receitaws.com.br/v1/cnpj/',
                'timeout' => 2.0,
            ]
        );
    }

    public function getCNPJ($cnpj)
    {
        $cnpj = preg_replace('/\D/', '', $cnpj);

        try {
            $response = $this->client->request('GET', $cnpj);
            return json_decode($response->getBody(), true);
        } catch (Exception $e) {
            return ['error' => $e->getMessage()];
        }
    }
}