
@extends('main')
@section('custom-style')
    <style>
        .content {
            position: relative;
            {{--background-image: url('{{asset("images/banner1.jpg")}}'); /* Add your background image URL */--}}
            background-size: cover;
            background-position: center;
            align-items: center;
            padding-top: 50px;
            display: flex;
            align-items: center !important;
            justify-content: center;
        }
        .content::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            /*background-color: rgba(0, 0, 0, 0.6); !* Black background with 70% opacity *!*/
        }
        .content{
            padding-top: 70px;
        }
        .pagination{
            text-align: center;
            justify-content: end;
        }
        .pagination a,
        .pagination span {
            font-size: 12px; /* Adjust the font size as needed */
        }

        .content {
            display: block; !important;
        }

        @media screen and (max-width:480px){
            .footer{
                height: 550px;
            }
            @if(\Illuminate\Support\Facades\Auth::user())
               .content{
                    padding-top: 280px;
                }
            @else
                .content{
                    padding-top: 150px;
                }
            @endif
        }
    </style>
@endsection

@section('content')
    <section class="members py-4">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h5 class="text-center" style="color: #2D3034; font-size: 36px;">Find Your Partner</h5>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-md-9 order-2">
                    @if(count($members)>0)
                        <div class="row">
                        @foreach($members as $member)
                            <div class="col-md-3 item mb-4">
                                <div class="card member-card">
                                    @if($member->pic)
                                        <img  src="{{asset($member->pic)}}" class="card-img-top" alt="Member 1">
                                    @else
                                        <img  src="{{asset('images/default_profile.jpg')}}" class="card-img-top" alt="Member 1">

                                    @endif
                                    <div class="card-body">
                                        <h5 class="card-title">{{$member->name}}</h5>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="text-left">
                                                <p class=""> <span class="font-weight-bold">Age: </span> {{$member->age}}</p>
                                                <p class=""> <span class="font-weight-bold">Gender: </span>   {{ucfirst($member->gender)}}</p>
                                            </div>
                                            <div class="text-right">
                                                <p>{{ucfirst($member->religion)}}</p>
                                            </div>
                                        </div>
                                        <a href="{{route('profile.details',['id'=>$member->id])}}" class="btn btn-primary">More profile details</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <div class="col-md-12 text-center mt-3">
                           {{$members->links()}}
                        </div>
                    </div>
                    @else
                        <div>
                            <h1 class="center">No Data Found. Please Filter Again.</h1>
                        </div>
                    @endif
                </div>
                <div class="col-md-3 order-1">
                    <form style="width: 100%;" method="GET" action="{{route('all.members')}}">
                        <div class="col-md-12 mb-4">
                            <div class="col-md-12">
                                <p>Filter BY </p>
                            </div>
                            <div class="col-md-12 d-flex my-2">
                                <input type="number" name="age_from" placeholder="Age From" class="form-control mr-1" value="{{request()->query("age_from")}}">
                                <input type="number" name="age_to" placeholder="Age To" class="form-control ml-1" value="{{request()->query("age_to")}}">
                            </div>
                            <div class="col-md-12 d-flex my-2">
                                <select name="religion" class="form-control" value="{{request()->query("religion")}}">
                                    <option value="">Select Religion</option>
                                    <option value="muslim" {{request()->query("religion")=='muslim'?'selected':''}}>Muslim</option>
                                    <option value="hindu" {{request()->query("religion")=='hindu'?'selected':''}}>Hindu</option>
                                    <option value="christian" {{request()->query("religion")=='christian'?'selected':''}}>Christian</option>
                                    <option value="sikh" {{request()->query("religion")=='sikh'?'selected':''}}>Sikh</option>
                                    <option value="parsi" {{request()->query("religion")=='parsi'?'selected':''}}>Parsi</option>
                                    <option value="jewish" {{request()->query("religion")=='jewish'?'selected':''}}>Jewish</option>
                                    <option value="buddhist" {{request()->query("religion")=='buddhist'?'selected':''}}>Buddhist</option>
                                    <option value="spiritual" {{request()->query("religion")=='spiritual'?'selected':''}}>Spiritual</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                            <div class="col-md-12 d-flex my-2">
                                <select name="nationality" class="form-control">
                                    <option value="">Select Nationality </option>
                                    <option value="bangladeshi" {{request()->query('nationality')=='bangladeshi'?'selected':''}}>Bangladeshi</option>
                                    <option value="indian" {{request()->query('nationality')=='indian'?'selected':''}}>Indian</option>
                                    <option value="pakistani" {{request()->query('nationality')=='pakistani'?'selected':''}}>Pakistani</option>
                                </select>
                            </div>
                            <div class="col-md-12 d-flex my-2">
                                <select  name="gender"  class="form-control">
                                    <option value="">Select Gender</option>
                                    <option value="male" {{request()->query("gender")=='male'?'selected':''}}>Male</option>
                                    <option value="female" {{request()->query("gender")=='female'?'selected':''}}>Female</option>
                                </select>
                            </div>
                            <div class="col-md-1">
                                <button type="submit" class="btn btn-primary">Search </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
