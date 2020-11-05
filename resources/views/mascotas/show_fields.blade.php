<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $mascota->id }}</p>
</div>

<!-- Nombre Field -->
<div class="form-group">
    {!! Form::label('nombre', 'Nombre:') !!}
    <p>{{ $mascota->nombre }}</p>
</div>

<!-- Raza Field -->
<div class="form-group">
    {!! Form::label('raza', 'Raza:') !!}
    <p>{{ $mascota->raza }}</p>
</div>

<!-- Propietario Field -->
<div class="form-group">
    {!! Form::label('propietario', 'Propietario:') !!}
    <p>{{ $mascota->propietario }}</p>
</div>

<!-- Foto Field -->
<div class="form-group">
    {!! Form::label('foto', 'Foto:') !!}
    <p>{{ $mascota->foto }}</p>
</div>

<!-- Fnacimiento Field -->
<div class="form-group">
    {!! Form::label('fnacimiento', 'Fnacimiento:') !!}
    <p>{{ $mascota->fnacimiento }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $mascota->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $mascota->updated_at }}</p>
</div>

