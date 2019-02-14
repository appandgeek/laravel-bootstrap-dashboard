@extends('layouts.dashboard')
    @section('content')
    <div class="u-content">
            <div class="u-body">
            <h2 class="h2 font-weight-semibold mb-4">Roles</h2>
            <div class="card mb-4">
        <div class="card">
            <header class="card-header">
                    <h3> Edit Role: <i>{{ $role->name }}</i></h3>
                    <a class="btn btn-primary float-right" href="/dashboard/roles">Roles</a>
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
                            <a href="/dashboard/roles" class="btn btn-danger btn-cancel"><i
                                        class="fa fa-times-circle"></i> Cancel
                            </a>
                        </div>

                    {{ Form::close() }}
            </div>
        </div>
            </div>
            </div>
    </div>
    @endsection