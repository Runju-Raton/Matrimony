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
        <div class="card-header"><h2>Members List</h2></div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered">
                <thead>
                <th>#SL</th>
                <th>Name</th>
                <th>Gender</th>
                <th>Age</th>
                <th>Material Status</th>
                <th>Religion</th>
                <th>Nationality</th>
                <th>Address</th>
                <th>Photo</th>
                <th>Status</th>
                <th>Action</th>
                </thead>
                <tbody>
                @foreach($members as $member)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$member->name}}</td>
                        <td>{{$member->gender}}</td>
                        <td>{{$member->age}}</td>
                        <td>{{$member->material_status}}</td>
                        <td>{{$member->religion}}</td>
                        <td>{{$member->nationality}}</td>
                        <td>{{$member->address}} {{$member->city}}</td>
                        <td>
                            <img src="{{asset($member->pic?$member->pic:'images/default_profile.jpg')}}" alt="" width="50px" height="50px" style="border-radius: 50%">
                        </td>
                        <td>
                            <lable class="{{$member->status==1?'badge badge-success':'badge badge-warning'}}">{{$member->status==1?'Approved':'Pending'}}</lable>
                        </td>
                        <td>
                            <div class="d-flex">
                                @if($member->status==0)
                                    <form method="POST" action="{{route('member.status',['id'=>$member->id])}}" >
                                        @csrf
                                        <button type="submit" value="1" name="status" class="btn btn-success mr-2">Approve</button>
                                    </form>
                                @endif
                                    <form method="POST"  action="{{route('member.delete',['id'=>$member->id])}}" >
                                        @csrf
                                        <a href="{{route('edit.member',['id'=>$member->id])}}"  class="btn btn-primary  mr-2"><i class="fa fa-pen"></i> Edit</a>
                                    </form>
                                <form method="POST"  action="{{route('member.delete',['id'=>$member->id])}}" >
                                    @csrf
                                    <button type="submit" value="0" name="status" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            </div>
        </div>
    </div>
    <div class="col-md-12 text-center mt-3">
        {{$members->links()}}
    </div>
@endsection
