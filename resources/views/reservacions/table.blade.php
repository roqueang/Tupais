<div class="table-responsive">
    <table class="table" id="reservacions-table">
        <thead>
            <tr>
                <th>Colaborador</th>
        <th>Medico</th>
        <th>Servicio</th>
        <th>Fecha de Reservacion</th>
        <th>Hora</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($reservacions as $reservacion)
            <tr>
                       <td>{{ $reservacion->nombrecolaborador }}</td>
            <td>{{ $reservacion->nombremedico }}</td>
            <td>{{ $reservacion->nombreservicio }}</td>
            <td>{{ $reservacion->fechadereservacion }}</td>
            <td>{{ $reservacion->hora }}</td>
                       <td class=" text-center">
                           {!! Form::open(['route' => ['reservacions.destroy', $reservacion->idreservacion], 'method' => 'delete']) !!}
                           <div class='btn-group'>
                               <a href="{!! route('reservacions.show', [$reservacion->idreservacion]) !!}" class='btn btn-light action-btn '><i class="fa fa-eye"></i></a>
                               <a href="{!! route('reservacions.edit', [$reservacion->idreservacion]) !!}" class='btn btn-warning action-btn edit-btn'><i class="fa fa-edit"></i></a>
                               {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger action-btn delete-btn', 'onclick' => 'return confirm("Are you sure want to delete this record ?")']) !!}
                           </div>
                           {!! Form::close() !!}
                       </td>
                   </tr>
        @endforeach
        </tbody>
    </table>
</div>
