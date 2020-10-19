@extends('layouts.main')

@section('css')

@stop

@section('body')

<div id="colorlib-page" class="loading">
    <!-- Menú -->
    @include('section.body.menu')
    
    <!-- Loader -->
	
    <!-- Page Content -->
    <div id="colorlib-main" class="clientes">
        <section class="section content">
             <h2>Clientes</h2>


            <div class="col-md-12">
                <div class="title">
                    <i class="fas fa-users"></i>
                    Clientes
                </div>
            </div>
            
            {{-- La Tabla --}}
            <table id="dataTable" class="table table-striped table-hover" data-btn-new="nuevo">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Telefono</th>
                        <th>DNI</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($clientes as $cliente)
                    <tr>
                        <td>
                            {{$cliente->nombre}} {{$cliente->apellido1}}
                        </td>
                        <td>
                            {{$cliente->telefono1}}
                        </td>
                        <td>
                            {{$cliente->dni}}
                        </td>
                        <td>
                            
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>Nombre</th>
                        <th>Telefono</th>
                        <th>DNI</th>
                        <th>Acciones</th>
                    </tr>
                </tfoot>
            </table>
        </section>
    </div>

</div>
{{-- Modales --}}
{{-- /Modales --}}

@stop

@section('scripts')
<script src="{{ asset('js/clientes/clientes.js') }}"></script>

@stop