@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Detalles Doctor</h1>
                </div>
                <div class="col-sm-6">
                    <a class="btn btn-outline-danger float-right"
                       href="{{ route('doctors.index') }}">
                       <i class="fas fa-undo-alt"></i>
                        Atras
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">
        <div class="card">

            <div class="card-body">
                <div class="row">
                    @include('doctors.show_fields')
                </div>
            </div>

        </div>
    </div>
@endsection
