@extends('template')

@section('contenido')

<div class="content-wrapper">
    <section class="content-header">
        <h1>Configuración de la cuenta</h1>

    </section>

    <section class="content">
        <div class="box">
            <div class="box-body">

                <form method="post">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6 col-xs-12">
                            <label for="name">Nombres</label>
                            <input type="text" class="form-control" id="name" placeholder="Nombres" 
                            value="{{ auth()->user()->name}}">
                        </div>
                        <div class="form-group col-md-6 col-xs-12">
                            <label for="name">Apellidos</label>
                            <input type="text" class="form-control" id="lastname" placeholder="Apellidos"
                            value="{{ auth()->user()->lastname}}">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6 col-xs-12">
                            <label for="email">Correo Electrónico</label>
                            <input type="text" class="form-control" id="email" placeholder="Correo"
                            value="{{ auth()->user()->email}}">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="password">Contraseña</label>
                            <input type="password" class="form-control" id="password">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputState">State</label>
                            <select id="inputState" class="form-control">
                                <option selected>Choose...</option>
                                <option>...</option>
                            </select>
                        </div>
                        <div class="form-group col-md-2">
                            <label for="inputZip">Zip</label>
                            <input type="text" class="form-control" id="inputZip">
                        </div>
                    </div>

                    <div class="box-footer">
                        <button type="submit" class="btn btn-block btn-primary">Guardar</button>
                    </div>

                </form>

            </div>
        </div>
    </section>

</div>
@endsection