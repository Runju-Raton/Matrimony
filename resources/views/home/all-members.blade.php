
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
            display: flex !important;
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
            <div class="row d-flex justify-content-enter">
                <div class="col-md-9">
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
                                        <p class="card-text">{{$member->age}}</p>
                                        <p class="card-text">{{$member->gender}}</p>
                                        <a href="#" class="btn btn-primary">More profile details</a>

                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <div class="col-md-12 text-center mt-3">
                           {{$members->links()}}
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <form style="width: 100%;" method="GET" action="{{route('all.members')}}">
                        <div class="col-md-12 mb-4">
                            <div class="col-md-12">
                                <p>Filter BY </p>
                            </div>
                            <div class="col-md-12 d-flex my-2">
                                <input type="number" name="age_from" placeholder="Age From" class="form-control mr-1">
                                <input type="number" name="age_to" placeholder="Age To" class="form-control ml-1">
                            </div>
                            <div class="col-md-12 d-flex my-2">
                                <select name="religion" class="form-control">
                                    <option value="">Select Religion</option>
                                    <option value="muslim">Muslim</option>
                                    <option value="hindu">Hindu</option>
                                    <option value="christian">Christian</option>
                                    <option value="sikh">Sikh</option>
                                    <option value="parsi">Parsi</option>
                                    <option value="jewish">Jewish</option>
                                    <option value="buddhist">Buddhist</option>
                                    <option value="spiritual">Spiritual</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                            <div class="col-md-12 d-flex my-2">
                                <select  name="gender"  class="form-control">
                                    <option value="">Select Gender</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
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