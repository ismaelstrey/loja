<div class="form-group">
	
	{!! Form::label('name','Nome', array('class'=>'control-label')) !!}
	{!! Form::text('name', null, ['class'=>'form-control', 'id'=>'name']) !!}
</div>
<div class="form-group">
	{!! Form::label('email','Email', array('class'=>'control-label')) !!}
	{!! Form::email('email', null, ['class'=>'form-control', 'id'=>'email']) !!}
</div>
<div class="form-group">
	{!! Form::label('password','Senha', array('class'=>'control-label')) !!}
	{!! Form::password('password',['class'=>'form-control', 'id'=>'password']) !!}
</div>
<div class="form-group">
	{!! Form::label('password_confirmation','Repita senha', array('class'=>'control-label')) !!}
	{!! Form::password('password_confirmation',['class'=>'form-control', 'id'=>'password_confirmation']) !!}
</div>