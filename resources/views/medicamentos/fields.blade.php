<!-- Nombremedicamento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombremedicamento', 'Nombremedicamento:') !!}
    {!! Form::text('nombremedicamento', null, ['class' => 'form-control']) !!}
</div>

<!-- Presentacion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('presentacion', 'Presentacion:') !!}
    {!! Form::text('presentacion', null, ['class' => 'form-control']) !!}
</div>

<!-- Fechadecreacion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fechadecreacion', 'Fechadecreacion:') !!}
    {!! Form::text('fechadecreacion', null, ['class' => 'form-control']) !!}
</div>

<!-- Fechadecaducidad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fechadecaducidad', 'Fechadecaducidad:') !!}
    {!! Form::text('fechadecaducidad', null, ['class' => 'form-control']) !!}
</div>

<!-- Lote Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lote', 'Lote:') !!}
    {!! Form::text('lote', null, ['class' => 'form-control']) !!}
</div>

<!-- Disponible Field -->
<div class="form-group col-sm-6">
    {!! Form::label('disponible', 'Disponible:') !!}
    {!! Form::text('disponible', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('medicamentos.index') }}" class="btn btn-light">Cancel</a>
</div>
