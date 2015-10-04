<?php 
 function Search($rota,$titulo)
 {

echo '<div class="row">';
	echo '<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">'.$titulo;
		
	 echo '<a href="';
	 echo url('/'.$rota.'/create');
	 echo '" class ="btn btn-success pull-right">Novo</a>';
	 echo '</div>';
	 echo '<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">';
	 echo Form::open(['url' =>''.$rota.'/search']);
		

		echo '<div class="input-group">';							
		echo Form::text('pesquisa', null, ['class'=>'form-control', 'id'=>'pesquisa', 'placeholder'=>'Pesquise']); 
		echo '<span class="input-group-btn">';
		echo Form::submit('Buscar!', ['class' => 'btn btn-success']);
			  
		echo '	 </span>';
		echo '</div>';
		echo Form::close();
echo '</div>';
echo '</div>';
					
 }
 function Databr($data){
 	
 	return date('d/m/Y',strtotime($data));
 }
