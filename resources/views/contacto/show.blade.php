@extends('layouts.app')

@section('template_title')
    {{ $contacto->name ?? "{{ __('Show') Contacto" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Contacto</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('contactos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $contacto->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido:</strong>
                            {{ $contacto->apellido }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $contacto->email }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
