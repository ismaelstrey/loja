@extends('app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Nomes</div>
				<div class="panel-body">
					<table class="table table-hover">
				<thead>
						<tr>
						    <th>ID</th>
							<th>Nome</th>
							<th>Email</th>							
							<th>Atualizado</th>
							<th>Criado</th>
						</tr>
				</thead>
				<tbody>
					
						<tr>
							
							<td>{{ $usuarios->id }}</td>
							<td>{{ $usuarios->name }}</td>
							<td>{{ $usuarios->email }}</td>
							<td>{{ $usuarios->updated_at }}</td>
							<td>{{ $usuarios->created_at }}</td>
							
							
						</tr>
				
				</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
