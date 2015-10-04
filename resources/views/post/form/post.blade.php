<div class="form-group">
	
	{!! Form::label('title','Titulo', array('class'=>'control-label')) !!}
	{!! Form::text('title', null, ['class'=>'form-control', 'id'=>'name']) !!}
</div>
<div class="form-group">	
	{!! Form::label('tags','Tags', array('class'=>'control-label')) !!}
	{!! Form::text('tags', null, ['class'=>'form-control', 'id'=>'name']) !!}
</div>
<div class="form-group">	
	{!! Form::label('content','Postagem', array('class'=>'control-label')) !!}
	{!! Form::textarea('content', null, ['class'=>'form-control ckeditor','id'=>'editor1','rows'=>'10', 'cols'=>'80']) !!}
</div>

