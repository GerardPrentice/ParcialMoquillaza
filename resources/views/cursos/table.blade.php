<div class="table-responsive">
    <table class="table" id="cursos-table">
        <thead>
            <tr>
                <th>Codcur</th>
        <th>Creditos</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($cursos as $cursos)
            <tr>
                <td>{{ $cursos->codcur }}</td>
            <td>{{ $cursos->creditos }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['cursos.destroy', $cursos->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('cursos.show', [$cursos->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('cursos.edit', [$cursos->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
