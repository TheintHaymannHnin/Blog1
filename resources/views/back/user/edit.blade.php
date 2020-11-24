@extends('back.master')
@section('content')
<div class="container mt-5">
    <div class="rows">
        <div class="col-md-12">
            <h3>User table</h3>
            <div class="card-header" style="background-color:RGB(233, 150, 122);">
                    <div class="card-body" style="background-color:RGB(233, 150, 122);">
                     
                        <div class="container">
                            <div class="rows">
                                <div class="col-md-3"></div>
                                <div class="col-md-6">
                                        <p><b>Edit page</b></p>
                                    <form action="{{url('admin/users/'.$user->id.'/update')}}" method="POST">
                                        @csrf

                                        <div class="form-group">
                                        <input type="text" class="form-control" value="{{$user->name}}">
                                        </div>

                                        <h5><b>Roles</b></h5>
                                        @foreach($roles as $role)
                                        <div>
                                        <input type="checkbox" id="label{{$role->id}}"name="role_ids[]" value="{{$role->id}}">

                                        @foreach($user->roles as $userRole)
                                        @if($userRole->name == $role->name)
                                        {{-- checked --}}
                                        @endif
                                        @endforeach
                                        
                                        <label for="label{{$role->id}}"><b>{{$role->name}}</b></label>
                                        </div>
                                        @endforeach
                                        <br>
                                        <button style="background-color:RGB(255, 192, 203);"><b>Add Role</b></button>











                                </div>
                                <div class="col-md-3"></div>
                            </div>

                        </div>
           
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection