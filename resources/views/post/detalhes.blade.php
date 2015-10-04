@extends('app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Postagens <span class="pull-right">Publicado em: {!!Databr($posts->created_at)!!}</span></div>
				<div class="panel-body">
					<h1>{!!$posts->title!!}</h1> <br>
					
					 <hr>
					<h5>{!!$posts->tags!!}</h5><br>
					{!!$posts->content!!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
