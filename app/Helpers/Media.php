<?php 
namespace App\Helpers;


class Media 
{
	
	function Nome(){
    $name = [
    'name'=>'Ismael Strey Pereira',
    'email'=>'Ismael@Strey.com',
    'idade'=> 25,
    'cidade'=>'Igrejinha'
    ];
    return $name;
}
function Calcula($valor = NULL){

	$conta = count($valor);	
	$soma  = array_sum($valor);
	$media = round($soma / $conta,NULL) ;
	return $media;
	
}
}