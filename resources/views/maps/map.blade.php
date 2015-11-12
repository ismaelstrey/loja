@extends('template')
@section('css')
<script src="http://maps.google.com/maps?file=api&v=2&key=AIzaSyDPdlBpCtcJsS1ma9acofXYYVmWDOEh9AU" type="text/javascript"></script>

@endsection
@section('content')

	{{-- {!! Form::open()!!} --}}
	{{-- {!! Form::text('pesquisa', null, ['class'=>'searchmap form-control'])!!} --}}
	{{-- {!! Form::close()!!} --}}
				<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							{!! var_dump($dados)!!}
							<div id="googleMap"></div>
						</div>
					</div>	
				
					
			



@endsection