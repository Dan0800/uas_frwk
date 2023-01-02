<!-- Nama Field -->
<div class="col-sm-12">
    {!! Form::label('Nama', 'Nama:') !!}
    <p>{{ $siswa->Nama }}</p>
</div>

<!-- Email Field -->
<div class="col-sm-12">
    {!! Form::label('Email', 'Email:') !!}
    <p>{{ $siswa->Email }}</p>
</div>

<!-- Telepon Field -->
<div class="col-sm-12">
    {!! Form::label('Telepon', 'Telepon:') !!}
    <p>{{ $siswa->Telepon }}</p>
</div>

<!-- Nis Field -->
<div class="col-sm-12">
    {!! Form::label('NIS', 'Nis:') !!}
    <p>{{ $siswa->NIS }}</p>
</div>

<!-- Alamat Field -->
<div class="col-sm-12">
    {!! Form::label('Alamat', 'Alamat:') !!}
    <p>{{ $siswa->Alamat }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $siswa->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $siswa->updated_at }}</p>
</div>

