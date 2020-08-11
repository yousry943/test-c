<?php

namespace App\Http\Controllers;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class OurHotelsController extends Controller
{
    public  function  index($data)
    {


      $client = new Client();

        $res = $client->request('POST', 'https://api.programmerlive.com/', [
            'form_params' => [
                'from_date' => $data['from_date'],
                'to_date'=>$data['to_date'],
                'city'=>$data['city'],
                'adults_ number'=>$data['adults_ number'],
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
