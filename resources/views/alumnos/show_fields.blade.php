<!-- Codalu Field -->
<div class="col-sm-12">
    {!! Form::label('codalu', 'Codalu:') !!}
    <p>{{ $alumnos->codalu }}</p>
</div>

<!-- Nombres Field -->
<div class="col-sm-12">
    {!! Form::label('nombres', 'Nombres:') !!}
    <p>{{ $alumnos->nombres }}</p>
</div>

<!-- Apellidos Field -->
<div class="col-sm-12">
    {!! Form::label('apellidos', 'Apellidos:') !!}
    <p>{{ $alumnos->apellidos }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $alumnos->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $alumnos->updated_at }}</p>
</div>

