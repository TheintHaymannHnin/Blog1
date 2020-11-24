@extends('back.master')
@section('content')
<div class="container mt-5">
    <div class="rows">
        <div class="col-md-12">
                <div class="card-header" style="background-color:RGB(144, 238, 144);" >
                        <div class="card-body" style="background-color:RGB(144, 238, 144);">
            <h3 style="background-color:RGB(144, 238, 144);">Dashboard Two</h3>

            <div>
                    <ul>
                        <li><b>Name : {{Auth::user()->name}}</b></li>
                        <li><b>Email : {{Auth::user()->email}}</b></li>
                        <li><b>Roles :</b>
                            @foreach(Auth::user()->roles as $role)
                            <div>
                                <span class="badge badge-warning">{{$role->name}}</span></div>
                            @endforeach
                        </li>
                    </ul>
                </div>
            <form action="{{route('logout')}}" method="POST">
                    @csrf 
                    <a href="{{url('http://localhost:8000/admin/users')}}" class="btn btn-warning">User</a>
                <a href="{{url('http://localhost:8000/admin/roles')}}" class="btn btn-warning">Roles</a>
                    <button class="btn btn-danger float-right" onclick="return confirm('Are you sure you want to logout?')">Logout</button>
                </form>
                <a href="{{url('admin/managers')}}" class="btn btn-warning mt-3">Dashboard One</a>
                <a href="{{url('admin/staffs')}}" class="btn btn-warning mt-3">Dashboard Two</a>
                <a href="{{url('admin/normal_users')}}" class="btn btn-warning mt-3">Dashboard Three</a>
        </div>
                </div>
        </div>
    </div>
</div>
@endsection