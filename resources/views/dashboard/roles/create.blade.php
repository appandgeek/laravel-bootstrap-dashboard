@extends('layouts.dashboard')
    @section('content')

        <div class="card">
            <header class="card-header">

            </header>
            <div class="card-body">
                    {{ Form::open(array('url' => 'dashboard/roles')) }}
                    <div class="form-group @if ($errors->has('name')) has-error @endif">
                        {{ Form::label('name', 'Role Name') }}
                        {{ Form::text('name', null, array('class' => 'form-control', 'placeholder'=>'Enter Role name')) }}

                        @if ($errors->has('name'))
                            <span class="help-text text-danger">{{ $errors->first('name') }}</span>
                        @endif

                    </div>
                    <h5><b>Select Permissions</b></h5>
                    <div class='form-group'>
                        @foreach ($permissions as $permission)
                            {{ Form::checkbox('permissions[]',  $permission->id ) }}
                            {{ Form::label($permission->name, ucfirst($permission->name)) }}<br>
                        @endforeach

                        @if ($errors->has('permissions'))
                            <span class="help-text text-danger">Please select one or more permissions.</span>
                        @endif
                    </div>
                    
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