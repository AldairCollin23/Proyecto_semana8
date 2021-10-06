@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>Editar Doctor</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('adminlte-templates::common.errors')

        <div class="card">

            {!! Form::model($doctor, ['route' => ['doctors.update', $doctor->id], 'method' => 'patch', 'files' => true]) !!}

            <div class="card-body">
                <div class="row">
                    @include('doctors.fields')
                </div>
            </div>

            <div class="card-footer">
            <button class="btn btn-outline-primary" type="submit">
            <i class="fas fa-save"></i>
            Guardar
            </button>
            <a href="{{ route('doctors.index') }}" class="btn btn-outline-danger">
            <i class="fas fa-window-close"></i>   
            Cancelar
            </a>
            </div>

           {!! Form::close() !!}

        </div>
    </div>
@endsection
