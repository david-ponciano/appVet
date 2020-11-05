<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $historial->id }}</p>
</div>

<!-- Fecha Field -->
<div class="form-group">
    {!! Form::label('fecha', 'Fecha:') !!}
    <p>{{ $historial->fecha }}</p>
</div>

<!-- Servicio Field -->
<div class="form-group">
    {!! Form::label('servicio', 'Servicio:') !!}
    <p>{{ $historial->servicio }}</p>
</div>

<!-- Descripcion Field -->
<div class="form-group">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    <p>{{ $historial->descripcion }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $historial->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $historial->updated_at }}</p>
</div>

