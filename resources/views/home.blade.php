@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">TU PAIS S.A.</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="text-center">BIENVENIDOS</h3>
                        
        <div class="row">
        <table>
                        <link rel="stylesheet" href="../../cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
            <div class="column">
                        <a class="nav-link" href="{{ route('medicos.index') }}"><i class="fa fa-user-md" style="font-size:30px;color:red"></i><span>Medicos</span></a>
                        </div>
                        <div class="column">
                        <a class="nav-link" href="{{ route('servicios.index') }}"><i class="fa fa-briefcase" style="font-size:30px;color:yellow"></i><span>Servicios</span></a>        
                        </div>
                        <div>
                        <a class="nav-link" href="{{ route('colaboradors.index') }}"><i class="fa fa-male" style="font-size:30px;color:green"></i><span>Colaboradores</span></a>
                        </div>
                        <div class="column">
                        <a class="nav-link" href="{{ route('reservacions.index') }}"><i class="	fa fa-calendar" style="font-size:30px;color:purple"></i><span>Reservaciones</span></a>
                        </div>
                        <div class="column">
                        <a class="nav-link" href="{{ route('medicamentos.index') }}"><i class="fa fa-medkit" style="font-size:30px;color:brown"></i><span>Medicamentos</span></a>
                        </div>
                        <div class="column">
                        <a class="nav-link" href="{{ route('recetas.index') }}"><i class="fa fa-heartbeat" style="font-size:30px;color:aqua"></i><span>Recetas</span></a>
                        </div>
                        <div class="column">
                        <a class="nav-link" href="{{ route('encuestas.index') }}"><i class="fa fa-comment" style="font-size:30px;color:black"></i><span>Encuestas</span></a>
                        </div>
                        
                    </table>
        </di>
        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

