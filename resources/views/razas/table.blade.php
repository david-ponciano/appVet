<div class="table-responsive">
    <table class="table" id="razas-table">
        <thead>
            <tr>
                <th>Id</th>
        <th>Raza</th>
                <th colspan="3">Acciones</th>
            </tr>
        </thead>
        <tbody>
        @foreach($razas as $raza)
            <tr>
                <td>{{ $raza->id }}</td>
            <td>{{ $raza->raza }}</td>
                <td>
                    {!! Form::open(['route' => ['razas.destroy', $raza->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('razas.show', [$raza->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('razas.edit', [$raza->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('¿Estás seguro?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
