@extends('frontend.layouts.app')

@section('title') {{ $module_action }} {{ $module_title }} @endsection

{{--@section('breadcrumbs')--}}
{{--<x-backend-breadcrumbs>--}}
{{--    <x-backend-breadcrumb-item route='{{route("backend.$module_name.index")}}' icon='{{ $module_icon }}' >--}}
{{--        {{ $module_title }}--}}
{{--    </x-backend-breadcrumb-item>--}}
{{--    <x-backend-breadcrumb-item type="active">{{ $module_action }}</x-backend-breadcrumb-item>--}}
{{--</x-backend-breadcrumbs>--}}
{{--@endsection--}}

@section('content')

    <!-- page-title-section start -->
    <section class="page-title-section about-us-one" data-stellar-background-ratio="0.1">
        <div class="container">
            <div class="page-header text-center">
                <h1>{{ $$module_name_singular->name }}</h1>
            </div>
        </div>
    </section>
    @if($$module_name_singular->layout == 1)
        <!-- page-title-section end -->
        <!-- page-title-section start -->
        <section class="service-section-v3 section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">

                    </div>
                    <div class="col-sm-6">
                        <div class="team-member">
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
                        </div><!-- /.team-member -->

                    </div><!-- /.team-member -->

                    <div class="col-sm-3">

                    </div>
                </div>

                <div class="row">

                    @foreach($members as $member)
                        <div class="col-sm-4">
                            <div class="team-member">
                                <div class="team-thumb">
                                    <div class="thumb-overlay"></div>
                                    @if($member->image)
                                        <img src="{{asset($member->image)}}" alt="" class="bod">
                                    @else
                                        <img src="{{asset('assets/images/team/placeMan.jpg')}}" alt="" class="bod">
                                    @endif

                                    <div class="member-info text-center">
                                        <h3>{{ $member->name }}</h3>

                                        <span class="title">{{ $member->designation }}</span>
                                        <ul class="social-link list-inline">
                                            <li><a href="{{ 'mailto:'. $member->email }}" target="_blank"><i
                                                        class="fa fa-envelope"></i></a></li>
                                            <li><a href="{{ $member->facebook?? '#' }}" @if($member->facebook)target="_blank" @endif><i class="fa fa-facebook"></i></a></li>

                                        </ul>
                                    </div>
                                    <span class="taemTitle">{{ $member->name }}</span>

                                </div>
                            </div><!-- /.team-member -->

                        </div><!-- /.team-member -->
                    @endforeach


                </div>

                <div class="team-pagination">
                    {!! $members->links() !!}
                </div>



            </div><!-- /.container -->
        </section>
        <!-- page-title-section end -->

    @else
        <!-- page-title-section start -->
        <section class="service-section-v3 section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">

                    </div>
                    <div class="col-sm-4">
                        <div class="team-member">
                            <div class="team-thumb">
                                <div class="thumb-overlay"></div>
                                @if($first_member->image)
                                    <img src="{{asset($first_member->image)}}" alt="">
                                @else
                                    <img src="{{asset('assets/images/team/placeMan.jpg')}}" alt="">
                                @endif

                                <div class="member-info text-center">
                                    <h3>{{ $first_member->name }}</h3>

                                    <span class="title">{{ $first_member->designation }}</span>
                                    <ul class="social-link list-inline">
                                        <li><a href="{{ 'mailto:'. $first_member->email }}" target="_blank"><i class="fa fa-envelope"></i></a></li>
                                        <li><a href="{{ $first_member->facebook ?? '#' }}" @if($first_member->facebook)target="_blank" @endif><i class="fa fa-facebook"></i></a></li>
                                    </ul>
                                </div>
                                <span class="taemTitle">{{ $first_member->name }}</span>
                            </div>
                        </div><!-- /.team-member -->

                    </div><!-- /.team-member -->

                    <div class="col-sm-4">

                    </div>
                </div>

                <div class="row">
                    @foreach($members as $member)
                        <div class="col-sm-3">
                        <div class="team-member">
                            <div class="team-thumb">
                                <div class="thumb-overlay"></div>
                                @if($member->image)
                                    <img src="{{asset($member->image)}}" alt="">
                                @else
                                    <img src="{{asset('assets/images/team/placeMan.jpg')}}" alt="">
                                @endif

                                <div class="member-info text-center">
                                    <h3>{{ $member->name }}</h3>

                                    <span class="title">{{ $member->designation }}</span>
                                    <ul class="social-link list-inline">
                                        <li><a href="{{ 'mailto:'. $member->email }}" target="_blank"><i class="fa fa-envelope"></i></a></li>
                                        <li><a href="{{ $member->facebook?? '#' }}" @if($member->facebook)target="_blank" @endif><i class="fa fa-facebook"></i></a></li>
                                    </ul>
                                </div>
                                <span class="taemTitle">{{ $member->name }}</span>

                            </div>
                        </div><!-- /.team-member -->

                    </div><!-- /.team-member -->
                    @endforeach
                </div>
            </div><!-- /.container -->
        </section>

        <!-- page-title-section end -->
    @endif

@endsection
