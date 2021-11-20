<!-- Idcolaborador Field -->
<div class="form-group">
    {!! Form::label('idcolaborador', 'Nombre de Colaborador:') !!}
    <p>{{ $reservacion->nombrecolaborador }}</p>
</div>

<!-- Idmedico Field -->
<div class="form-group">
    {!! Form::label('idmedico', 'Nombre de Medico:') !!}
    <p>{{ $reservacion->nombremedico }}</p>
</div>

<!-- Idservicio Field -->
<div class="form-group">
    {!! Form::label('idservicio', 'Nombre de servicio:') !!}
    <p>{{ $reservacion->nombreservicio }}</p>
</div>

<!-- Fechadereservacion Field -->
<div class="form-group">
    {!! Form::label('fechadereservacion', 'Fecha de reservacion:') !!}
    <p>{{ $reservacion->fechadereservacion }}</p>
</div>

<!-- Hora Field -->
<div class="form-group">
    {!! Form::label('hora', 'Hora:') !!}
    <p>{{ $reservacion->hora }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $reservacion->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $reservacion->updated_at }}</p>
</div>

