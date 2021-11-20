<!-- Nombremedicamento Field -->
<div class="form-group">
    {!! Form::label('nombremedicamento', 'Nombremedicamento:') !!}
    <p>{{ $medicamento->nombremedicamento }}</p>
</div>

<!-- Presentacion Field -->
<div class="form-group">
    {!! Form::label('presentacion', 'Presentacion:') !!}
    <p>{{ $medicamento->presentacion }}</p>
</div>

<!-- Fechadecreacion Field -->
<div class="form-group">
    {!! Form::label('fechadecreacion', 'Fechadecreacion:') !!}
    <p>{{ $medicamento->fechadecreacion }}</p>
</div>

<!-- Fechadecaducidad Field -->
<div class="form-group">
    {!! Form::label('fechadecaducidad', 'Fechadecaducidad:') !!}
    <p>{{ $medicamento->fechadecaducidad }}</p>
</div>

<!-- Lote Field -->
<div class="form-group">
    {!! Form::label('lote', 'Lote:') !!}
    <p>{{ $medicamento->lote }}</p>
</div>

<!-- Disponible Field -->
<div class="form-group">
    {!! Form::label('disponible', 'Disponible:') !!}
    <p>{{ $medicamento->disponible }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $medicamento->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $medicamento->updated_at }}</p>
</div>

