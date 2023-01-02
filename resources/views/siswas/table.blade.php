<div class="table-responsive">
    <table class="table" id="siswas-table">
        <thead>
        <tr>
            <th>Nama</th>
        <th>Email</th>
        <th>Telepon</th>
        <th>Nis</th>
        <th>Alamat</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($siswas as $siswa)
            <tr>
                <td>{{ $siswa->Nama }}</td>
            <td>{{ $siswa->Email }}</td>
            <td>{{ $siswa->Telepon }}</td>
            <td>{{ $siswa->NIS }}</td>
            <td>{{ $siswa->Alamat }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['siswas.destroy', $siswa->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('siswas.show', [$siswa->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('siswas.edit', [$siswa->id]) }}"
                           class='btn btn-default btn-xs'>
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
