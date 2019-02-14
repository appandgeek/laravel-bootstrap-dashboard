@extends('layouts.dashboard')
    @section('content')
    <div class="u-content">
            <div class="u-body">
            <h2 class="h2 font-weight-semibold mb-4">Permissions</h2>
            <div class="card mb-4">
            <div class="card">
                <header class="card-header">
                <h3> Create Permission:</h3>
                <a class="btn btn-primary float-right" href="/dashboard/permission">Permissions</a>
                </header>
                <div class="card-body">
                        {{ Form::open(array('url' => 'dashboard/permission')) }}
    <div class="form-group">
        {{ Form::label('name', 'Name') }}
        {{ Form::text('name', '', array('class' => 'form-control')) }}
    </div><br>
    @if(!$roles->isEmpty()) 
        <h3>Assign Permission to Roles</h3>
        @foreach ($roles as $role) 
            {{ Form::checkbox('roles[]',  $role->id ) }}
            {{ Form::label($role->name, ucfirst($role->name)) }}<br>
        @endforeach
    @endif
    <br>
    {{ Form::submit('Save', array('class' => 'btn btn-primary')) }}
    {{ Form::close() }}
                </div>
            </div>
            </div>
            </div>
    </div>
    @endsection