
<table class="table table-hover" id="usersTable">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>Normal</td>
                    <td> <a href="/dashboard/users/{{$user->id}}/edit"
                            class="btn btn-sm btn-primary float-left" style="margin-right:10px;"> <i
                                     class="glyphicon glyphicon-edit"></i> Edit</a>
                        {!! Form::open(['method' => 'DELETE', 'url' => ['/dashboard/users', $user->id], 'onsubmit' => 'return ConfirmDelete()' ]) !!}
                        <button type="submit" class="btn btn-sm btn-danger"><i
                            class="glyphicon glyphicon-trash"></i> Delete
                </button>
                {!! Form::close() !!}</td>
                    
                </tr>
            @endforeach
           
        </tbody>
    </table>
    {{ $users->render()  }}
