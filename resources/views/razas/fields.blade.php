<!-- Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id', 'Id:') !!}
    {!! Form::number('id', null, ['class' => 'form-control']) !!}
</div>

<!-- Raza Field -->
<div class="form-group col-sm-6">
    {!! Form::label('raza', 'Raza:') !!}
    {!! Form::text('raza', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('razas.index') }}" class="btn btn-default">Cancelar</a>
</div>
