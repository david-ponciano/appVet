<div class="table-responsive">
    <table class="table" id="historials-table">
        <thead>
            <tr>
                <th>Id</th>
        <th>Fecha</th>
        <th>Servicio</th>
        <th>Descripcion</th>
                <th colspan="3">Acciones</th>
            </tr>
        </thead>
        <tbody>
        @foreach($historials as $historial)
            <tr>
                <td>{{ $historial->id }}</td>
            <td>{{ $historial->fecha }}</td>
            <td>{{ $historial->servicio }}</td>
            <td>{{ $historial->descripcion }}</td>
                <td>
                    {!! Form::open(['route' => ['historials.destroy', $historial->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('historials.show', [$historial->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('historials.edit', [$historial->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Estás seguro?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
