<div class="table-responsive">
    <table class="table" id="encuestas-table">
        <thead>
            <tr>
                <th>Nombre del Colaborador</th>

        <th>Medico que lo atendio</th>
        <th>Servicio</th>
        <th>Calidad de servicio</th>
        <th>Comentario</th>
        <th>Fecha de atencion</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($encuestas as $encuesta)
            <tr>
            <td>{{ $encuesta->nombrecolaborador }}</td>
            <td>{{ $encuesta->nombremedico }}</td>
            <td>{{ $encuesta->nombreservicio }}</td>
            <td>{{ $encuesta->calidaddeservicio }}</td>
            <td>{{ $encuesta->comentario }}</td>
            <td>{{ $encuesta->fechadeatencion }}</td>
                       <td class=" text-center">
                           {!! Form::open(['route' => ['encuestas.destroy', $encuesta->idencuesta], 'method' => 'delete']) !!}
                           <div class='btn-group'>
                               <a href="{!! route('encuestas.show', [$encuesta->idencuesta]) !!}" class='btn btn-light action-btn '><i class="fa fa-eye"></i></a>
                               <a href="{!! route('encuestas.edit', [$encuesta->idencuesta]) !!}" class='btn btn-warning action-btn edit-btn'><i class="fa fa-edit"></i></a>
                               {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger action-btn delete-btn', 'onclick' => 'return confirm("Are you sure want to delete this record ?")']) !!}
                           </div>
                           {!! Form::close() !!}
                       </td>
                   </tr>
        @endforeach
        </tbody>
    </table>
</div>
