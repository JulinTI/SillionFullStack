<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Routing\Controller as BaseController;

class RandomDataController extends BaseController
{
    public function index()
    {
        $client = new Client();
        $response = $client->request('GET', 'https://random-data-api.com/api/v2/users?size=100');
        $data = json_decode($response->getBody()->getContents(), true);

        return view('randomdata', ['users' => $data]);
    }
}
