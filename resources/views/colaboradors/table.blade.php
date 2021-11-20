<div class="table-responsive">
    <table class="table" id="colaboradors-table">
        <thead>
            <tr>
                <th>Nombre</th>
        <th>Apellido</th>
        <th>Direccion</th>
        <th>Telefono</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($colaboradors as $colaborador)
            <tr>
                       <td>{{ $colaborador->nombrecolaborador }}</td>
            <td>{{ $colaborador->apellido }}</td>
            <td>{{ $colaborador->direccion }}</td>
            <td>{{ $colaborador->telefono }}</td>
                       <td class=" text-center">
                           {!! Form::open(['route' => ['colaboradors.destroy', $colaborador->idcolaborador], 'method' => 'delete']) !!}
                           <div class='btn-group'>
                               <a href="{!! route('colaboradors.show', [$colaborador->idcolaborador]) !!}" class='btn btn-light action-btn '><i class="fa fa-eye"></i></a>
                               <a href="{!! route('colaboradors.edit', [$colaborador->idcolaborador]) !!}" class='btn btn-warning action-btn edit-btn'><i class="fa fa-edit"></i></a>
                               {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger action-btn delete-btn', 'onclick' => 'return confirm("Are you sure want to delete this record ?")']) !!}
                           </div>
                           {!! Form::close() !!}
                       </td>
                   </tr>
        @endforeach
        </tbody>
    </table>
</div>
