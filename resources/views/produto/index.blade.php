@extends('app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">
					{!!Search('produto','Produto')!!}
				</div>
				<div class="panel-body">

						@include('messages.index')

						@if (!$produtos->count() > 0)
							<div class="alert alert-info">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								<strong>Nenhum Produto encontado!!</strong> Nescessario cadatrar produtos
							</div>
						@endif
					<table class="table table-hover">
				<thead>
						<tr>
							<th>Imagem</th>
							<th>Nome</th>
							<th>Preço</th>
							<th>Descrição</th>
							<th class="text-center">Categoria</th>
							
							<th width="20%" class="text-center" colspan="3">Editar</th>
						</tr>
				</thead>
				<tbody>
					
					@foreach ($produtos as $produto)
						<tr>
							<td><a href="{{ url('/produto/'.$produto->id) }}"><img src="{{ url(''.$produto->thunb) }}"class ="photo_produto"></a></td>
							<td>{{ $produto->name }}</td>
							<td>R$ {{ $produto->prince }}</td>

							<td>{{ $produto->description }}</td>

							<td class="text-center">{{ $produto->cat_id }}</td>
							
							<td><a href="{{ url('/produto/'.$produto->id) }}" class="btn btn-info" title="Visualizar"><span class="glyphicon glyphicon-zoom-in"></span></a></td>
							<td><a href="{{ url('/produto/'.$produto->id.'/edit') }}" class="btn btn-warning" title="Editar"><span class="glyphicon glyphicon-edit"></span></a></td>
							<td>

							{!! Form::open(['method' => 'DELETE', 'route' => ['produto.destroy', $produto->id]]) !!}
							{!! Form::hidden('id', $produto->id) !!}
							{!! Form::submit('Delete', ['class' => 'btn btn-danger text-center']) !!}
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
