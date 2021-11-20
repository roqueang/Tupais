@extends('layouts.app')
@section('title')
    Medicos 
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Medicos</h1>
            <div class="section-header-breadcrumb">
                <a href="{{ route('medicos.create')}}" class="btn btn-primary form-btn">Medico <i class="fas fa-plus"></i></a>
            </div>
        </div>
    <div class="section-body">
       <div class="card">
            <div class="card-body">
                @include('medicos.table')
            </div>
       </div>
   </div>
    
    </section>
@endsection

