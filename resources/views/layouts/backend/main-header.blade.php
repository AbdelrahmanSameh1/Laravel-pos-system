<!--=================================
    header start-->

<nav class="admin-header navbar navbar-default col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <!-- logo -->
    <div class="text-start navbar-brand-wrapper">
{{--        <a class="navbar-brand brand-logo" href="index.html"><img src="{{asset('backend/assets/images/logo-dark.png')}}" alt="" ></a>--}}
        <a class="navbar-brand brand-logo-mini" href="index.html"><img src="{{asset('backend/assets/images/logo-icon-dark.png')}}" alt=""></a>
    </div>
    <!-- Top bar left -->
    <ul class="nav navbar-nav me-auto">
        <li class="nav-item">
            <a id="button-toggle" class="button-toggle-nav inline-block ml-20 pull-left" href="javascript:void(0);"><i class="zmdi zmdi-menu ti-align-right"></i></a>
        </li>
        <li class="nav-item">
            <div class="search">
                <a class="search-btn not_click" href="javascript:void(0);"></a>
                <div class="search-box not-click">
                    <input type="text" class="not-click form-control" placeholder="Search" value="" name="search">
                    <button class="search-button" type="submit"> <i class="fa fa-search not-click"></i></button>
                </div>
            </div>
        </li>
    </ul>
    <!-- top bar right -->
    <ul class="nav navbar-nav ms-auto">



        <div class="dropdown show mb-1">


            <button type="button" class="btn btn-light btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true">

                @if(\Illuminate\Support\Facades\App::getLocale() == 'ar')
                    {{\Mcamara\LaravelLocalization\Facades\LaravelLocalization::getCurrentLocaleName()}}
                    <img src="{{\Illuminate\Support\Facades\URL::asset('backend/assets/images/flags/EG.png')}}" height="25" width="25" alt="">
                @else
                    {{\Mcamara\LaravelLocalization\Facades\LaravelLocalization::getCurrentLocaleName()}}
                    <img src="{{\Illuminate\Support\Facades\URL::asset('backend/assets/images/flags/US.png')}}" height="25" width="25" alt="">
                @endif
            </button>


            <div class="dropdown-menu">
                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                    <li>
                        <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                            {{ $properties['native'] }}
                        </a>
                    </li>
                @endforeach

            </div>





        </div>






        <li class="nav-item dropdown mr-30">
            <a class="nav-link nav-pill user-avatar" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                <img src="images/profile-avatar.jpg" alt="avatar">
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <div class="dropdown-header">
                    <h5 class="mt-0 mb-0">Michael Bean</h5>
                    <span>michael-bean@mail.com</span>
                </div>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#"><i class="text-secondary ti-reload"></i>Activity</a>
                <a class="dropdown-item" href="#"><i class="text-success ti-email"></i>Messages</a>
                <a class="dropdown-item" href="#"><i class="text-warning ti-user"></i>Profile</a>
                <a class="dropdown-item" href="#"><i class="text-dark ti-layers-alt"></i>Projects <span class="badge bg-info">6</span> </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#"><i class="text-info ti-settings"></i>Settings</a>
{{--                <a class="dropdown-item" href="{{route('logout')}}"><i class="text-danger ti-unlock"></i>Logout</a>--}}
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="document.getElementById('logout-form').getAttribute('action')"><i class="text-danger ti-unlock"></i>Logout</a>
                <form id="logout-form" action="{{ \LaravelLocalization::localizeURL('/logout') }}" method="POST" style="display: none">
                    @csrf

                </form>
            </div>
        </li>
    </ul>
</nav>
<!--=================================
header End-->
