<div class="table-responsive">
    <table class="table" id="companies-table">
        <thead>
        <tr>
            <th>Name</th>

            <th>Email</th>
            <th>Logo</th>
            <th>Website</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($companies as $companies)
            <tr>
                <td>{{ $companies->name }}</td>

                <td>{{ $companies->email }}</td>
                <td><img src="{{ asset('storage/'. $companies->logo) }}" style="width: 100px;"></td>
                <td>{{ $companies->website }}</td>
                <td>
                    {!! Form::open(['route' => ['companies.destroy', $companies->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('companies.show', [$companies->id]) }}" class='btn btn-default btn-xs'>
                            <i class="glyphicon glyphicon-eye-open"></i>
                        </a>
                        <a href="{{ route('companies.edit', [$companies->id]) }}" class='btn btn-default btn-xs'>
                            <i class="glyphicon glyphicon-edit"></i>
                        </a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
