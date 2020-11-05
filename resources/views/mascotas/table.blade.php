<div class="table-responsive">
    <table class="table" id="mascotas-table">
        <thead>
            <tr>
                <th>Id</th>
        <th>Nombre</th>
        <th>Raza</th>
        <th>Propietario</th>
        <th>Foto</th>
        <th>Fnacimiento</th>
                <th colspan="3">Acciones</th>
            </tr>
        </thead>
        <tbody>
        @foreach($mascotas as $mascota)
            <tr>
                <td>{{ $mascota->id }}</td>
            <td>{{ $mascota->nombre }}</td>
            <td>{{ $mascota->raza }}</td>
            <td>{{ $mascota->propietario }}</td>
            <td>{{ $mascota->foto }}</td>
            <td>{{ $mascota->fnacimiento }}</td>
                <td>
                    {!! Form::open(['route' => ['mascotas.destroy', $mascota->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('mascotas.show', [$mascota->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('mascotas.edit', [$mascota->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('¿Estás seguro?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
