<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $servicio->id }}</p>
</div>

<!-- Tiposervicio Field -->
<div class="form-group">
    {!! Form::label('tipoServicio', 'Tiposervicio:') !!}
    <p>{{ $servicio->tipoServicio }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $servicio->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $servicio->updated_at }}</p>
</div>

