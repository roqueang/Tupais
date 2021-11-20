<div class="table-responsive">
    <table class="table" id="medicamentos-table">
        <thead>
            <tr>
                <th>Medicamento</th>
        <th>Presentacion</th>
        <th>Fecha de creacion</th>
        <th>Fecha de caducidad</th>
        <th>Lote</th>
        <th>Disponible</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($medicamentos as $medicamento)
            <tr>
                       <td>{{ $medicamento->nombremedicamento }}</td>
            <td>{{ $medicamento->presentacion }}</td>
            <td>{{ $medicamento->fechadecreacion }}</td>
            <td>{{ $medicamento->fechadecaducidad }}</td>
            <td>{{ $medicamento->lote }}</td>
            <td>{{ $medicamento->disponible }}</td>
                       <td class=" text-center">
                           {!! Form::open(['route' => ['medicamentos.destroy', $medicamento->idmedicamento], 'method' => 'delete']) !!}
                           <div class='btn-group'>
                               <a href="{!! route('medicamentos.show', [$medicamento->idmedicamento]) !!}" class='btn btn-light action-btn '><i class="fa fa-eye"></i></a>
                               <a href="{!! route('medicamentos.edit', [$medicamento->idmedicamento]) !!}" class='btn btn-warning action-btn edit-btn'><i class="fa fa-edit"></i></a>
                               {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger action-btn delete-btn', 'onclick' => 'return confirm("Are you sure want to delete this record ?")']) !!}
                           </div>
                           {!! Form::close() !!}
                       </td>
                   </tr>
        @endforeach
        </tbody>
    </table>
</div>
