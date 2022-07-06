<header>
    <div id="sticky-sidebar">
        <ul>
            <li>
                <a href="http://alphalife.com.bd/page/premium-calculator" class="text-center" data-toggle="tooltip"
                   data-placement="left"
                   title="Premium Calculator">
                    <i class="fa fa-calculator"></i>
                </a>
            </li>

            <li>
                <a href="javascript:void(0)" class="text-center" data-toggle="tooltip" data-placement="left"
                   title="My Transactions">
                    <i class="fa fa-money"></i>
                </a>
            </li>
            <li>
                <a href="javascript:void(0)" class="text-center" data-toggle="tooltip" data-placement="left"
                   title="Policy Information">
                    <i class="fa fa-book"></i>
                </a>
            </li>
            <li>
                <a href="javascript:void(0)" class="text-center" data-toggle="tooltip" data-placement="left"
                   title="Book an Appointment">
                    <i class="fa fa-calendar" aria-hidden="true"></i>
                </a>
            </li>

            <li>
                <a href="javascript:void(0)" class="text-center" data-toggle="tooltip" data-placement="left"
                   title="Preferred Hospitals">
                    <i class="fa fa-hospital-o" aria-hidden="true"></i>
                </a>
            </li>
        </ul>
    </div>
    <!-- Top Nav Start -->
    <section class="case-study-section topbar">
        <div class="container-fluid">
            <div class="row equal">
                <div class="col-sm-9 no-padding">
                    <div class="topNavLeft">
                        <marquee direction="left" onmouseover="this.stop();" onmouseout="this.start();">
                            @if(!empty($bulletins))
                                @foreach($bulletins as $bulletin)
                                    {{ $bulletin->name }}
                                @endforeach
                            @else
                                Please add bulletin text to show here
                            @endif
                        </marquee>
                    </div>
                </div>
                <div class="col-sm-3 no-padding">
                    <div class="topNavRight">
                        <ul class="top-social-icons">
                            @if(\App\Models\Setting::has('linkedin_url'))
                            <li>
                                <a href="{{ \App\Models\Setting::get('linkedin_url') }}" target="_blank">
                                    <img src="{{ asset('assets/images/ico/in.png') }}">
                                </a>
                            </li>
                            @endif
                            @if(\App\Models\Setting::has('twitter_url'))
                            <li>
                                <a href="{{ \App\Models\Setting::get('twitter_url') }}" target="_blank">
                                    <img src="{{ asset('assets/images/ico/twitter.png') }}">
                                </a>
                            </li>
                            @endif
                            @if(\App\Models\Setting::has('facebook_url'))
                            <li>
                                <a href="{{ \App\Models\Setting::get('facebook_url') }}" target="_blank">
                                    <img src="{{ asset('assets/images/ico/facebook.png') }}">
                                </a>
                            </li>
                            @endif
                            @if(\App\Models\Setting::has('instagram_url'))
                            <li>
                                <a href="{{ \App\Models\Setting::get('instagram_url') }}" target="_blank">
                                    <img src="{{ asset('assets/images/ico/ist.png') }}">
                                </a>
                            </li>
                            @endif
                            @if(\App\Models\Setting::has('youtube_url'))
                            <li>
                                <a href="{{ \App\Models\Setting::get('youtube_url') }}" target="_blank">
                                    <img src="{{ asset('assets/images/ico/u.png') }}">
                                </a>
                            </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Top Nav Start -->

    <!-- Navigation start -->
    <nav class="navbar navbar-custom tt-default-nav" role="navigation">
        <div class="container">

            <div class="search-box-wrap pull-right hidden-sm hidden-xs">
                <div class="search-icon"></div>
                <input id="search-box" placeholder="Search">
            </div>

            <div class="navbar-header">
                <button type="button" id="btn-nav-toggler" class="navbar-toggle" data-toggle="collapse"
                        data-target="#custom-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">
                    <img src="{{ url('assets/images/logoNew.png') }}" class="h-sm-100" alt="Alpha Islami Life Insurance">
                </a>
            </div>

            @php
                $public_menu = \WPMenu::getByName('Main Menu');
            @endphp

            {{--  TODO: Refactor menu generation to recursive to get submenus --}}

            @if(!empty($public_menu))
            <div class="collapse navbar-collapse" id="custom-collapse">

                <ul class="nav navbar-nav navbar-right">
                    @foreach($public_menu as $menu)
                        {{--  first level dropdown--}}
                        @if($menu['child'])
                            <li class="dropdown">
                                <a href="avascript:void(0)" class="dropdown-toggle menu-item" data-toggle="dropdown" role="button"
                                   aria-haspopup="true" aria-expanded="false">{{ $menu['label'] }}</a>
                                <ul class="dropdown-menu">
                                    @foreach( $menu['child'] as $child )
                                        {{--  second level dropdown--}}
                                        @if($child['child'])
                                            <li class="dropdown">
                                                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">{{ $child['label'] }}</a>
                                                <ul class="dropdown-menu">
                                                    @foreach( $child['child'] as $subChild )
                                                        {{--  third level dropdown--}}
                                                        @if($subChild['child'])
                                                            <li class="dropdown">
                                                                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">{{ $subChild['label'] }}</a>
                                                                <ul class="dropdown-menu">
                                                                    @foreach( $subChild['child'] as $thirdLevel )
                                                                        <li><a href="{{ generate_page_link($thirdLevel['link']) }}">{{ $thirdLevel['label'] }}</a></li>
                                                                    @endforeach
                                                                </ul>
                                                            </li>
                                                        @else
                                                            <li><a href="{{ generate_page_link($subChild['link']) }}">{{ $subChild['label'] }}</a></li>
                                                        @endif
                                                    @endforeach
                                                </ul>
                                            </li>
                                        @else
                                            <li><a href="{{ generate_page_link($child['link']) }}">{{ $child['label'] }}</a></li>
                                        @endif
                                    @endforeach
                                </ul>
                            </li>
                        @else
                            <li><a href="{{ generate_page_link($menu['link']) }}" class="menu-item">{{ $menu['label']  }}</a></li>
                        @endif
                    @endforeach
                    @auth
                        <li class="dropdown">
                            <a href="avascript:void(0)" class="dropdown-toggle menu-item" data-toggle="dropdown" role="button"
                               aria-haspopup="true" aria-expanded="false">Account</a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ generate_dashboard_link() }}">My Account</a></li>
                                <li>
                                    <a href="javascript:;" onclick="event.preventDefault(); document.getElementById('front-logout-form').submit();">Logout</a>
                                    <form id="front-logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;"> <?php echo csrf_field(); ?> </form>
                                </li>
                            </ul>
                        </li>
                    @else
                        <li class="dropdown">
                            <a href="avascript:void(0)" class="dropdown-toggle menu-item" data-toggle="dropdown" role="button"
                               aria-haspopup="true" aria-expanded="false">Sign Up</a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ generate_page_link('/signup/employee') }}">Employee</a></li>
                                <li><a href="{{ generate_page_link('/signup/policy-holder') }}">Policy Holder</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="avascript:void(0)" class="dropdown-toggle menu-item" data-toggle="dropdown" role="button"
                               aria-haspopup="true" aria-expanded="false">Sign In</a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ generate_page_link('/login/employee') }}">Employee</a></li>
                                <li><a href="{{ generate_page_link('/login/policy-holder') }}">Policy Holder</a></li>
                            </ul>
                        </li>
                    @endauth
                    <li>&nbsp;</li>
                </ul>
            </div>
            @else
                <p class="text-warning"><a href="{{ route('backend.menuGenerator') }}">Create Menu</a></p>
            @endif
        </div>
    </nav>
</header>
