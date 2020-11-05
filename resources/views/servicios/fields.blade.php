<!-- Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id', 'Id:') !!}
    {!! Form::number('id', null, ['class' => 'form-control']) !!}
</div>

<!-- Tiposervicio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipoServicio', 'Tiposervicio:') !!}
    {!! Form::text('tipoServicio', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('servicios.index') }}" class="btn btn-default">Cancelar</a>
</div>
