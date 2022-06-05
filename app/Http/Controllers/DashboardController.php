<?php

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Helpers\UserSystemInfoHelper;

class DashboardController extends Controller
{
    public function index()
    {   
        $ip = UserSystemInfoHelper::get_ip();
        $loc = file_get_contents('http://ip-api.com/json/'.$ip);
        $obj = json_decode($loc, true );
        $lat= "-7.541463";
        $lon= "110.816453";
        if($lat == !null){
            //http://api.openweathermap.org/data/2.5/weather?lang=id&units=metric&lat=-7.541463&lon=110.816453&appid=4118070b22ac6cd8ffce8f91eaf4f775
            $api_2 = 'http://api.openweathermap.org/data/2.5/weather?lang=id&units=metric&lat='.$lat.'&lon='.$lon.'&appid=4118070b22ac6cd8ffce8f91eaf4f775';
            $fetch= file_get_contents($api_2);
            $weather = json_decode($fetch, true );
            if($weather['cod'] == '200'){
                return view('dashboard', [
                    'temp' => ceil($weather['main']['temp'])."°C",
                    'kecamatan' => "Banjarsari",
                    'kabupaten' => $weather['name'],
                    'image' => $weather['weather'][0]['icon'],
                    'wt' => $weather,
                    'cuaca' => ucfirst($weather['weather'][0]['description'])

                ]);
            }
        }
        
        else
        {
            return view('dashboard', [
                'temp' => "0°C",
                'kecamatan' => "Distric",
                'kabupaten' => "City"
            ]);
        }
        
       
    } 
}
