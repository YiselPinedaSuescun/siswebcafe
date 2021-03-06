@extends('layouts.admin')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/table.css') }}">
@endsection

@section('titulo')
    <h1>
        Usuario
    </h1>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                @include('partials.message')
                <div class="box-header with-border">
                    <h3 class="box-title"></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    @if ($user)
                        <fieldset>
                            <div class="row" style="margin-top: 10px;">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="nombre" class="form-control-label"><b>Nombre <span style="color: red;"> *</span></b></label>
                                        {{ Form::text('nombre',$user->nombre,['class' => 'form-control', 'placeholder'=>'', 'required'=>'required', 'disabled']) }}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="apellido" class="form-control-label"><b>Apellidos <span style="color: red;"> *</span></b></label>
                                        {{ Form::text('apellido',$user->apellido,['class' => 'form-control', 'placeholder'=>'', 'required'=>'required', 'disabled']) }}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="documento" class="form-control-label"><b>Documento <span style="color: red;"> *</span></b></label>
                                        {{ Form::text('documento',$user->documento,['class' => 'form-control', 'placeholder'=>'', 'required'=>'required', 'disabled']) }}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="fechanacimiento" class="form-control-label"><b>Fecha nacimiento <span style="color: red;"> *</span></b></label>
                                        {{ Form::text('fechanacimiento',$user->fechanacimiento,['class' => 'form-control', 'placeholder'=>'', 'required'=>'required', 'disabled']) }}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="rol" class="form-control-label"><b>Rol <span style="color: red;"> *</span></b></label>
                                        {{ Form::text('rol',$user->rol,['class' => 'form-control', 'placeholder'=>'', 'required'=>'required', 'disabled']) }}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="genero" class="form-control-label"><b>Genero <span style="color: red;"> *</span></b></label>
                                        {{ Form::text('genero',config('opciones.genero.'.$user->genero),['class' => 'form-control', 'placeholder'=>'', 'required'=>'required', 'disabled']) }}
                                    </div>
                                </div>
                                <div class='col-md-6'>
                                    <div class="form-group">
                                        <label for="email" class="form-control-label"><b>Email <span style="color: red;"> *</span></b></label>
                                        {{ Form::email('email',$user->email,['class' => 'form-control', 'placeholder'=>'', 'required'=>'required', 'disabled']) }}
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    @endif
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>

@endsection

@section('script')
    {{ Html::script('assets/vendor_components/datatables.net/js/jquery.dataTables.min.js') }}
    {{ Html::script('assets/vendor_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}
    {{ Html::script('assets/vendor_plugins/DataTables-1.10.15/media/js/jquery.dataTables.min.js') }}
    <script>
        $(function () {
            $(".sidebar-menu a:contains('Usuarios')").parent().addClass('active');
        });
    </script>
@stop