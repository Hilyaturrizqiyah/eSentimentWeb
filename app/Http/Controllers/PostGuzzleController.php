<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PostGuzzleController extends Controller
{
    public function predict(Request $request)
    {
        $endpoint = "http://127.0.0.1:8000/predict";
        $client = new \GuzzleHttp\Client();

        $response = $client->post(
            'url',
            [
                GuzzleHttp\RequestOptions::JSON => 
                ['tweet' => 'aku senang dengan bajuku']
            ],
            ['Content-Type' => 'application/json']
        );
        $responseJSON = json_decode($response->getBody(), true);
        // url will be: http://my.domain.com/test.php?key1=5&key2=ABC;
        dd($responseJSON);

    }
}
