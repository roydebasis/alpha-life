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
                            <img src="{{asset($first_member->image)}}" alt="" class="bod">

                            <div class="member-info text-center">
                                <h3>{{ $first_member->name }}</h3>

                                <span class="title">{{ $first_member->designation }}</span>
                                <ul class="social-link list-inline">
                                    <li><a href="{{ 'mailto:'. $first_member->email }}" target="_blank"><i
                                                class="fa fa-envelope"></i></a></li>
                                    <li><a href="{{ $first_member->facebook }}"><i class="fa fa-facebook"></i></a></li>

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
                                <img src="{{asset($member->image)}}" alt="" class="bod">

                                <div class="member-info text-center">
                                    <h3>{{ $member->name }}</h3>

                                    <span class="title">{{ $member->designation }}</span>
                                    <ul class="social-link list-inline">
                                        <li><a href="{{ 'mailto:'. $member->email }}" target="_blank"><i
                                                    class="fa fa-envelope"></i></a></li>
                                        <li><a href="{{ $member->facebook }}"><i class="fa fa-facebook"></i></a></li>

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

@endsection
