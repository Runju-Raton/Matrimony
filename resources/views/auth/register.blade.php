@extends('main')
@section('custom-style')
    <style>
        .content {
            position: relative;
            background-image: url('{{asset("images/banner1.jpg")}}'); /* Add your background image URL */
            background-size: cover;
            background-position: center;
            align-items: center;
            padding-top: 50px;
            display: flex !important;
            align-items: center !important;
        }
        .content::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.6); /* Black background with 70% opacity */
        }
        @media screen and (max-width:480px){
            .footer{
                height: 550px;
            }
            .content {
                padding-top: 140px;
            }
        }
    </style>
@endsection
@section('content')
    <div class="container-fluid" >
        <div class="row justify-content-center align-items-center">
            <div class="col-md-3">
                <div class="card form-holder">
                    <div class="card-body">
                        <h1>Register</h1>

                        @if (Session::has('error'))
                            <p class="text-danger">{{ Session::get('error') }}</p>
                        @endif

                        <form action="{{ route('register') }}" method="post">
                            @csrf
                            @method('post')
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control" placeholder="name" />
                                @if ($errors->has('name'))
                                    <p class="text-danger">{{ $errors->first('name') }}</p>
                                @endif
                            </div>

                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control" placeholder="Email" />
                                @if ($errors->has('email'))
                                    <p class="text-danger">{{ $errors->first('email') }}</p>
                                @endif
                            </div>

                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Password" />
                                @if ($errors->has('password'))
                                    <p class="text-danger">{{ $errors->first('password') }}</p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>Confirm Password</label>
                                <input type="password" name="password_confirmation" class="form-control"
                                       placeholder="Password Confirmation" />
                            </div>

                            <div class="row justify-content-between">
                                <div class="col-md-8">
                                    <a href="/login" class=""> Already have a Account?</a>
                                </div>
                                <div class="col-3 mr-2">
                                    <input type="submit" class="btn btn-primary" value=" Register " />
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
