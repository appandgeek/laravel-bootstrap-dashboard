
        @foreach ($roles as $role)
            <tr>
                <td>{{ $role->id }}</td>
                <td>{{ $role->name }}</td>
                <td>{{ str_replace(array('[',']','"'),'', $role->permissions()->pluck('name')) }}</td>
                <td>
                    <a href="{{ URL::to('dashboard/roles/'.$role->id.'/edit') }}"
                       class="btn btn-sm btn-primary  float-left" style="margin-right:10px;"><i
                                class="glyphicon glyphicon-edit"></i> Edit</a>

                    @if($role->name == 'Admin')

                    @else
                        {!! Form::open(['method' => 'DELETE', 'route' => ['roles.destroy', $role->id],'onsubmit' => 'return ConfirmDelete()'  ]) !!}
                        <button type="submit" class="btn btn-sm btn-danger"><i
                                    class="glyphicon glyphicon-trash"></i> Delete
                        </button>
                        {!! Form::close() !!}
                    @endif
                </td>
            </tr>
        @endforeach
   