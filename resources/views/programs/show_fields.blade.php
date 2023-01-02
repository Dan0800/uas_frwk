<!-- Nama Field -->
<div class="col-sm-12">
    {!! Form::label('Nama', 'Nama:') !!}
    <p>{{ $program->Nama }}</p>
</div>

<!-- Mentor Field -->
<div class="col-sm-12">
    {!! Form::label('Mentor', 'Mentor:') !!}
    <p>{{ $program->Mentor }}</p>
</div>

<!-- Pelajaran Field -->
<div class="col-sm-12">
    {!! Form::label('Pelajaran', 'Pelajaran:') !!}
    <p>{{ $program->Pelajaran }}</p>
</div>

<!-- Jenis Field -->
<div class="col-sm-12">
    {!! Form::label('Jenis', 'Jenis:') !!}
    <p>{{ $program->Jenis }}</p>
</div>

<!-- Durasi Field -->
<div class="col-sm-12">
    {!! Form::label('Durasi', 'Durasi:') !!}
    <p>{{ $program->Durasi }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $program->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $program->updated_at }}</p>
</div>

