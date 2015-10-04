@extends('app')
@section('content')
<?php  ?>
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">
					{!!Search('post','Postagems')!!}
				</div>
				<div class="panel-body">
@include('messages.index')
					@if ($posts->count() > 0)
					
					
					
					<table class="table table-hover">
				<thead>
						<tr>
							<th>Nome</th>
							
							<th width="20%" class="text-center" colspan="3">Editar</th>
						</tr>
				</thead>
				<tbody>

					@foreach ($posts as $post)
						<tr>
							<td>{{ $post->title }}</td>
							
							<td><a href="{{ url('/post/'.$post->id) }}" class="btn btn-info" title="Visualizar"><span class="glyphicon glyphicon-zoom-in"></span></a></td>
							<td><a href="{{ url('/post/'.$post->id.'/edit') }}" class="btn btn-warning" title="Editar"><span class="glyphicon glyphicon-edit"></span></a></td>
<td>
	{!! Form::open(['method' => 'DELETE', 'route' => ['post.destroy', $post->id]]) !!}
	{!! Form::hidden('id', $post->id) !!}
	
	<input type="hidden" name="_token" value="{{ csrf_token() }}" id="_token">
	{!!Form::submit('Delete',[ 'class'=>'btn btn-danger'])!!}
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
