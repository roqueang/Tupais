@extends('layouts.app')
@section('title')
    Medicamentos 
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Medicamentos</h1>
            <div class="section-header-breadcrumb">
                <a href="{{ route('medicamentos.create')}}" class="btn btn-primary form-btn">Medicamento <i class="fas fa-plus"></i></a>
            </div>
        </div>
    <div class="section-body">
       <div class="card">
            <div class="card-body">
                @include('medicamentos.table')
            </div>
       </div>
   </div>
    
    </section>
@endsection

