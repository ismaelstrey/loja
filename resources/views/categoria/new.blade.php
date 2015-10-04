@extends('app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Nova Categoria</div>
				<div class="panel-body">
					{!! Form::open(['route'=>['categoria.store']]) !!}
						@include('categoria.form.categoria')
						<input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
						
						{!!Form::submit('enviar',[ 'class'=>'btn btn-info'])!!}
						
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection