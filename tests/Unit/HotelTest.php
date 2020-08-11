<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Http\Controllers\OurHotelsController;

class HotelTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testBestHotel()
    {
      $Besthoteldata =[
          'from_date' => '10-10-2010',
          'to_date'=>'11-10-2010',
          'city'=>'alex',
          'numberOfAdults'=>'6',
          'provider'=>'BestHotels'

      ];
      $controller =  app('App\Http\Controllers\BestHotelController')->index($Besthoteldata);
      $convert = json_decode($controller);
              $this->assertEquals($convert->{'provider'},'besthotel');

    }


    public function testTopHotel()
    {
      $Tophotel =[
          'from' => '10-10-2010',
          'to'=>'11-10-2010',
          'city'=>'alex',
          'adultsCount'=>'6',
          'provider'=>'TopHotels'

      ];
      $controller =  app('App\Http\Controllers\TopHotelsController')->index($Tophotel);
      $convert = json_decode($controller);
              $this->assertEquals($convert->{'provider'},'TopHotels');

    }



    public function testOurHotel()
    {
      $Ourhoteldata= [
          'from_date' => '10-10-2010',
          'to_date'=>'11-10-2010',
          'city'=>'alex',
          'adults_ number'=>'1',
          'provider'=>'OurHotels'

      ];
      $controller =  app('App\Http\Controllers\OurHotelsController')->index($Ourhoteldata);
      $convert = json_decode($controller);
              $this->assertEquals($convert->{'provider'},'OurHotels');

    }


}
