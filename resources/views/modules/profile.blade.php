@extends('template')

@section('contenido')

<div class="content-wrapper">
    <section class="content-header">
        <h1>Configuración de la cuenta</h1>

    </section>

    <section class="content">
        <div class="box">
            <div class="box-body">

                <form method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="form-row">
                        <div class="form-group col-md-6 col-xs-12">
                            <label for="udg_code">Código Universitario</label>
                            <input type="text" class="form-control" id="udg_code" placeholder="Código Universitario" 
                            value="{{ auth()->user()->udg_code}}">
                        </div>
                        <div class="form-group col-md-6 col-xs-12">
                            <label for="email">Correo Electrónico</label>
                            <input type="text" class="form-control" id="email" placeholder="Correo"
                            value="{{ auth()->user()->email}}">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6 col-xs-12">
                            <label for="name">Nombres</label>
                            <input type="text" class="form-control" id="name" placeholder="Nombres" 
                            value="{{ auth()->user()->name}}">
                        </div>
                        <div class="form-group col-md-6 col-xs-12">
                            <label for="lastname">Apellidos</label>
                            <input type="text" class="form-control" id="lastname" placeholder="Apellidos"
                            value="{{ auth()->user()->lastname}}">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="password">Contraseña</label>
                            <input type="hidden" class="form-control" id="password" value="{{ auth() -> user() -> password }}">
                            <input type="password" class="form-control" id="passwordN">
                        </div>
                    </div>
                    {{-- <div class="form-row">
                        <div class="form-group col-md-6">
                            <input type="file" name="foto_perfil">
                            @if(auth() -> user() -> foto)
                        </div>
                    </div> --}}

                    <div class="box-footer">
                        <button type="submit" class="btn btn-block btn-primary">Guardar</button>
                    </div>

                </form>

            </div>
        </div>
    </section>

</div>
@endsection