@extends('app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Atualizar categoria: {!! $categoria->name, $categoria->id!!}</div>
				<div class="panel-body">	
						{!! Form::model($categoria, ['route' => ['categoria.update', $categoria->id],'method'=>'PATCH']) !!}
						

						
						    <div class="form-group">
						        {!! Form::label('name', 'name categoria') !!}
						        {!! Form::text('name', null, ['class' => 'form-control', 'required' => 'required']) !!}
						        <small class="text-danger">{{ $errors->first('name') }}</small>
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
