@extends('app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Atualizar produto: {!! $produto->name, $produto->id!!}</div>
				<div class="panel-body">	
						{!! Form::model($produto, ['route' => ['produto.update', $produto->id],'method'=>'PATCH']) !!}
						
						@include('produto.form.form_produto')	
						{!! Form::close() !!}
										
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
