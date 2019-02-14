@extends('layouts.dashboard')
    @section('content')
    <div class="u-content">
            <div class="u-body">
            <h2 class="h2 font-weight-semibold mb-4">Permissions</h2>
            <div class="card mb-4">
            <div class="card">
                <header class="card-header">
                <h3> Edit Permission: <i>{{ $permission->name }}</i></h3>
                <a class="btn btn-primary float-right" href="/dashboard/permission">Permissions</a>
                </header>
                <div class="card-body">
                        {{ Form::model($permission, array('route' => array('permission.update', $permission->id), 'method' => 'PUT')) }}
                        <div class="form-group">
                            {{ Form::label('name', 'Permission Name') }} {{ Form::text('name', null, array('class' => 'form-control')) }}
                        </div>
                        <br> {{ Form::submit('Update', array('class' => 'btn btn-primary')) }} {{ Form::close() }}
                </div>
            </div>
            </div>
            </div>
    </div>
    @endsection