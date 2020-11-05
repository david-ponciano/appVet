<!-- Idcita Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idCita', 'Idcita:') !!}
    {!! Form::number('idCita', null, ['class' => 'form-control']) !!}
</div>

<!-- Idusuario Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idUsuario', 'Idusuario:') !!}
    {!! Form::number('idUsuario', null, ['class' => 'form-control']) !!}
</div>

<!-- Idmascota Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idMascota', 'Idmascota:') !!}
    {!! Form::number('idMascota', null, ['class' => 'form-control']) !!}
</div>

<!-- Idservicio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idServicio', 'Idservicio:') !!}
    {!! Form::number('idServicio', null, ['class' => 'form-control']) !!}
</div>

<!-- Fecha Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha', 'Fecha:') !!}
    {!! Form::text('fecha', null, ['class' => 'form-control','id'=>'fecha']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#fecha').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('citas.index') }}" class="btn btn-default">Cancelar</a>
</div>
