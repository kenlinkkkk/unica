<?php


namespace App\Repositories;


use AES_Encryption;
use Exception;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Session;

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

        Session::put('_unica', ['aff_id' => $response->id, 'token' => $response->token]);

        return $response->token;
    }

    public function getCourseList()
    {
        $path = '/getCourseList';
        return $this->request($path,'', 'GET');
    }

    public function getCourse($data) {
        $path = '/getCourse';
        $params = [
            'id' => $data['id'],
            'aff_id' => Session::get('_unica')['id'],
            'token' => Session::get('_unica')['token']
        ];

        return $this->request($path,  $params, 'GET');
    }

    public function getListCategory() {
        $path = '/listCategory';

        return $this->request($path, '', 'GET');
    }

    public function getCourseFromCategory($data)
    {
        $path = '/coursecategory';

        $params = [
            'category_id' => $data['id'],
            'aff_id' => Session::get('_unica')['id'],
            'token' => Session::get('_unica')['token'],
            'page' => $data['page']
        ];

        return $this->request($path, $params, 'GET');
    }

    public function getStatusOrder($data) {
        $path = '/getStatusOrder';

        $params = [
            'category_id' => $data['id'],
            'aff_id' => Session::get('_unica')['id'],
            'token' => Session::get('_unica')['token']
        ];

        return $this->request($path, $params, 'GET');
    }

    public function getCourses($data)
    {
        $path = '/courses';

        $params = [
            'aff_id' => Session::get('_unica')['id'],
            'token' => Session::get('_unica')['token'],
            'page' => $data['page'],
            'option' => $data['option']
        ];

        return $this->request($path, $params, 'GET');
    }
}
