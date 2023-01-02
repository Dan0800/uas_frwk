<!-- Nama Field -->
<div class="col-sm-12">
    {!! Form::label('Nama', 'Nama:') !!}
    <p>{{ $mentor->Nama }}</p>
</div>

<!-- Email Field -->
<div class="col-sm-12">
    {!! Form::label('Email', 'Email:') !!}
    <p>{{ $mentor->Email }}</p>
</div>

<!-- Telepon Field -->
<div class="col-sm-12">
    {!! Form::label('Telepon', 'Telepon:') !!}
    <p>{{ $mentor->Telepon }}</p>
</div>

<!-- Alamat Field -->
<div class="col-sm-12">
    {!! Form::label('alamat', 'Alamat:') !!}
    <p>{{ $mentor->alamat }}</p>
</div>

<!-- Umur Field -->
<div class="col-sm-12">
    {!! Form::label('Umur', 'Umur:') !!}
    <p>{{ $mentor->Umur }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $mentor->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $mentor->updated_at }}</p>
</div>

