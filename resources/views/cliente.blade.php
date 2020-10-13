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
        @if($cliente)
            
             <h2>Cliente</h2>


            <div class="col-md-12">
                <div class="title">
                    <i class="fas fa-users"></i>
                    Clientes
                </div>
            </div>
            

        </section>
    </div>

</div>
{{-- Modales --}}
{{-- /Modales --}}

@stop

@section('scripts')
<script src="/tximistaElec/resources/js/clientes/cliente.js"></script>

@stop