@extends('app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Editar usuário: <strong>{!! $usuarios->name !!}</strong></div>
				 @if ($errors->has())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                {{ $error }}<br>        
            @endforeach
        </div>
        @endif
				<div class="panel-body">
				
				{!! Form::model($usuarios, ['route' => ['usuario.update', $usuarios->id],'method'=>'PATCH']) !!}	

						@include('usuario.form.usuario')
						<button type="submit" type="button" class="btn btn-info pull-right">Atualizar</button>
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
