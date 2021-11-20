<!-- Nombreservicio Field -->
<div class="form-group">
    {!! Form::label('nombreservicio', 'Nombreservicio:') !!}
    <p>{{ $servicio->nombreservicio }}</p>
</div>

<!-- Tipo Field -->
<div class="form-group">
    {!! Form::label('tipo', 'Tipo:') !!}
    <p>{{ $servicio->tipo }}</p>
</div>

<!-- Cantidad Field -->
<div class="form-group">
    {!! Form::label('cantidad', 'Cantidad:') !!}
    <p>{{ $servicio->cantidad }}</p>
</div>

<!-- Disponible Field -->
<div class="form-group">
    {!! Form::label('disponible', 'Disponible:') !!}
    <p>{{ $servicio->disponible }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $servicio->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $servicio->updated_at }}</p>
</div>

