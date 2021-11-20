<div class="table-responsive">
    <table class="table" id="servicios-table">
        <thead>
            <tr>
                <th>Nombre</th>
        <th>Tipo</th>
        <th>Cantidad</th>
        <th>Disponible</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($servicios as $servicio)
            <tr>
                       <td>{{ $servicio->nombreservicio }}</td>
            <td>{{ $servicio->tipo }}</td>
            <td>{{ $servicio->cantidad }}</td>
            <td>{{ $servicio->disponible }}</td>
                       <td class=" text-center">
                           {!! Form::open(['route' => ['servicios.destroy', $servicio->idservicio], 'method' => 'delete']) !!}
                           <div class='btn-group'>
                               <a href="{!! route('servicios.show', [$servicio->idservicio]) !!}" class='btn btn-light action-btn '><i class="fa fa-eye"></i></a>
                               <a href="{!! route('servicios.edit', [$servicio->idservicio]) !!}" class='btn btn-warning action-btn edit-btn'><i class="fa fa-edit"></i></a>
                               {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger action-btn delete-btn', 'onclick' => 'return confirm("Are you sure want to delete this record ?")']) !!}
                           </div>
                           {!! Form::close() !!}
                       </td>
                   </tr>
        @endforeach
        </tbody>
    </table>
</div>
