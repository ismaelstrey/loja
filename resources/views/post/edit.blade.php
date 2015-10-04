@extends('app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Editar Postagens: <strong>{!! $posts->name !!}</strong></div>
				 @if ($errors->has())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                {{ $error }}<br>        
            @endforeach
        </div>
        @endif
				<div class="panel-body">
				
				{!! Form::model($posts, ['route' => ['post.update', $posts->id],'method'=>'PATCH']) !!}	

						@include('post.form.post')
						<button type="submit" type="button" class="btn btn-info pull-right">Atualizar</button>
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
