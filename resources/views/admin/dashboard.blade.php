@extends('admin.main')
@section('custom-style')
    <style>
        /* Add your custom styles here */
        .card {
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .custom-card-blue {
            background-color: #3498db;
            color: #fff;
        }
        .custom-card-green {
            background-color: #2ecc71;
            color: #fff;
        }
        .custom-card-orange {
            background-color: #e67e22;
            color: #fff;
        }
        .card h2{
            border: 1px solid #fff;
        }
        @media screen and (max-width:480px){
            .card{
               margin: 10px 0;
            }
        }
    </style>
@endsection
@section('content')
{{--    <div class="card  body_content">--}}
        <div class="container body_content">
            <div class="row d-flex align-content-center">
                <div class="col-md-4">
                    <div class="card custom-card-blue">
                        <div class="card-body">
                            <h2 class="text-center  mb-4 p-1">Users</h2>
                            <h5>Total Users: {{$total_users}}</h5>
                            <h5>Active Users: {{$active_users}}</h5>
                            <h5>Pending Users: {{$pending_users}}</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card custom-card-green">
                        <div class="card-body">
                            <h2 class="text-center mb-4 p-1">Brides</h2>
                            <h5>Total Brides: {{$total_brides}}</h5>
                            <h5>Active Brides: {{$active_brides}}</h5>
                            <h5>Pending Brides: {{$pending_brides}}</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card custom-card-orange">
                        <div class="card-body">
                                <h2 class="text-center mb-4 p-1">Grooms</h2>
                                <h5>Total Grooms: {{$total_grooms}}</h5>
                                <h5>Active Grooms: {{$active_grooms}}</h5>
                                <h5>Pending Grooms: {{$pending_grooms}}</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
{{--    </div>--}}
@endsection
