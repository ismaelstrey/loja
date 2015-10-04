@extends('app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">
					{!!Search('estado','Estado')!!}
				</div>
				<div class="panel-body">
					@include('messages.index')
					@if (!$estados->count() > 0)
							<div class="alert alert-info">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								<strong>Nenhum estado encontado!!</strong> Nescessario cadatrar Estados
							</div>
						@endif
					<table class="table table-hover">
				<thead>
						<tr>
							<th>Nome</th>
							
							<th width="20%" class="text-center" colspan="3">Editar</th>
						</tr>
				</thead>
				<tbody>
					@foreach ($estados as $estado)
						<tr>
							<td>{{ $estado->name }}</td>
							
							<td><a href="{{ url('/estado/'.$estado->id) }}" class="btn btn-info" title="Visualizar"><span class="glyphicon glyphicon-zoom-in"></span></a></td>
							<td><a href="{{ url('/estado/'.$estado->id.'/edit') }}" class="btn btn-warning" title="Editar"><span class="glyphicon glyphicon-edit"></span></a></td>
							<td>

{!! Form::open(['method' => 'DELETE', 'route' => ['estado.destroy', $estado->id]]) !!}
{!! Form::hidden('id', $estado->id) !!}
{!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
{!! Form::close() !!}
</td>
						</tr>
					@endforeach
				</tbody>
					</table>
					<hr>
					{!! $estados->render() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
