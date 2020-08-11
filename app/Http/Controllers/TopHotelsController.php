<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class TopHotelsController extends Controller
{
    //
    public function  index($data)
    {

      $client = new Client();

        $res = $client->request('POST', 'https://api.programmerlive.com/', [
            'form_params' => [
                'from' => $data['from'],
                'to'=>$data['to'],
                'city'=>$data['city'],
                'adultsCount'=>$data['adultsCount'],
                'provider'=>$data['provider']

            ]
        ]);

        if ($res->getStatusCode() == 200) { // 200 OK
          return $response_data = $res->getBody()->getContents();
        }else{
          return  $res->getStatusCode() ;
        }

    }
}
