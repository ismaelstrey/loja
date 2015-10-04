@extends('app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Nova Postagem</div>
				<div class="panel-body">
					{!! Form::open(['route'=>['post.store']]) !!}
						@include('post.form.post')
						<input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
						
						{!!Form::submit('enviar',[ 'class'=>'btn btn-info'])!!}
						{{-- {!!link_to('#', 'Registrar',['id'=>'registrousuario', 'class'=>'btn btn-info'], $secure = null)!!} --}}
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
