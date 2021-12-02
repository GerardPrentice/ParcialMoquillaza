<div class="table-responsive">
    <table class="table" id="aluCurs-table">
        <thead>
            <tr>
                <th>Codalu</th>
        <th>Codcur</th>
        <th>Nota</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($aluCurs as $aluCur)
            <tr>
                <td>{{ $aluCur->codalu }}</td>
            <td>{{ $aluCur->codcur }}</td>
            <td>{{ $aluCur->nota }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['aluCurs.destroy', $aluCur->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('aluCurs.show', [$aluCur->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('aluCurs.edit', [$aluCur->id]) }}" class='btn btn-default btn-xs'>
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
