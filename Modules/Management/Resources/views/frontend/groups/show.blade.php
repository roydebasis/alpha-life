@extends('frontend.layouts.app')

@section('title') {{ $module_action }} {{ $module_title }} @endsection


@section('content')

    <!-- page-title-section start -->
    <section class="page-title-section about-us-one" data-stellar-background-ratio="0.1">
        <div class="container">
            <div class="page-header text-center">
                <h1>{{ $$module_name_singular->name }}</h1>
            </div>
        </div>
    </section>
    {{-- @if($$module_name_singular->layout == 1) --}}
        <!-- page-title-section start -->
    <section class="service-section-v3 section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-4"></div>
                <div class="col-sm-4">
                    <div class="team-member">
                        @if($first_member)
                            <div class="team-thumb">
                                <div class="thumb-overlay"></div>
                                @if($first_member->image)
                                    <img src="{{asset($first_member->image)}}" alt="" class="bod">
                                @else
                                    <img src="{{asset('assets/images/team/placeMan.jpg')}}" alt="" class="bod">
                                @endif
                                <div class="member-info text-center">
                                    <h3>{{ $first_member->name }}</h3>
                                    <span class="title">{{ $first_member->designation }}</span>
                                    <ul class="social-link list-inline">
                                        <li><a href="{{ 'mailto:'. $first_member->email }}" target="_blank"><i
                                                    class="fa fa-envelope"></i></a></li>
                                        <li><a href="{{ $first_member->facebook ?? '#' }}" @if($first_member->facebook)target="_blank" @endif><i class="fa fa-facebook"></i></a></li>
                                    </ul>
                                </div>
                                <span class="taemTitle">{{ $first_member->name }}</span>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="col-sm-4"> </div>
            </div>
        </div>

        <div class="container">
            @foreach($members as $membersChunk)
            <div class="box">
                <div class="box-row">
                    @foreach($membersChunk as $member)
                    <div class="box-cell">
                        <div class="team-member">
                            <div class="team-thumb">
                                <div class="thumb-overlay"></div>
                                @if($member['image'])
                                    <img src="{{asset($member['image'])}}" alt="" class="bod">
                                @else
                                    <img src="{{asset('assets/images/team/placeMan.jpg')}}" alt="" class="bod">
                                @endif

                                <div class="member-info text-center">
                                    <h3>{{ $member['name'] }}</h3>

                                    <span class="title">{{ $member['designation'] }}</span>
                                    <ul class="social-link list-inline">
                                        <li><a href="{{ 'mailto:'. $member['email'] }}" target="_blank"><i
                                                    class="fa fa-envelope"></i></a></li>
                                        <li><a href="{{ $member['facebook']?? '#' }}" @if($member['facebook'])target="_blank" @endif><i class="fa fa-facebook"></i></a></li>

                                    </ul>
                                </div>
                                <!-- <span class="taemTitle">Mr. Enthekhabul Hamid</span> -->

                            </div>
                        </div>
                    </div>
                    <div class="box-cell box2" style="margin-right: 10px;">
                        <h3> {{ $member['name'] }}</h3>
                        {{ $member['designation'] }}
                    </div>

                        @if(count($membersChunk) == 1)
                            <div class="box-row">

                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
            @endforeach
        </div>
        <!-- /.container -->
    </section>

    <!-- page-title-section end -->

@endsection
