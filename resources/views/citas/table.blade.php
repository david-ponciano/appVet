<div class="table-responsive">
    <table class="table" id="citas-table">
        <thead>
            <tr>
                <th>Idcita</th>
        <th>Idusuario</th>
        <th>Idmascota</th>
        <th>Idservicio</th>
        <th>Fecha</th>
                <th colspan="3">Accciones</th>
            </tr>
        </thead>
        <tbody>
        @foreach($citas as $citas)
            <tr>
                <td>{{ $citas->idCita }}</td>
            <td>{{ $citas->idUsuario }}</td>
            <td>{{ $citas->idMascota }}</td>
            <td>{{ $citas->idServicio }}</td>
            <td>{{ $citas->fecha }}</td>
                <td>
                    {!! Form::open(['route' => ['citas.destroy', $citas->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('citas.show', [$citas->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('citas.edit', [$citas->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('¿Éstas seguro?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
