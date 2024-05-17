@extends('main')
@section('content')
    <div class="container" style="padding-top: 80px; margin-bottom: 20px;">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-center">Update Your Profile</h2>
                    </div>
                    <div class="card-body">
                        <form  method="POST" action="{{route('store.user')}}" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{$user->id}}">
                            <div class="row mt-2">
                                <div class="col-md-12 d-flex">
                                    <lable class="col-md-4">Name :</lable>
                                    <div class="col-md-4">
                                        <input type="text" name="name" class="form-control" value="{{$user->name}}">
                                        @if ($errors->has('name'))
                                            <span class="text-danger">{{ $errors->first('name') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-12 d-flex mt-2">
                                    <lable class="col-md-4">Profile Photo :</lable>
                                    <div class="col-md-4">
                                        @if($user->pic)
                                            <input type="file" name="pic" class="form-control  mr-4" accept="image/*" id="pic">
                                        @else
                                            <input type="file" name="pic" class="form-control" accept="image/*" id="pic">
                                        @endif
                                    </div>
                                    <div class="mx-4">
                                        @if($user->pic)
                                            <img id="preview" src="{{asset($user->pic)}}" alt="" style="height: 100px; width: 100px;">
                                            <input type="hidden" name="old_pic" value="{{$user->pic}}">
                                        @else
                                            <img id="preview" src="" alt="" style="height: 100px; width: 100px;">
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row  mt-4">
                                <div class="col-md-12 d-flex justify-content-between">
                                    <a href="/" class="btn btn-secondary">Back To Home Page</a>
                                    <button class="btn btn-primary">Update</button>
                                </div>
                            </div>
                        </form>
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
