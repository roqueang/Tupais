<!-- Idmedico Field -->
<div class="form-group">
    {!! Form::label('idmedico', 'Idmedico:') !!}
    <p>{{ $receta->idmedico }}</p>
</div>

<!-- Idcolaborador Field -->
<div class="form-group">
    {!! Form::label('idcolaborador', 'Idcolaborador:') !!}
    <p>{{ $receta->idcolaborador }}</p>
</div>

<!-- Idmedicamento Field -->
<div class="form-group">
    {!! Form::label('idmedicamento', 'Idmedicamento:') !!}
    <p>{{ $receta->idmedicamento }}</p>
</div>

<!-- Idservicio Field -->
<div class="form-group">
    {!! Form::label('idservicio', 'Idservicio:') !!}
    <p>{{ $receta->idservicio }}</p>
</div>

<!-- Fechadeemision Field -->
<div class="form-group">
    {!! Form::label('fechadeemision', 'Fechadeemision:') !!}
    <p>{{ $receta->fechadeemision }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $receta->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $receta->updated_at }}</p>
</div>

