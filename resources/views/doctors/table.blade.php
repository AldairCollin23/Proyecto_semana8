<div class="table-responsive">
    <table class="table" id="doctors-table">
        <thead>
            <tr>
            <th>id</th>
                <th>Apellido</th>
        <th>Nombre</th>
        <th>Dni</th>
        <th>Especialidad</th>
        <th>Foto</th>
                <th colspan="3">Accion</th>
            </tr>
        </thead>
        <tbody>
        @foreach($doctors as $doctor)
            <tr>
            <td>{{ $doctor->id }}</td>
            <td>{{ $doctor->apellido }}</td>
            <td>{{ $doctor->nombre }}</td>
            <td>{{ $doctor->dni }}</td>
            <td>{{ $doctor->especialidad }}</td>
            <td><img height="50" src="{{ $doctor->image_url }}"/></td>
                <td width="120">
                    {!! Form::open(['route' => ['doctors.destroy', $doctor->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('doctors.show', [$doctor->id]) }}" class='btn btn-success btn-x'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('doctors.edit', [$doctor->id]) }}" class='btn btn-primary btn-x'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-x', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
