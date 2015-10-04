@if(Session::has('success'))
	<div class="alert alert-success">
	{{ Session::get('success') }}
	</div>
@endif
 @if ($errors->has())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                {{ $error }}<br>        
            @endforeach
        </div>
 @endif