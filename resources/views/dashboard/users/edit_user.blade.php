@extends('layouts.dashboard')
    @section('style')
    <style>
        .card-center{
            margin: 0 auto; /* Added */
            float: none; /* Added */
            margin-top: 5%; /* Added */
        }
        </style>
    @endsection
    @section('content')
    <div class="col-md-8 mb-6 card-center">
        <div class="card ">
            <header class="card-header">
                Update User
            </header>
                <div class="flash-message">
                        @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                            @if(Session::has($msg))
                                <div class="alert alert-{{ $msg }} alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                    <h4><i class="icon fa fa-check"></i>{{ Session::get($msg) }}!</h4><br>
                                    
                                </div>
                            @endif
                        @endforeach
                       
                    </div>
            <div class="card-body">

                    {!! Form::open(['method' => 'PUT', 'url' => ['/dashboard/users', $user->id]]) !!}
            
                    @csrf
                       
                        <div class="form-group">
                                    <label for="userName">Name:</label>
                                    <input type="text" name="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" id="userName" value="{{ $user->name }}" >
                                    @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="userEmail">Email:</label>
                                    <input type="email" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" id="userEmail" value="{{ $user->email }}" >
                                    @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                        <label for="userPassword">Password:</label>
                                        <input type="password" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" id="userPassword">
                                        @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <input type="submit" class="btn btn-success float-right" value="Update">
                        </div>
                    {!! Form::close() !!}
            </div>
        </div>
    </div>  
    @endsection