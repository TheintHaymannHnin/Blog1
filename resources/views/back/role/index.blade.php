@extends('back.master')
@section('content')
<div class="container mt-5">
    <div class="rows">
        <div class="col-md-12">
            <h3>User table</h3>
            <div class="card-header"  style="background-color:RGB(216, 191, 216);">
                    <div class="card-body" style="background-color:RGB(127, 255, 0);">
            <table class="table table-bordered table-hover" style="background-color:RGB(152, 251, 152);" bordercolor="red" >
                <thead>
                    <tr>
                        <th  ><b>ID</b></th>
                        <th  ><b>Name</b></th>
                       
                    </tr>
                </thead>
                <tbody>
                        @foreach($roles as $role)
                    <tr>
                        
                    <td><b>{{$role->id}}</b></td>
                    <td><b>{{$role->name}}</b></td>
                   
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