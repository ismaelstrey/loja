<div class="form-group">	
	{!! Form::label('name','Nome', array('class'=>'control-label')) !!}
	{!! Form::text('name', null, ['class'=>'form-control', 'id'=>'name']) !!}
</div>
<div class="form-group">	
	{!! Form::label('prince','Preço', array('class'=>'control-label')) !!}
	{!! Form::text('prince', null, ['class'=>'form-control', 'id'=>'prince']) !!}
</div>
<div class="form-group">
	{!! Form::label('cat_id','Categoria', array('class'=>'control-label')) !!}
	{!! Form::select('cat_id', $categoria,null, ['class'=>'form-control']) !!}
</div>
<div class="form-group">	 
	{!! Form::file('image', array('class'=>'btn btn-warning ','multiple data-preview-file-type'=>"any", 'data-upload-url'=>'#')) !!}
</div>
<div class="form-group">
	{!! Form::label('description','Descriçao', array('class'=>'control-label')) !!}
	{!! Form::textarea('description', null, ['class'=>'form-control rows=3', 'id'=>'description']) !!}
</div>




