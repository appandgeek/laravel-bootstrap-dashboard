@extends('layouts.dashboard')

    @section('content')
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
        
                <div class="card-header">
                   <div class="float-left">
                        <a data-toggle="modal" href="#exampleModal" class="btn btn-success"> <i class="fa fa-plus-circle"></i> Add User</a>
                   </div>
                   <div class="float-right">
                        <label for="searchUser" >Search:</label> <input type="text" name="name" id="searchUser"  placeholder="search user">
                   </div>
                   
                </div>

                <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover" id="usersTable">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr>
                                            <td>{{ $user->id }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            
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
                            {!! $users->render() !!}
                        </div>
                </div>
                 <!-- Basic Modals -->
             <div class="modal" id="exampleModal" data-backdrop="false">
                    <div class="modal-dialog">
                      <div class="modal-content">
                  
                        <!-- Modal Header -->
                        <div class="modal-header">
                          <h4 class="modal-title">Add User</h4>
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                  
                        <!-- Modal body -->
                        <div class="modal-body">
                            <form action="/dashboard/users" method="post" id="form">
                                @csrf
                                <div class="form-group">
                                    <label for="userName">Name:</label>
                                    <input type="text" name="name" class="form-control" id="userName" required>
                                </div>
                                <div class="form-group">
                                    <label for="userEmail">Email:</label>
                                    <input type="email" name="email" class="form-control" id="userEmail" required>
                                </div>
                                <div class="form-group">
                                        <label for="userPassword">Password:</label>
                                        <input type="password" name="password" class="form-control" id="userPassword" required>
                                    </div>
                            
                        </div>
                  
                        <!-- Modal footer -->
                        <div class="modal-footer">
                        <input type="submit" class="btn btn-success" value="Add">
                    </form>
                          <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                        </div>
                  
                      </div>
                    </div>
                  </div>
            <!-- End Basic Modals -->
            </div>
            
           
            <script>

                $(document).ready(function(){

                    $('#searchUser').keyup(function(){
                        let term = $('#searchUser').val();
                        $.ajax({
                            type: "get",
                            url: "/dashboard/users/search",
                            data: {'id': term},
                            success: function(resp)
                            {
                             $('.table-responsive').empty().append(resp);
                                                               
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