@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="background-color:RGB(255, 182, 193);"><b>{{ __('Dashboard-three') }}</b></div>

                <div class="card-body" style="background-color:RGB(255, 182, 193);">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{-- {{ __('You are logged in!') }} --}}
                    <div>
                            <ul>
                                <li><b>Name : {{Auth::user()->name}}</b></li>
                                <li><b>Email : {{Auth::user()->email}}</b></li>
                                <li><b>Roles :</b>
                                    @foreach(Auth::user()->roles as $role)
                                    <div>
                                        <span class="badge badge-success"><b>{{$role->name}}</b></span></div>
                                    @endforeach
                                </li>
                            </ul>
                            <form action="{{route('logout')}}" method="POST">
                                    @csrf 
                                    
                                    <button class="btn btn-danger float-right" onclick="return confirm('Are you sure you want to logout?')">Logout</button>
                                </form>
                                <a href="{{url('admin/managers')}}" class="btn btn-success mt-3">Dashboard One</a>
                                <a href="{{url('admin/staffs')}}" class="btn btn-success mt-3">Dashboard Two</a>
                                <a href="{{url('admin/normal_users')}}" class="btn btn-success mt-3">Dashboard Three</a>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
