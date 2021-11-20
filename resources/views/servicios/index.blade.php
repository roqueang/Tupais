@extends('layouts.app')
@section('title')
    Servicios 
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Servicios</h1>
            <div class="section-header-breadcrumb">
                <a href="{{ route('servicios.create')}}" class="btn btn-primary form-btn">Servicio <i class="fas fa-plus"></i></a>
            </div>
        </div>
    <div class="section-body">
       <div class="card">
            <div class="card-body">
                @include('servicios.table')
            </div>
       </div>
   </div>
    
    </section>
@endsection

