@extends('admin.main')
@section('content')
        <div class="card  body_content">
            <div class="card-header">
                <h2>Edit Groom or Bride</h2>
            </div>
            <div class="card-body">
                <form  method="POST" action="{{route('store.member')}}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" value="{{$member->id}}">
                    @if($member->status)
                        <input type="hidden" name="status" value="{{$member->status}}">
                    @endif
                    <input type="hidden" name="id" value="{{$member->id}}">
                    <div class="row mt-2">
                        <div class="col-md-6 d-flex">
                            <lable class="col-md-4">Name :</lable>
                            <div class="col-md-8">
                                <input type="text" name="name" class="form-control" value="{{$member->name}}">
                                @if ($errors->has('name'))
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6 d-flex">
                            <lable class="col-md-4">Gender :</lable>
                            <div class="col-md-8">
                                <select  name="gender"  class="form-control">
                                    <option value="">Select</option>
                                    <option value="male" {{$member->gender=='male'?'selected':''}}>Male</option>
                                    <option value="female" {{$member->gender=='female'?'selected':''}}>Female</option>
                                </select>
                                @if ($errors->has('gender'))
                                    <span class="text-danger">{{ $errors->first('gender') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row  mt-2">
                        <div class="col-md-6 d-flex">
                            <lable class="col-md-4">Age :</lable>
                            <div class="col-md-8">
                                <input type="number" name="age" class="form-control" value="{{$member->age}}">
                                @if ($errors->has('age'))
                                    <span class="text-danger">{{ $errors->first('age') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6 d-flex">
                            <lable class="col-md-4">Material Status :</lable>
                            <div class="col-md-8">
                            <select name="material_status" class="form-control">
                                <option value="">Select</option>
                                <option value="married" {{$member->material_status=='married'?'selected':''}}>Married</option>
                                <option value="divorced" <?php echo e(old('material_status')=='divorced'?'selected':''); ?>>Divorced</option>
                                <option value="widowed" <?php echo e(old('material_status')=='widowed'?'selected':''); ?>>Widowed</option>
                            </select>
                                @if ($errors->has('material_status'))
                                    <span class="text-danger">{{ $errors->first('material_status') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row  mt-2">
                        <div class="col-md-6 d-flex">
                            <lable class="col-md-4">Religion :</lable>
                            <div class="col-md-8">
                            <select name="religion" class="form-control">
                                <option value="">Select</option>
                                <option value="muslim" {{$member->religion=='muslim'?'selected':''}}>Muslim</option>
                                <option value="hindu" {{$member->religion=='hindu'?'selected':''}}>Hindu</option>
                                <option value="christian" {{$member->religion=='christian'?'selected':''}}>Christian</option>
                                <option value="sikh" {{$member->religion=='sikh'?'selected':''}}>Sikh</option>
                                <option value="parsi" {{$member->religion=='parsi'?'selected':''}}>Parsi</option>
                                <option value="jewish" {{$member->religion=='jewish'?'selected':''}}>Jewish</option>
                                <option value="buddhist" {{$member->religion=='buddhist'?'selected':''}}>Buddhist</option>
                                <option value="spiritual" {{$member->religion=='spiritual'?'selected':''}}>Spiritual</option>
                                <option value="other" {{$member->religion=='other'?'selected':''}}>Other</option>
                            </select>
                                @if ($errors->has('religion'))
                                    <span class="text-danger">{{ $errors->first('religion') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6 d-flex">
                            <lable class="col-md-4">Nationality :</lable>
                            <div class="col-md-8">
                            <select name="nationality" class="form-control">
                                <option value="">Select</option>
                                <option value="bangladeshi" {{$member->nationality=='bangladeshi'?'selected':''}}>Bangladeshi</option>
                                <option value="indian" {{$member->nationality=='indian'?'selected':''}}>Indian</option>
                                <option value="pakistani" {{$member->nationality=='pakistani'?'selected':''}}>Pakistani</option>
                            </select>
                                @if ($errors->has('nationality'))
                                    <span class="text-danger">{{ $errors->first('nationality') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row  mt-2">
                        <div class="col-md-6 d-flex">
                            <lable class="col-md-4">City :</lable>
                            <div class="col-md-8">
                            <input type="text" name="city" class="form-control" value="{{$member->city}}">
                                @if ($errors->has('city'))
                                    <span class="text-danger">{{ $errors->first('city') }}</span>
                                @endif
                            </div>
                            </div>
                        <div class="col-md-6 d-flex">
                            <lable class="col-md-4">Address :</lable>
                            <div class="col-md-8">
                            <input type="text" name="address" class="form-control" value="{{$member->address}}">
                                @if ($errors->has('address'))
                                    <span class="text-danger">{{ $errors->first('address') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row  mt-2">
                        <div class="col-md-6 d-flex">
                            <lable class="col-md-4">Occupation :</lable>
                            <div class="col-md-8">
                            <input type="text" name="occupation" class="form-control" value="{{$member->occupation}}">
                                @if ($errors->has('occupation'))
                                    <span class="text-danger">{{ $errors->first('occupation') }}</span>
                                @endif
                            </div>
                            </div>
                        <div class="col-md-6 d-flex">
                            <lable class="col-md-4">Qualification :</lable>
                            <div class="col-md-8">
                            <input type="text" name="qualification" class="form-control" value="{{$member->qualification}}">
                                @if ($errors->has('qualification'))
                                    <span class="text-danger">{{ $errors->first('qualification') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row  mt-2">
                        <div class="col-md-6 d-flex">
                            <lable class="col-md-4">Mobile :</lable>
                            <div class="col-md-8">
                                <input type="text" name="mobile" class="form-control" value="{{$member->mobile}}">
                                @if ($errors->has('mobile'))
                                    <span class="text-danger">{{ $errors->first('mobile') }}</span>
                                @endif
                            </div>
                            </div>
                        <div class="col-md-6 d-flex">
                            <lable class="col-md-4">Profile for :</lable>
                            <div class="col-md-8">
                                <select name="created_for" class="form-control">
                                    <option value="">Select</option>
                                    <option value="myself" {{$member->created_for=='myself'?'selected':''}}>Myself</option>
                                    <option value="daughter" {{$member->created_for=='daughter'?'selected':''}}>Daughter</option>
                                    <option value="son" {{$member->created_for=='son'?'selected':''}}>Son</option>
                                    <option value="sister" {{$member->created_for=='sister'?'selected':''}}>Sister</option>
                                    <option value="brother" {{$member->created_for=='brother'?'selected':''}}>Brother</option>
                                    <option value="relative" {{$member->created_for=='bangladeshi'?'selected':''}}>Relative</option>
                                    <option value="friend" {{$member->created_for=='friend'?'selected':''}}>Friend</option>
                                </select>
                                @if($errors->has('created_for'))
                                    <span class="text-danger">{{ $errors->first('created_for') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row  mt-2">
                        <div class="col-md-6 d-flex">
                            <lable class="col-md-4 mr-3">Photo :</lable>
                            @if($member->pic)
                                <input type="file" name="pic" class="form-control col-md-4 mr-4" accept="image/*" id="pic">
                                <img id="preview" src="{{asset($member->pic)}}" alt="" style="height: 100px; width: 100px;">
                                <input type="hidden" name="old_pic" value="{{$member->pic}}">
                            @else
                                <input type="file" name="pic" class="form-control col-md-4" accept="image/*" id="pic">
                                <img id="preview" src="" alt="" style="height: 100px; width: 100px;">
                            @endif
                            <div class="mx-4">
                            </div>
                        </div>
                    </div>
                    <div class="row  mt-4">
                        <div class="col-md-12 d-flex justify-content-between">
                            <a href="{{route('members.list')}}" class="btn btn-secondary">Back</a>
                            <button class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </form>
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
