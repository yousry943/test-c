<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
class BestHotelController extends Controller
{
    //
    public function  index($data)
    {
      // dd($data);
      $client = new Client();

        $res = $client->request('POST', 'https://api.programmerlive.com/', [
            'form_params' => [
                'from_date' => $data['from_date'],
                'to_date'=>$data['to_date'],
                'city'=>$data['city'],
                'numberOfAdults'=>$data['numberOfAdults'],
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
