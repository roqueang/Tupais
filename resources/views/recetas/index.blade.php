@extends('layouts.app')
@section('title')
    Recetas 
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Recetas</h1>
            <div class="section-header-breadcrumb">
                <a href="{{ route('recetas.create')}}" class="btn btn-primary form-btn">Receta <i class="fas fa-plus"></i></a>
            </div>
        </div>
    <div class="section-body">
       <div class="card">
            <div class="card-body">
                @include('recetas.table')
            </div>
       </div>
   </div>
    
    </section>
@endsection

