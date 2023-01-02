<!-- Nama Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Nama', 'Nama:') !!}
    {!! Form::text('Nama', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Email', 'Email:') !!}
    {!! Form::email('Email', null, ['class' => 'form-control']) !!}
</div>

<!-- Telepon Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Telepon', 'Telepon:') !!}
    {!! Form::number('Telepon', null, ['class' => 'form-control']) !!}
</div>

<!-- Nis Field -->
<div class="form-group col-sm-6">
    {!! Form::label('NIS', 'Nis:') !!}
    {!! Form::number('NIS', null, ['class' => 'form-control']) !!}
</div>

<!-- Alamat Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('Alamat', 'Alamat:') !!}
    {!! Form::textarea('Alamat', null, ['class' => 'form-control']) !!}
</div>