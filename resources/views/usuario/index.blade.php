@extends('app')
@section('content')
<?php  ?>
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">
					{!!Search('usuario','Usuarios')!!}
				</div>
				<div class="panel-body">
<div class="alert" id="msg-success" style = "display:none">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	<strong>Deletado com sucesso</strong> Usuario deletado com sucesso
</div>


 @if ($errors->has())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                {{ $error }}<br>        
            @endforeach
        </div>
 @endif
					@if ($usuarios->count() > 0)
					
					
					
					<table class="table table-hover">
				<thead>
						<tr>
							<th>Nome</th>
							<th>Email</th>
							<th width="20%" class="text-center" colspan="3">Editar</th>
						</tr>
				</thead>
				<tbody>

					@foreach ($usuarios as $usuario)
						<tr>
							<td>{{ $usuario->name }}</td>
							<td>{{ $usuario->email }}</td>
							<td><a href="{{ url('/usuario/'.$usuario->id) }}" class="btn btn-info" title="Visualizar"><span class="glyphicon glyphicon-zoom-in"></span></a></td>
							<td><a href="{{ url('/usuario/'.$usuario->id.'/edit') }}" class="btn btn-warning" title="Editar"><span class="glyphicon glyphicon-edit"></span></a></td>
<td>
	{!! Form::open(['method' => 'POST', 'route' => ['usuario.destroy', $usuario->id]]) !!}
	{!! Form::hidden('id', $usuario->id) !!}
	<button type="button" value="{!! $usuario->id !!}" class="btn btn-default delete_use" OnClick="Delete({!! $usuario->id !!})">button</button>
	<input type="hidden" name="_token" value="{{ csrf_token() }}" id="_token">
	{!! Form::close() !!}
</td>
						</tr>
					@endforeach

				</tbody>
					</table>
@else
<div class="alert alert-info">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	<strong>Nada Encontrado</strong> Nem um registro emcontrado
</div>

					@endif
					
				</div>
			</div>
		</div>
	</div>
</div>

@endsection
