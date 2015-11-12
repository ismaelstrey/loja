@extends('template')
@section('css')


<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places"></script>

<style type="text/css">
<!--
body, html {
	width: 100%;
	height: 100%;
	font-family: Arial, Tahoma, sans-serif;
}
.fundo {
	width: 100%;
	height: 100%;
}
body {
	background-color: #333333;
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
-->
</style>

@endsection
@section('content')

	
				<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div id="dvMap" class="fundo"></div>

						</div>
					</div>	
				
					
			

<script src="{{ asset('/js/maps.js') }}"></script>


@endsection

