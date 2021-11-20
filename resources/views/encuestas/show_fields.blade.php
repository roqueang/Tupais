<!-- Idcolaborador Field -->
<div class="form-group">
    {!! Form::label('idcolaborador', 'Idcolaborador:') !!}
    <p>{{ $encuesta->nombrecolaborador }}</p>
</div>

<!-- Idservicio Field -->
<div class="form-group">
    {!! Form::label('idservicio', 'Idservicio:') !!}
    <p>{{ $encuesta->nombreservicio }}</p>
</div>

<!-- Idmedico Field -->
<div class="form-group">
    {!! Form::label('idmedico', 'Idmedico:') !!}
    <p>{{ $encuesta->nombremedico }}</p>
</div>

<!-- Fechadeatencion Field -->
<div class="form-group">
    {!! Form::label('fechadeatencion', 'Fechadeatencion:') !!}
    <p>{{ $encuesta->fechadeatencion }}</p>
</div>

<!-- Calidaddeservicio Field -->
<div class="form-group">
    {!! Form::label('calidaddeservicio', 'Calidaddeservicio:') !!}
    <p>{{ $encuesta->calidaddeservicio }}</p>
</div>

<!-- Comentario Field -->
<div class="form-group">
    {!! Form::label('comentario', 'Comentario:') !!}
    <p>{{ $encuesta->comentario }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $encuesta->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $encuesta->updated_at }}</p>
</div>

