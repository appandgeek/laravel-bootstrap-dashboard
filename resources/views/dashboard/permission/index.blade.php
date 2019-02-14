@extends('layouts.dashboard')
    @section('content')
    <div class="u-content">
            <div class="u-body">
            <h2 class="h2 font-weight-semibold mb-4">Roles</h2>
            <div class="card mb-4">
        <div class="card">
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
            <header class="card-header">
                    
                <div class="float-left">
                        <a  href="/dashboard/permission/create" class="btn btn-success"> <i class="fa fa-plus-circle"></i> Add Permission</a>
                </div>
                            

            </header>
            <div class="card-body">
                <div class="table-responsive">
                        <table class="table table-hover" id="permissionTable">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th >Permissions</th>
                                <th >Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($permissions as $permission)
                                <tr>
                                        <td>{{ $permission->id }}</td>
                                    <td>{{ $permission->name }}</td>
                                    
                                    <td>
                                        <a href="{{ URL::to('dashboard/permission/'.$permission->id.'/edit') }}"
                                           class="btn btn-sm btn-primary  float-left" style="margin-right:10px;"><i
                                                    class="glyphicon glyphicon-edit"></i> Edit</a>

                                       
                                            {!! Form::open(['method' => 'DELETE', 'route' => ['permission.destroy', $permission->id],'onsubmit' => 'return ConfirmDelete()'  ]) !!}
                                            <button type="submit" class="btn btn-sm btn-danger"><i
                                                        class="glyphicon glyphicon-trash"></i> Delete
                                            </button>
                                            {!! Form::close() !!}
                                       
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
            </div>
        </div>
    </div>
                    
                    <script>
                        
                        function ConfirmDelete() {
                                            var x = confirm("Are you sure you want to delete?");
                                            if (x)
                                                return true;
                                            else
                                                return false;
                                        }
                        </script>
        </div>
    </div>
    @endsection