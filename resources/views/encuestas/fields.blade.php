<!-- Idcolaborador Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idcolaborador', 'Idcolaborador:') !!}
    {!! Form::select('idcolaborador', $tbcolaboradorItems, null, ['class' => 'form-control']) !!}
</div>

<!-- Idservicio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idservicio', 'Idservicio:') !!}
    {!! Form::select('idservicio', $tbservicioItems, null, ['class' => 'form-control']) !!}
</div>

<!-- Idmedico Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idmedico', 'Idmedico:') !!}
    {!! Form::select('idmedico', $tbmedicoItems, null, ['class' => 'form-control']) !!}
</div>

<!-- Fechadeatencion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fechadeatencion', 'Fechadeatencion:') !!}
    {!! Form::text('fechadeatencion', null, ['class' => 'form-control']) !!}
</div>

<!-- Calidaddeservicio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('calidaddeservicio', 'Calidaddeservicio:') !!}
    {!! Form::text('calidaddeservicio', null, ['class' => 'form-control']) !!}
</div>

<!-- Comentario Field -->
<div class="form-group col-sm-6">
    {!! Form::label('comentario', 'Comentario:') !!}
    {!! Form::text('comentario', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('encuestas.index') }}" class="btn btn-light">Cancel</a>
</div>
