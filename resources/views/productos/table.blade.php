<div class="table-responsive">
    <table class="table" id="productos-table">
        <thead>
            <tr>
                <th>Id</th>
        <th>Foto</th>
        <th>Nombre</th>
        <th>Descripcion</th>
        <th>Precioventa</th>
        <th>Preciocompra</th>
        <th>Stock</th>
                <th colspan="3">Acciones</th>
            </tr>
        </thead>
        <tbody>
        @foreach($productos as $productos)
            <tr>
                <td>{{ $productos->id }}</td>
            <td>{{ $productos->foto }}</td>
            <td>{{ $productos->nombre }}</td>
            <td>{{ $productos->descripcion }}</td>
            <td>{{ $productos->precioVenta }}</td>
            <td>{{ $productos->preciocompra }}</td>
            <td>{{ $productos->stock }}</td>
                <td>
                    {!! Form::open(['route' => ['productos.destroy', $productos->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('productos.show', [$productos->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('productos.edit', [$productos->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('¿Estás seguro?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
