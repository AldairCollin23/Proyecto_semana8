<div class="table-responsive">
    <table class="table" id="detallecitas-table">
        <thead>
            <tr>
                <th>Cita</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($detallecitas as $detallecita)
            <tr>
                <td>{{ $detallecita->cita }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['detallecitas.destroy', $detallecita->iddetallecita], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('detallecitas.show', [$detallecita->iddetallecita]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('detallecitas.edit', [$detallecita->iddetallecita]) }}" class='btn btn-default btn-xs'>
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
