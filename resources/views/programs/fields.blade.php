<!-- Nama Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Nama', 'Nama:') !!}
    {!! Form::text('Nama', null, ['class' => 'form-control']) !!}
</div>

<!-- Mentor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Mentor', 'Mentor:') !!}
    {!! Form::text('Mentor', null, ['class' => 'form-control']) !!}
</div>

<!-- Pelajaran Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Pelajaran', 'Pelajaran:') !!}
    {!! Form::text('Pelajaran', null, ['class' => 'form-control']) !!}
</div>

<!-- Jenis Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Jenis', 'Jenis:') !!}
    {!! Form::text('Jenis', null, ['class' => 'form-control']) !!}
</div>

<!-- Durasi Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Durasi', 'Durasi:') !!}
    {!! Form::number('Durasi', null, ['class' => 'form-control']) !!}
</div>