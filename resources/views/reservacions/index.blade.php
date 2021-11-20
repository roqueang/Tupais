@extends('layouts.app')
@section('title')
    Reservacions 
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Reservaciones</h1>
            <div class="section-header-breadcrumb">
                <a href="{{ route('reservacions.create')}}" class="btn btn-primary form-btn">Reservacion <i class="fas fa-plus"></i></a>
            </div>
        </div>
    <div class="section-body">
       <div class="card">
            <div class="card-body">
                @include('reservacions.table')
            </div>
       </div>
   </div>
    
    </section>
@endsection

