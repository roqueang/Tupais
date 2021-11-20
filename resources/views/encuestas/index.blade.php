@extends('layouts.app')
@section('title')
    Encuestas 
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Encuestas</h1>
            <div class="section-header-breadcrumb">
                <a href="{{ route('encuestas.create')}}" class="btn btn-primary form-btn">Encuesta <i class="fas fa-plus"></i></a>
            </div>
        </div>
    <div class="section-body">
       <div class="card">
            <div class="card-body">
                @include('encuestas.table')
            </div>
       </div>
   </div>
    
    </section>
@endsection

