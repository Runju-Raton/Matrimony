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
            .col-md-6{
                margin: 5px 0;
            }
        }
    </style>
@endsection
@section('content')
    <div class="container" style="padding-top: 80px; margin-bottom: 20px;">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-center">Add Groom or Bride</h2>
                    </div>
                    <div class="card-body">
                        <form  method="POST" action="{{route('store.member')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="row mt-2">
                                <div class="col-md-6 d-flex">
                                    <lable class="col-md-4">Name :</lable>
                                    <div class="col-md-8">
                                        <input type="text" name="name" class="form-control" value="{{old('name')}}">
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
                                            <option value="male" {{old('gender')=='male'?'selected':''}}>Male</option>
                                            <option value="female" {{old('gender')=='female'?'selected':''}}>Female</option>
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
                                        <input type="number" name="age" class="form-control" value="{{old('age')}}">
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
                                            <option value="married" {{old('material_status')=='married'?'selected':''}}>Married</option>
                                            <option value="divorced" {{old('material_status')=='divorced'?'selected':''}}>Divorced</option>
                                            <option value="widowed" {{old('material_status')=='widowed'?'selected':''}}>Widowed</option>
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
                                            <option value="muslim" {{old('religion')=='muslim'?'selected':''}}>Muslim</option>
                                            <option value="hindu"  {{old('religion')=='hindu'?'selected':''}} >Hindu</option>
                                            <option value="christian"  {{old('religion')=='christian'?'selected':''}} >Christian</option>
                                            <option value="sikh"  {{old('religion')=='sikh'?'selected':''}} >Sikh</option>
                                            <option value="parsi"  {{old('religion')=='parsi'?'selected':''}} >Parsi</option>
                                            <option value="jewish"  {{old('religion')=='jewish'?'selected':''}} >Jewish</option>
                                            <option value="buddhist"  {{old('religion')=='buddhist'?'selected':''}} >Buddhist</option>
                                            <option value="spiritual"  {{old('religion')=='spiritual'?'selected':''}} >Spiritual</option>
                                            <option value="other"  {{old('religion')=='other'?'selected':''}} >Other</option>
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
                                            <option value="bangladeshi" {{old('nationality')=='bangladeshi'?'selected':''}}>Bangladeshi</option>
                                            <option value="indian" {{old('nationality')=='indian'?'selected':''}}>Indian</option>
                                            <option value="pakistani" {{old('nationality')=='pakistani'?'selected':''}}>Pakistani</option>
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
                                        <input type="text" name="city" class="form-control" value="{{old('city')}}">
                                        @if ($errors->has('city'))
                                            <span class="text-danger">{{ $errors->first('city') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6 d-flex">
                                    <lable class="col-md-4">Address :</lable>
                                    <div class="col-md-8">
                                        <input type="text" name="address" class="form-control" value="{{old('address')}}">
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
                                        <input type="text" name="occupation" class="form-control" value="{{old('occupation')}}">
                                        @if ($errors->has('occupation'))
                                            <span class="text-danger">{{ $errors->first('occupation') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6 d-flex">
                                    <lable class="col-md-4">Qualification :</lable>
                                    <div class="col-md-8">
                                        <input type="text" name="qualification" class="form-control" value="{{old('qualification')}}">
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
                                        <input type="text" name="mobile" class="form-control" value="{{old('mobile')}}">
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
                                            <option value="myself" {{old('created_for')=='myself'?'selected':''}}>Myself</option>
                                            <option value="daughter" {{old('created_for')=='daughter'?'selected':''}}>Daughter</option>
                                            <option value="son" {{old('created_for')=='son'?'selected':''}}>Son</option>
                                            <option value="sister" {{old('created_for')=='sister'?'selected':''}}>Sister</option>
                                            <option value="brother" {{old('created_for')=='brother'?'selected':''}}>Brother</option>
                                            <option value="relative" {{old('created_for')=='relative'?'selected':''}}>Relative</option>
                                            <option value="friend" {{old('created_for')=='friend'?'selected':''}}>Friend</option>
                                        </select>
                                        @if ($errors->has('created_for'))
                                            <span class="text-danger">{{ $errors->first('created_for') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row  mt-2">
                                <div class="col-md-6 d-flex">
                                    <lable class="col-md-4">Photo :</lable>
                                    <div class="col-md-4 mr-4">
                                        <input type="file" name="pic" class="form-control" accept="image/*" id="pic" value="{{old('pic')}}">
                                        @if ($errors->has('pic'))
                                            <span class="text-danger">{{ $errors->first('pic') }}</span>
                                        @endif
                                    </div>
                                    <div class="mx-4">
                                        <img id="preview" src="" alt="" style="height: 100px; width: 100px;">
                                    </div>
                                </div>
                            </div>
                            <div class="row  mt-4">
                                <div class="col-md-12 d-flex justify-content-between">
                                    <a href="/" class="btn btn-secondary">Back To Home Page</a>
                                    <button class="btn btn-primary">Submit</button>
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
