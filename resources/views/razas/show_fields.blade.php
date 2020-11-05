<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $raza->id }}</p>
</div>

<!-- Raza Field -->
<div class="form-group">
    {!! Form::label('raza', 'Raza:') !!}
    <p>{{ $raza->raza }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $raza->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $raza->updated_at }}</p>
</div>

