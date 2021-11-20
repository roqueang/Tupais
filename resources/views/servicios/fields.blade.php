<!-- Nombreservicio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombreservicio', 'Nombreservicio:') !!}
    {!! Form::text('nombreservicio', null, ['class' => 'form-control']) !!}
</div>

<!-- Tipo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipo', 'Tipo:') !!}
    {!! Form::text('tipo', null, ['class' => 'form-control']) !!}
</div>

<!-- Cantidad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cantidad', 'Cantidad:') !!}
    {!! Form::text('cantidad', null, ['class' => 'form-control']) !!}
</div>

<!-- Disponible Field -->
<div class="form-group col-sm-6">
    {!! Form::label('disponible', 'Disponible:') !!}
    {!! Form::text('disponible', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('servicios.index') }}" class="btn btn-light">Cancel</a>
</div>
