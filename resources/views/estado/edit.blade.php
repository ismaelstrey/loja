@extends('app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Atualizar Estado: {!! $estado->nome, $estado->id!!}</div>
				<div class="panel-body">	
						{!! Form::model($estado, ['route' => ['estado.update', $estado->id],'method'=>'PATCH']) !!}
						

						
						    <div class="form-group">
						        {!! Form::label('name', 'Nome estado') !!}
						        {!! Form::text('name', null, ['class' => 'form-control', 'required' => 'required']) !!}
						        <small class="text-danger">{{ $errors->first('nome') }}</small>
						    </div>
						
						    <div class="btn-group pull-right">
						        {!! Form::reset("Cancelar", ['class' => 'btn btn-warning']) !!}
						        {!! Form::submit("Atualizar", ['class' => 'btn btn-success']) !!}
						    </div>				
						{!! Form::close() !!}
										
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
