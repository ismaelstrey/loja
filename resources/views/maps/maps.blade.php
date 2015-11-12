@extends('app')
@section('content')
{{-- https://maps.googleapis.com/maps/api/place/autocomplete/json?input=Vict&types=(cities)&language=pt_BR&key=API_KEY --}}

	{!! Form::open()!!}
	{!! Form::text('pesquisa', null, ['class'=>'form-control', 'id'=>'searchmap'])!!}
	{!! Form::close()!!}
					
					
			<div id="map"></div>	
			
					
<div class="row">				
	{!! Form::open()!!}
	<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
		{!! Form::label('lat', 'Latitude',  ['class'=>'control-label'])!!}
		{!! Form::text('lat', null, ['class'=>'form-control'])!!}
	</div>
	<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
		{!! Form::label('lng', 'Longitude',  ['class'=>'control-label'])!!}
		{!! Form::text('lng', null, ['class'=>'form-control'])!!}
	</div>
	
	
	
	{!! Form::close()!!}	
</div>	
@endsection

@section('script')
<script type="text/javascript">
function initMap() {
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 8,
    center: {lat: -34.397, lng: 150.644}
  });


  var marker = new google.maps.Marker({
  		position: {lat: -34.397, lng: 150.644},
  		map: map,
  		draggable:true
  });
  var searchBox = new google.maps.places.SearchBox(document.getElementById('searchmap'));
}

	
