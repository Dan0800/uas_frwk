<div class="table-responsive">
    <table class="table" id="programs-table">
        <thead>
        <tr>
            <th>Nama</th>
        <th>Mentor</th>
        <th>Pelajaran</th>
        <th>Jenis</th>
        <th>Durasi</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($programs as $program)
            <tr>
                <td>{{ $program->Nama }}</td>
            <td>{{ $program->Mentor }}</td>
            <td>{{ $program->Pelajaran }}</td>
            <td>{{ $program->Jenis }}</td>
            <td>{{ $program->Durasi }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['programs.destroy', $program->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('programs.show', [$program->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('programs.edit', [$program->id]) }}"
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
