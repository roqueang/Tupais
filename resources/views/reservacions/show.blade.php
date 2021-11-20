@extends('layouts.app')
@section('title')
    Reservacion Details 
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
        <h1>Reservacion Details</h1>
        <div class="section-header-breadcrumb">
            <a href="{{ route('reservacions.index') }}"
                 class="btn btn-primary form-btn float-right">Back</a>
        </div>
      </div>
   @include('stisla-templates::common.errors')
    <div class="section-body">
           <div class="card">
            <div class="card-body">
                    @include('reservacions.show_fields')
            </div>
            </div>
    </div>
    </section>
@endsection
