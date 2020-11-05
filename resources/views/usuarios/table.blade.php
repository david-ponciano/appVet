<div class="table-responsive">
    <table class="table" id="usuarios-table">
        <thead>
            <tr>
                <th>Id</th>
        <th>Foto</th>
        <th>Nombre</th>
        <th>Rol</th>
        <th>Email</th>
                <th colspan="3">Acciones</th>
            </tr>
        </thead>
        <tbody>
        @foreach($usuarios as $usuarios)
            <tr>
                <td>{{ $usuarios->id }}</td>
            <td>{{ $usuarios->foto }}</td>
            <td>{{ $usuarios->nombre }}</td>
            <td>{{ $usuarios->rol }}</td>
            <td>{{ $usuarios->email }}</td>
                <td>
                    {!! Form::open(['route' => ['usuarios.destroy', $usuarios->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('usuarios.show', [$usuarios->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('usuarios.edit', [$usuarios->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('¿Estás seguro?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
