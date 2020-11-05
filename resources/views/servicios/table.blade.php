<div class="table-responsive">
    <table class="table" id="servicios-table">
        <thead>
            <tr>
                <th>Id</th>
        <th>Tiposervicio</th>
                <th colspan="3">Acciones</th>
            </tr>
        </thead>
        <tbody>
        @foreach($servicios as $servicio)
            <tr>
                <td>{{ $servicio->id }}</td>
            <td>{{ $servicio->tipoServicio }}</td>
                <td>
                    {!! Form::open(['route' => ['servicios.destroy', $servicio->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('servicios.show', [$servicio->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('servicios.edit', [$servicio->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('¿Estás seguro?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
