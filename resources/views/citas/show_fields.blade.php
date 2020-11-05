<!-- Idcita Field -->
<div class="form-group">
    {!! Form::label('idCita', 'Idcita:') !!}
    <p>{{ $citas->idCita }}</p>
</div>

<!-- Idusuario Field -->
<div class="form-group">
    {!! Form::label('idUsuario', 'Idusuario:') !!}
    <p>{{ $citas->idUsuario }}</p>
</div>

<!-- Idmascota Field -->
<div class="form-group">
    {!! Form::label('idMascota', 'Idmascota:') !!}
    <p>{{ $citas->idMascota }}</p>
</div>

<!-- Idservicio Field -->
<div class="form-group">
    {!! Form::label('idServicio', 'Idservicio:') !!}
    <p>{{ $citas->idServicio }}</p>
</div>

<!-- Fecha Field -->
<div class="form-group">
    {!! Form::label('fecha', 'Fecha:') !!}
    <p>{{ $citas->fecha }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $citas->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $citas->updated_at }}</p>
</div>

