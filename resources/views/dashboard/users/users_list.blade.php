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
                   {{-- <h2 class="h3 card-header-title">User's Management</h2> --}}
                   {{-- <button type="button" class="btn btn-info">Add</button> --}}
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
                                        <th>Role</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr>
                                            <td>{{ $user->id }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>Normal</td>
                                            <td> <a href="#"
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
            </div>
            {{-- <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script> --}}
            <script>
             $(document).ready(function () {
                // $('#usersTable').DataTable({
                //     "aoColumns": [
                //         null,
                //         null,
                //         null,
                //         null,
                //         {"bSortable": false}
                //     ]
                // });

               
            });
            function ConfirmDelete() {
                var x = confirm("Are you sure you want to delete?");
                if (x)
                    return true;
                else
                    return false;
            }
            </script>
    @endsection