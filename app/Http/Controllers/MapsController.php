<?php

namespace App\Http\Controllers;
use Mapper;
use GoogleMaps;
use Illuminate\Http\Request;
use App\Helpers\Maps;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class MapsController extends Controller
{
    public function index()
    {
        $latitude = 53.381128999999990000;
        $longitude = -1.470085000000040000;
        $options = ['strokeColor' => '#000000', 'strokeOpacity' => 0.1, 'strokeWeight' => 2, 'fillColor' => '#FFFFFF', 'radius' => 1000];
$mapa = Mapper::marker($latitude, $longitude, $options);
    	
        // Mapper::map(
        //    53.381128999999990000, -1.470085000000040000
        //    );
    	return view('maps.index',compact($mapa));
    }
    public function iframe()
    {
    	// $maker =[  
     //    'title'=>       '',
     //    'lat'=>         '-29.567453363822427',
     //    'lng'=>         '-50.80102618419187',
     //    'description'=> 'Vinicio Jair Wallauer - 06/08/2015<br>Status: <strong>Concluido</strong><br>Categoria: <strong>Lâmpada queimada</strong>',
     //    "type"=>         'Concluido'] ;
    

// Mapper::map($maker);
// Mapper::map(52.381128999999990000, 0.470085000000040000)->rectangle([['latitude' => 53.381128999999990000, 'longitude' => -1.470085000000040000], ['latitude' => 52.381128999999990000, 'longitude' => 0.470085000000040000]], ['strokeColor' => '#000000', 'strokeOpacity' => 0.1, 'strokeWeight' => 2, 'fillColor' => '#FFFFFF']);
// Mapper::map(52.381128999999990000, 0.470085000000040000)->polygon([['latitude' => 53.381128999999990000, 'longitude' => -1.470085000000040000], ['latitude' => 52.381128999999990000, 'longitude' => 0.470085000000040000]], ['strokeColor' => '#000000', 'strokeOpacity' => 0.1, 'strokeWeight' => 2, 'fillColor' => '#FFFFFF']);

return view('maps.iframe',compact('maker'));

    }
    public function maps(){

        $gmaps = new Maps('AIzaSyDPdlBpCtcJsS1ma9acofXYYVmWDOEh9AU');
        // Pega os dados (latitude, longitude e zoom) do endereço:
        $endereco = 'Av. Brasil, 1453, Rio de Janeiro, RJ';
        $dados = $gmaps->geolocal($endereco);
        // Exibe os dados encontrados:
        
        return view('maps.map',compact('dados'));

    }
     public function mapa(){
        return view('maps.mapa');

    }

}
