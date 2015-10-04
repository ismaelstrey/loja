@extends('app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">
					{!!Search('categoria','Categoria')!!}
				</div>
				<div class="panel-body">
						@include('messages.index')
					<table class="table table-hover">
				<thead>
						<tr>
							<th>Nome</th>
							
							<th width="20%" class="text-center" colspan="3">Editar</th>
						</tr>
				</thead>
				<tbody>
@foreach ($categorias as $categoria)
<tr>
	<td>{{ $categoria->name }}</td>

	<td><a href="{{ url('/categoria/'.$categoria->id) }}" class="btn btn-info" title="Visualizar"><span class="glyphicon glyphicon-zoom-in"></span></a></td>
	<td><a href="{{ url('/categoria/'.$categoria->id.'/edit') }}" class="btn btn-warning" title="Editar"><span class="glyphicon glyphicon-edit"></span></a></td>
	<td>
	{!! Form::open(['method' => 'DELETE', 'route' => ['categoria.destroy', $categoria->id]]) !!}
	{!! Form::hidden('id', $categoria->id) !!}
	{!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
	{!! Form::close() !!}
	</td>
</tr>
@endforeach
				</tbody>
					</table>
					<hr>
					 
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
