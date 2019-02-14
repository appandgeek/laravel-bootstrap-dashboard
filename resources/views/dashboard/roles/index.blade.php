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
                    <a  href="/dashboard/roles/create" class="btn btn-success"> <i class="fa fa-plus-circle"></i> Add Role</a>
                </div>
                <div class="float-right">
                        <input type="text" name="name" class="form-control" id="searchRole"  placeholder="search role">
                   </div>
            </header>
            <div class="card-body">
                <div class="table-responsive">
                        <table class="table table-hover" id="rolesTable">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th style="width:20%">Role</th>
                                <th style="width:60%">Permissions</th>
                                <th style="width:20%">Action</th>
                            </tr>
                            </thead>
                            <tbody>
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
                            </tbody>
                        </table>
                    </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    <script>
         $(document).ready(function(){

$('#searchRole').keyup(function(){
    let term = $('#searchRole').val();
    
    $.ajax({
        type: "get",
        url: "roles/search",
        data: {'term': term},
        success: function(resp)
        {
            console.log(resp);
            $('tbody').html(resp);
        },
       
        error: function(error)
        {
            console.log(error);
        }

    })                        
})

})
                        
            function ConfirmDelete() {
                                var x = confirm("Are you sure you want to delete?");
                                if (x)
                                    return true;
                                else
                                    return false;
                            }
            </script>
    @endsection