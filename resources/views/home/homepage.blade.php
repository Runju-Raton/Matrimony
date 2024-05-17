@extends('main')
@section('custom-style')
    @if(Auth::user())
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
    @else
        <style>
            @media screen and (max-width:480px){
                .footer{
                    height: 550px;
                }
                .content{
                    padding-top: 120px;
                }
            }
        </style>
    @endif
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="com-md-12">
                @include('partials.navbar')
            </div>
        </div>
    </div>
    <div class="owl-carousel owl-carousel1">
        <div class="item"><img src="{{asset('images/banner1.jpg')}}" alt="Image 1" style="width: 100%; height: 600px;"></div>
        <div class="item"><img src="{{asset('images/banner2.jpg')}}" alt="Image 2" style="width: 100%; height: 600px;"></div>
        <div class="item"><img src="{{asset('images/banner3.jpg')}}" alt="Image 3" style="width: 100%; height: 600px;"></div>
        <div class="item"><img src="{{asset('images/banner4.jpg')}}" alt="Image 4" style="width: 100%; height: 600px;"></div>
    </div>
    <section class="members py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div>
                        <h5 class="text-center" style="color: #2D3034; font-size: 36px;">Find Your Partner</h5>
                        <hr>
                    </div>
                    <div class="owl-carousel owl-carousel2">
                        @foreach($members as $member)
                            <div class="item">
                                <div class="card member-card">
                                    <img  src="{{asset($member->pic?$member->pic:'images/default_profile.jpg')}}" class="card-img-top" alt="Member 1">
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
                    </div>
                    <div class="text-center mt-3">
                        <a href="{{route('all.members')}}" class="btn btn-outline-success">See All</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="about  pb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div>
                        <h5 class="text-center" style="color: #2D3034; font-size: 36px;">About Us</h5>
                        <hr>
                    </div>
                    <p class="text-justify"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab autem dicta iure natus porro quis rem similique veritatis. Architecto, at inventore minus numquam officiis provident quidem saepe velit! Dolorum et quos tenetur? Ad consequatur corporis dolores dolorum eligendi eum expedita, harum hic in itaque labore laborum, libero magni maiores maxime molestias mollitia nemo placeat quae ratione soluta suscipit tempora veniam? Ab ad aliquam aut autem beatae consectetur cumque debitis deleniti dicta doloribus dolorum eos, esse et fugit in incidunt iste itaque libero natus necessitatibus nemo nobis possimus quas quia quidem quos repellat rerum sunt, suscipit tempora tempore tenetur ullam vel veniam vitae voluptas voluptatibus. Debitis eos nulla quia quis! Ad aliquam at fugit maxime obcaecati quae similique voluptatibus. Autem corporis eius harum iure magni praesentium sed voluptas! Alias aliquam aperiam atque eligendi fugiat mollitia nobis omnis, quam rem, tempore vel velit, veritatis! Ab, quos, velit. Autem distinctio eos et inventore itaque labore laborum laudantium minima modi natus nemo perspiciatis, qui repellendus sint suscipit temporibus veritatis. Ad consequatur expedita fuga hic id magni mollitia nobis quam. Aspernatur, in, tempora? Accusamus alias aliquam amet atque commodi culpa cum dolores ducimus enim excepturi impedit ipsum maiores maxime molestiae mollitia necessitatibus nemo nisi nulla odit perferendis quam, quas quibusdam quod repellat tempora totam voluptatem voluptatum. Distinctio dolor et harum nobis repellendus soluta? Alias animi assumenda aut blanditiis culpa cupiditate debitis dolorem dolores doloribus hic illum in, inventore iure iusto libero magni maiores maxime nam natus neque nihil nisi nostrum omnis optio pariatur porro quis quod rem rerum sapiente sint soluta temporibus vel velit veritatis vitae voluptas. Ab adipisci animi beatae blanditiis corporis, culpa doloremque, dolores laboriosam molestias nemo odit officiis perferendis praesentium, quasi quibusdam rem rerum sit soluta tempore ullam veniam vero voluptatem. A aspernatur assumenda dolore earum ipsam libero nam natus nisi, nostrum nulla numquam placeat porro repellendus sit sunt. Hic illo libero modi possimus sequi similique sit vero. Consectetur consequuntur, deserunt eveniet ex facilis hic id impedit ipsa magni, maxime neque nisi optio quasi repudiandae saepe veniam veritatis? A ab assumenda consequuntur cum cumque ducimus ea ipsam iste, modi officia optio porro provident, quaerat quasi quisquam quod recusandae repellendus tempora totam vel! A consequuntur culpa inventore necessitatibus, pariatur ratione repudiandae. Alias amet atque autem ex facere illo magnam, obcaecati officia ratione vel. Animi architecto asperiores corporis laborum odit saepe sint sunt voluptatum. Dolorem, ducimus, veniam. Aliquam dolorem doloribus eius, enim quae totam? </p>
                </div>
            </div>
        </div>
    </section>
    <!-- Add more slides as needed -->
    <div class="container-fluid pricing-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card pricing-card shadow">
                        <div class="card-body">
                            <h5 class="card-title">Basic</h5>
                            <p class="card-text">৳. 00.00</p>
                            <p class="card-text text-success">Online Service</p>
                            <ul>
                                <li>Express Interests: 4 Times</li>
                                <li>Direct Messages 30 Times</li>
                                <li>Photo Gallery 4 Images</li>
                                <li>Duration 18 Days</li>
                                <!-- Add more features as needed -->
                            </ul>
                            <a href="#" class="btn btn-primary">Get This Package</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card pricing-card shadow">
                        <div class="card-body">
                            <h5 class="card-title">Pro</h5>
                            <p class="card-text">৳. 5000.00</p>
                            <p class="card-text text-success">Online Service</p>
                            <ul>
                                <li>Express Interests: 40 Times</li>
                                <li>Direct Messages 30 Times</li>
                                <li>Photo Gallery 4 Images</li>
                                <li>Duration 36 Days</li>
                                <!-- Add more features as needed -->
                            </ul>
                            <a href="#" class="btn btn-primary">Get This Package</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card pricing-card shadow">
                        <div class="card-body">
                            <h5 class="card-title">Premium</h5>
                            <p class="card-text">৳. 15000.00</p>
                            <p class="card-text text-success">Online & Offline Service</p>

                            <ul>
                                <li>Express Interests: 400 Times</li>
                                <li>Direct Messages 300 Times</li>
                                <li>Photo Gallery 4 Images</li>
                                <li>Duration 180 Days</li>
                                <!-- Add more features as needed -->
                            </ul>
                            <a href="#" class="btn btn-primary">Get This Package</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('custom-scripts')
    <script>
        $(document).ready(function(){
            $(".owl-carousel1").owlCarousel({
                loop:true,
                margin:10,
                autoplay:true, // Add autoplay option
                autoplayTimeout:5000,
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:1
                    },
                    1000:{
                        items:1
                    }
                }
            });

            $(".owl-carousel2").owlCarousel({
                loop:true,
                margin:10,
                autoplay:true, // Add autoplay option
                autoplayTimeout:5000,
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:2
                    },
                    1000:{
                        items:4
                    }
                }
            });
        });
    </script>
@endsection
