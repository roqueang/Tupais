<div class="table-responsive">
    <table class="table" id="recetas-table">
        <thead>
            <tr>
                <th>Medico</th>
        <th>Colaborador</th>
        <th>Medicamento</th>
        <th>Servicio</th>
        <th>Fecha de emision</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($recetas as $receta)
            <tr>
                       <td>{{ $receta->nombremedico }}</td>
            <td>{{ $receta->nombrecolaborador }}</td>
            <td>{{ $receta->nombremedicamento }}</td>
            <td>{{ $receta->nombreservicio }}</td>
            <td>{{ $receta->fechadeemision }}</td>
                       <td class=" text-center">
                           {!! Form::open(['route' => ['recetas.destroy', $receta->idreceta], 'method' => 'delete']) !!}
                           <div class='btn-group'>
                               <a href="{!! route('recetas.show', [$receta->idreceta]) !!}" class='btn btn-light action-btn '><i class="fa fa-eye"></i></a>
                               <a href="{!! route('recetas.edit', [$receta->idreceta]) !!}" class='btn btn-warning action-btn edit-btn'><i class="fa fa-edit"></i></a>
                               {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger action-btn delete-btn', 'onclick' => 'return confirm("Are you sure want to delete this record ?")']) !!}
                           </div>
                           {!! Form::close() !!}
                       </td>
                   </tr>
        @endforeach
        </tbody>
    </table>
</div>
