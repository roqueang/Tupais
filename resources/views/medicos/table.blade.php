<div class="table-responsive">
    <table class="table" id="medicos-table">
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
        @foreach($medicos as $medico)
            <tr>
                       <td>{{ $medico->nombremedico }}</td>
            <td>{{ $medico->apellido }}</td>
            <td>{{ $medico->direccion }}</td>
            <td>{{ $medico->telefono }}</td>
                       <td class=" text-center">
                           {!! Form::open(['route' => ['medicos.destroy', $medico->idmedico], 'method' => 'delete']) !!}
                           <div class='btn-group'>
                               <a href="{!! route('medicos.show', [$medico->idmedico]) !!}" class='btn btn-light action-btn '><i class="fa fa-eye"></i></a>
                               <a href="{!! route('medicos.edit', [$medico->idmedico]) !!}" class='btn btn-warning action-btn edit-btn'><i class="fa fa-edit"></i></a>
                               {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger action-btn delete-btn', 'onclick' => 'return confirm("Are you sure want to delete this record ?")']) !!}
                           </div>
                           {!! Form::close() !!}
                       </td>
                   </tr>
        @endforeach
        </tbody>
    </table>
</div>
