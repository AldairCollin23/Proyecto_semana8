<div class="table-responsive">
    <table class="table" id="citas-table">
        <thead>
            <tr>
            <th>id</th>
                <th>Paciente</th>
        <th>Fecha</th>
        <th>Doctor</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($citas as $cita)
            <tr>
            <td>{{ $cita->idcita }}</td>
                <td>{{ $cita->paciente }}</td>
            <td>{{ $cita->fecha }}</td>
            <td>{{ $cita->doctor }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['citas.destroy', $cita->idcita], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('citas.show', [$cita->idcita]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('citas.edit', [$cita->idcita]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
