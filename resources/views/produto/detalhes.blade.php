@extends('app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Produtos</div>
				<div class="panel-body">
					<table class="table table-hover">
				<thead>
						<tr>
							<th>Nome</th>
							<th>Descrição</th>							
							<th>Categoria</th>
						</tr>
				</thead>
				<tbody>
					
						<tr>
							<td>{{ $produto->name }}</td>
							<td>{{ $produto->description }}</td>
							<td>{{ $produto->cat_id }}</td>
						</tr>
					
				</tbody>
					</table>
					<hr>
					
				</div>
				<div class="panel-body text-center">
					<img src="{{ url($produto->photo) }}">
					
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
