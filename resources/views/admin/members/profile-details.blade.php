@extends('main')
@section('content')
    <div class="container" style="padding-top: 80px; margin-bottom: 20px;">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-center"> {{$member->gender=='male'?'Groom Details':''}} {{$member->gender=='female'?'Bride Details':''}}</h2>
                    </div>
                    <div class="card-body">
                        <div class="row align-items-center justify-content-center">
                            <div class="col-md-4">
                                <p><b>Name :</b> <i>{{$member->name}}</i></p>
                                <p><b>Gender :</b> <i>{{$member->gender}}</i></p>
                                <p><b>Age :</b> <i>{{$member->age}}</i></p>
                                <p><b>Material Status</b> : <i>{{$member->material_status}}</i></p>
                                <p><b>Religion :</b> <i>{{$member->religion}}</i></p>
                                <p><b>Nationality :</b> <i>{{$member->nationality}}</i></p>
                                <p><b>City :</b> <i>{{$member->city}}</i></p>
                                <p><b>Address :</b> <i>{{$member->address}}</i></p>
                                <p><b>Mobile :</b> <i>{{$member->mobile}}</i></p>
                                <p><b>Qualification :</b> <i>{{$member->qualification}}</i></p>
                                <p><b>Occupation :</b> <i>{{$member->occupation}}</i></p>
                            </div>
                            <div class="col-md-4 text-center">
                                <img style="width: 300px; height: 300px; border-radius: 50%;" src="{{asset($member->pic?$member->pic:'images/default_profile.jpg')}}" alt="">
                            </div>
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
