@extends('app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">categorias</div>
				<div class="panel-body">
					<table class="table table-hover">
				<thead>
						<tr>
							<th>Nome</th>
							<th>Criação</th>
							<th>Atualizado</th>
							
							
						</tr>
				</thead>
				<tbody>
					
						<tr>
							<td>{{ $categoria->name }}</td>
							<td>{{ $categoria->created_at }}</td>
							<td>{{ $categoria->updated_at }}</td>
							
							
						</tr>
					
				</tbody>
					</table>
					<hr>
					
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
