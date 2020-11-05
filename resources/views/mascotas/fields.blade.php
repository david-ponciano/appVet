<!-- Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id', 'Id:') !!}
    {!! Form::number('id', null, ['class' => 'form-control']) !!}
</div>

<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Raza Field -->
<div class="form-group col-sm-6">
    {!! Form::label('raza', 'Raza:') !!}
    {!! Form::text('raza', null, ['class' => 'form-control']) !!}
</div>

<!-- Propietario Field -->
<div class="form-group col-sm-6">
    {!! Form::label('propietario', 'Propietario:') !!}
    {!! Form::text('propietario', null, ['class' => 'form-control']) !!}
</div>

<!-- Foto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('foto', 'Foto:') !!}
    {!! Form::file('foto') !!}
</div>
<div class="clearfix"></div>

<!-- Fnacimiento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fnacimiento', 'Fnacimiento:') !!}
    {!! Form::text('fnacimiento', null, ['class' => 'form-control','id'=>'fnacimiento']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#fnacimiento').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('mascotas.index') }}" class="btn btn-default">Cancelar</a>
</div>
