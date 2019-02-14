@extends('layouts.dashboard')
    @section('content')

        <div class="card">
            <header class="card-header">

            </header>
            <div class="card-body">
                    {{ Form::model($role, array('route' => array('roles.update', $role->id), 'method' => 'PUT')) }}
                    <div class="form-group">
                        {{ Form::label('name', 'Role Name') }}
                        {{ Form::text('name', null, array('class' => 'form-control')) }}
                    </div>
                    <h3>Select Permissions</h3>
                    @foreach ($permissions as $permission)
                        {{Form::checkbox('permissions[]',  $permission->id, $role->permissions ) }}
                        {{Form::label($permission->name, ucfirst($permission->name)) }}<br>
                    @endforeach
                    <br>
                    
                    <div class="text-center">
                            <button type="submit" class="btn btn-success btn-save"><i class="fa fa-save"> </i>
                                Save
                            </button>
                            <a href="/roles" class="btn btn-danger btn-cancel"><i
                                        class="fa fa-times-circle"></i> Cancel
                            </a>
                        </div>

                    {{ Form::close() }}
            </div>
        </div>
    @endsection