<!-- Paciente Field -->
<div class="form-group col-sm-6">
    {!! Form::label('paciente', 'Paciente:') !!}
    {!! Form::text('paciente', null, ['class' => 'form-control','maxlength' => 45,'maxlength' => 45]) !!}
</div>

<!-- Fecha Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha', 'Fecha:') !!}
    {!! Form::text('fecha', null, ['class' => 'form-control','maxlength' => 45,'maxlength' => 45]) !!}
</div>

<!-- Doctor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('doctor', 'Doctor:') !!}
    {!! Form::text('doctor', null, ['class' => 'form-control','maxlength' => 45,'maxlength' => 45]) !!}
</div>