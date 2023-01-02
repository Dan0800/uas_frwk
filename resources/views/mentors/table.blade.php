<div class="table-responsive">
    <table class="table" id="mentors-table">
        <thead>
        <tr>
            <th>Nama</th>
        <th>Email</th>
        <th>Telepon</th>
        <th>Alamat</th>
        <th>Umur</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($mentors as $mentor)
            <tr>
                <td>{{ $mentor->Nama }}</td>
            <td>{{ $mentor->Email }}</td>
            <td>{{ $mentor->Telepon }}</td>
            <td>{{ $mentor->alamat }}</td>
            <td>{{ $mentor->Umur }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['mentors.destroy', $mentor->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('mentors.show', [$mentor->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('mentors.edit', [$mentor->id]) }}"
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
