<!-- Paciente Field -->
<div class="col-sm-12">
    {!! Form::label('paciente', 'Paciente:') !!}
    <p>{{ $cita->paciente }}</p>
</div>

<!-- Fecha Field -->
<div class="col-sm-12">
    {!! Form::label('fecha', 'Fecha:') !!}
    <p>{{ $cita->fecha }}</p>
</div>

<!-- Doctor Field -->
<div class="col-sm-12">
    {!! Form::label('doctor', 'Doctor:') !!}
    <p>{{ $cita->doctor }}</p>
</div>

