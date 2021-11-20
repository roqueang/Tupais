<!-- Idcolaborador Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idcolaborador', 'Nombre Colaborador:') !!}
    {!! Form::select('idcolaborador', $tbcolaboradorItems, null, ['class' => 'form-control']) !!}
</div>

<!-- Idmedico Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idmedico', 'Nombre medico:') !!}
    {!! Form::select('idmedico', $tbmedicoItems, null, ['class' => 'form-control']) !!}
</div>

<!-- Idservicio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idservicio', 'Nombre servicio:') !!}
    {!! Form::select('idservicio', $tbservicioItems, null, ['class' => 'form-control']) !!}
</div>

<!-- Fechadereservacion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fechadereservacion', 'Fecha de reservacion:') !!}
    {!! Form::text('fechadereservacion', null, ['class' => 'form-control']) !!}
</div>

<!-- Hora Field -->
<div class="form-group col-sm-6">
    {!! Form::label('hora', 'Hora:') !!}
    {!! Form::text('hora', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('reservacions.index') }}" class="btn btn-light">Cancel</a>
</div>
