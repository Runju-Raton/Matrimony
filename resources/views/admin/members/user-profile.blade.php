@extends('main')
@section('custom-style')
    <style>
        @media screen and (max-width:480px){
            .footer{
                height: 550px;
            }
            .content{
                padding-top: 220px;
            }
        }
    </style>
@endsection
@section('content')
    <div class="container-fluid" style="padding-top: 80px; margin-bottom: 20px;">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-center">User Profile Details</h2>
                    </div>
                    <div class="card-body">
                        <div class="row align-items-center justify-content-center">
                            <div class="col-md-4 text-center">
                                <img style="width: 300px; height: 300px; border-radius: 50%;" src="{{asset(isset($user->pic)?$user->pic:'images/default_profile.jpg')}}" alt="">
                                <div>
                                    <h3>Name: {{$user->name}}</h3>
                                    <h4>Email: {{$user->email}}</h4>
                                    <a href="{{route('edit.profile',['id'=>$user->id])}}" class="btn btn-primary mb-2"><i class="fa fa-edit"></i> Edit Profile</a>
                                </div>
                            </div>
                            @if(count($members)>0)
                            <div class="col-md-8">
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
                                <div class="card">
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
                                                        <td style="width: 150px;">
                                                            <div class="d-flex">
                                                                <form method="POST"  action="{{route('userMember.delete',['id'=>$member->id])}}" >
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
                                        <div class="col-md-12 text-center mt-3">
                                             {{$members->links()}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                        </div>
                        <div class="row justify-content-end mt-2">
                            <a href="/" class="btn btn-secondary">Go To Home Page</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('custom-scripts')
    <script>
        $(document).ready( function(){
            $('#pic').on('change',function(event){
                $('#preview').attr('src',URL.createObjectURL(event.target.files[0]))
            });
        });
    </script>
@endsection
