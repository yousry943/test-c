<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
class HotelController extends Controller
{
    //
    public function  index()
    {

$Ourhoteldata= [
    'from_date' => '10-10-2010',
    'to_date'=>'11-10-2010',
    'city'=>'alex',
    'adults_ number'=>'1',
    'provider'=>'OurHotels'

];

$Besthoteldata =[
    'from_date' => '10-10-2010',
    'to_date'=>'11-10-2010',
    'city'=>'alex',
    'numberOfAdults'=>'6',
    'provider'=>'BestHotels'

];

$Tophotel =[
    'from' => '10-10-2010',
    'to'=>'11-10-2010',
    'city'=>'alex',
    'adultsCount'=>'6',
    'provider'=>'TopHotels'

];

return response()->json([
  'Ourhotel'=> app('App\Http\Controllers\OurHotelsController')->index($Ourhoteldata),
  'Besthotel'=> app('App\Http\Controllers\BestHotelController')->index($Besthoteldata),
  'Tophotel'=> app('App\Http\Controllers\TopHotelsController')->index($Tophotel),


]);

    }
}
