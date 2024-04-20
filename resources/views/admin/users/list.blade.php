@extends('admin.main')
@section('content')
<div class="card body_content">
    @if(session('success'))
        <div class="container-fluid">
            <div class="alert alert-success alert-dismissible fade show mt-2" role="alert">
                {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    @endif
    <!-- Error Message -->
    @if(session('error'))
        <div class="container-fluid">
            <div class="alert alert-danger alert-dismissible fade show mt-2" role="alert">
                {{ session('error') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    @endif
    <div class="card-header"><h2>Users List</h2></div>
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <th>#SL</th>
                <th>Name</th>
                <th>Email</th>
                <th>Status</th>
                <th>Action</th>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>
                            <lable class="{{$user->status==1?'badge badge-success':'badge badge-danger'}}">{{$user->status==1?'Active':'Not Active'}}</lable>
                        </td>
                        <td>
                            @if($user->status==1)
                                <form method="POST"  action="{{route('user.status',['id'=>$user->id])}}" >
                                    @csrf
                                    <button type="submit" value="0" name="status" class="btn btn-danger">Reject</button>
                                </form>
                            @else
                                <form method="POST" action="{{route('user.status',['id'=>$user->id])}}" >
                                    @csrf
                                    <button type="submit" value="1" name="status" class="btn btn-success">Approve</button>
                                </form>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<div class="col-md-12 text-center mt-3">
    {{$users->links()}}
</div>
@endsection
