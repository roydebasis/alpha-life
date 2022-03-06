@extends('frontend.layouts.app')

@section('title') {{ __("Photos") }} @endsection

@section('content')

    <!-- page-title-section start -->
    <section class="page-title-section about-us-one" data-stellar-background-ratio="0.1">
        <div class="container">
            <div class="page-header text-center">
                <h1>Album</h1>
            </div>
        </div>
    </section>
    <!-- page-title-section end -->


    <!-- page-title-section start -->
    <section class="service-section-v3 section-padding ">
        <div class="container">

            <div class="portfolio-container text-center">
                <!-- <ul id="filter" class="list-inline">
                    <li class="active" data-group="all">All</li>
                    <li data-group="design">Design</li>
                    <li data-group="web">Web</li>
                    <li data-group="interface">Interface</li>
                    <li data-group="identety">Identity</li>
                </ul> -->

                <ul id="portfolio-grid" class="four-column hover-two">
                    @foreach ($$module_name as $$module_name_singular)


                        <li class="portfolio-item" >
                            <a href="{{route("frontend.$module_name.show", $$module_name_singular)}}" data-method="GET">
                                <div>
{{--                                    <div class="tt-overlay"></div>--}}
                                    <img src="{{ $$module_name_singular->thumbnail }}" class="img-thumbnail" alt="">
                                    <div class="p-4 text-left">
                                        <p>Title: {{ $$module_name_singular->title }}</p>
                                        <p>Date: {{ date('j F, Y', strtotime($$module_name_singular->date)) }}</p>
                                        <p>Place: {{ $$module_name_singular->place }}</p>
                                    </div>
                                </div><!-- /.recent-project -->
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div><!-- portfolio-container -->
        </div><!-- /.container -->
    </section>
    <!-- page-title-section end -->

@endsection
