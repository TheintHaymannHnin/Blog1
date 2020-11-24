@extends('back.master')
@section('content')
<div class="container mt-5">
    <div class="rows">
        <div class="col-md-12">
            <h3>User table</h3>
            <div class="card-header" style="background-color:RGB(216, 191, 216);">
                    <div class="card-body" style="background-color:RGB(127, 255, 0);">
            <table class="table table-bordered table-hover" style="background-color:RGB(152, 251, 152);" bordercolor="red" >
                <thead>
                    <tr>
                        <th><b>ID</b></th>
                        <th><b>Name</b></th>
                        <th><b>Email</b></th>
                        <th><b>Role</b></th>
                        <th><b>Action</b></th>
                    </tr>
                </thead>
                <tbody>
                        @foreach($users as $user)
                    <tr>
                        
                    <td><b>{{$user->id}}</b></td>
                    <td><b>{{$user->name}}</b></td>
                    <td><b>{{$user->email}}</b></td>
                    <td>
                            @foreach($user->roles as $role)
                            <span class="badge badge-success">
                            {{$role->name}}
                        </span>
                            @endforeach
                        </td>
                    <td>
                        @foreach(Auth::user()->roles as $role)
                        @if($role->name == 'Manager')
                        <a href="{{url('admin/users/'.$user->id.'/edit')}}" class="btn btn-success btn-sm">Manage Roles</a>
                        @endif
                        @endforeach
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
@endsection