<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" style="width: 100%;">
    <a class="navbar-brand" href="/">
        <img width="40" border="0" alt="Bangladeshi Matrimonials" title="Bangladeshi Matrimonials" id="domain_title" src="https://imgs.bangladeshimatrimony.com/cbsimages/hp_new/bangladeshi_logo.svg">
        <span class="logo-bangladeshi-title">
					Eternal <span class="logo-bangladeshi-title1">Match</span>  Site
				</span>
    </a>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">

        </ul>
        <form class="form-inline my-2 my-lg-0">
            @auth
            <span  class="text-primary">Name: {{Auth::user()->name}}</span><a href="{{route('userProfile.details',['id'=>Auth::user()->id])}}" class="btn btn-outline-primary mx-2"> <i class="fa fa-user"></i> view profile</a>
            <a href="{{route('create.member')}}" class="btn btn-outline-success mx-2"> <i class="fa fa-plus"></i> Add Member</a>
            <a  href="{{route('all.members')}}" class="btn btn-outline-warning mx-2"><i class="fa fa-users"> </i> All Members </a>
            <a href="{{ route('logout') }}" class="btn btn-outline-danger mx-2 " type="submit">Logout <i class="fa fa-arrow-right" aria-hidden="true"></i> </a>
            @else
            <a href="{{ route('register') }}" class="btn btn-outline-danger my-2 mx-2 my-sm-0" type="submit"><i class="fa fa-users" aria-hidden="true"></i> Register</a>
            <a href="{{route('login')}}" class="btn btn-outline-primary mx-2 " type="submit">Login <i class="fa fa-arrow-right" aria-hidden="true"></i> </a>
            @endauth
        </form>
    </div>
</nav>
