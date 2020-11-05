<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $productos->id }}</p>
</div>

<!-- Foto Field -->
<div class="form-group">
    {!! Form::label('foto', 'Foto:') !!}
    <p>{{ $productos->foto }}</p>
</div>

<!-- Nombre Field -->
<div class="form-group">
    {!! Form::label('nombre', 'Nombre:') !!}
    <p>{{ $productos->nombre }}</p>
</div>

<!-- Descripcion Field -->
<div class="form-group">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    <p>{{ $productos->descripcion }}</p>
</div>

<!-- Precioventa Field -->
<div class="form-group">
    {!! Form::label('precioVenta', 'Precioventa:') !!}
    <p>{{ $productos->precioVenta }}</p>
</div>

<!-- Preciocompra Field -->
<div class="form-group">
    {!! Form::label('preciocompra', 'Preciocompra:') !!}
    <p>{{ $productos->preciocompra }}</p>
</div>

<!-- Stock Field -->
<div class="form-group">
    {!! Form::label('stock', 'Stock:') !!}
    <p>{{ $productos->stock }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $productos->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $productos->updated_at }}</p>
</div>

