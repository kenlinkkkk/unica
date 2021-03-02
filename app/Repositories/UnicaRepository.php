<?php


namespace App\Repositories;


use AES_Encryption;
use Exception;
use GuzzleHttp\Client;

class UnicaRepository extends BaseRepository
{
    const BASE_URL = 'https://unica.vn/api';
    public function __construct()
    {
    }

    public function request($path, $params = '', $method)
    {
        $client = new Client();
        if ($method === 'GET') {
            $options['query'] = $params;
        } else {
            $options['json'] = $params;
        }
        $url = self::BASE_URL .''. $path;

        $response = $client->request($method, $url, $options);
        $body = json_decode($response->getBody());
        if ($body->success != 1) {
            throw new Exception(STATUS[$body->success]);
        } else {
            return $body->data;
        }
    }

    public function getToken($data)
    {
        $path = '/getToken';
        $response = $this->request($path, $data, 'POST');
        return $response;
    }

    public function getCourseList()
    {
        $path = '/getCourseList';

//        $response = $this->request($path,'', 'GET');
        return $this->request($path,'', 'GET');
    }

    private function getCourse($data) {
        $path = '/getCourse';

        $aes = new AES_Encryption(env('UNICA_SECRET_KEY'));
        $token = $aes->encrypt('491384');

        $params = [
            'id' => $data['id'],
            'aff_id' => 491384,
            'token' => $token
        ];

        return $this->request($path,  $params, 'GET');
    }
}
