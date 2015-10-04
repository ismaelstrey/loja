@extends('app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Estados</div>
				<div class="panel-body">
					<table class="table table-hover">
				<thead>
						<tr>
							<th>Nome</th>
							<th>Criado em</th>
							<th>Editado em</th>
						</tr>
				</thead>
				<tbody>
					
						<tr>
							<td>{{ $estado->name }}</td>
							<td>{{ $estado->created_at }}</td>
							<td>{{ $estado->updated_at }}</td>
							
							
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
