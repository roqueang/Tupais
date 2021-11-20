<!-- Idmedico Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idmedico', 'Idmedico:') !!}
    {!! Form::select('idmedico', $tbmedicoItems, null, ['class' => 'form-control']) !!}
</div>

<!-- Idcolaborador Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idcolaborador', 'Idcolaborador:') !!}
    {!! Form::select('idcolaborador', $tbcolaboradorItems, null, ['class' => 'form-control']) !!}
</div>

<!-- Idmedicamento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idmedicamento', 'Idmedicamento:') !!}
    {!! Form::select('idmedicamento', $tbmedicamentoItems, null, ['class' => 'form-control']) !!}
</div>

<!-- Idservicio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idservicio', 'Idservicio:') !!}
    {!! Form::select('idservicio', $tbservicioItems, null, ['class' => 'form-control']) !!}
</div>

<!-- Fechadeemision Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fechadeemision', 'Fechadeemision:') !!}
    {!! Form::text('fechadeemision', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('recetas.index') }}" class="btn btn-light">Cancel</a>
</div>
