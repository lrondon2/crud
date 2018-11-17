<table class="table table-responsive" id="pQRS-table">
    <thead>
        <tr>
            <th>Nombre</th>
        <th>Cedula</th>
        <th>Correo</th>
        <th>Direccion</th>
        <th>Telefono</th>
        <th>Motivo Solicitud</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($pQRS as $pQR)
        <tr>
            <td>{!! $pQR->nombre !!}</td>
            <td>{!! $pQR->cedula !!}</td>
            <td>{!! $pQR->correo !!}</td>
            <td>{!! $pQR->direccion !!}</td>
            <td>{!! $pQR->telefono !!}</td>
            <td>{!! $pQR->motivo_solicitud !!}</td>
            <td>
                {!! Form::open(['route' => ['pQRS.destroy', $pQR->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('pQRS.show', [$pQR->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('pQRS.edit', [$pQR->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>