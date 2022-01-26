@extends('frontend.layouts.app')

@section('title') {{ __("Videos") }} @endsection

@section('content')

    <!-- page-title-section start -->
    <section class="page-title-section about-us-one" data-stellar-background-ratio="0.1">
        <div class="container">
            <div class="page-header text-center">
                <h1>Video Gallery</h1>
            </div>
        </div>
    </section>
    <!-- page-title-section end -->

    <!-- page-title-section start -->
    <section class="service-section-v3 section-padding ">
        <div class="container">
            <div class="row">
                @foreach ($$module_name as $$module_name_singular)
                    <div class="col-sm-4">
                        {{ $$module_name_singular->name }}
                        <div class="video-wrap">
                            <iframe src="{{ $$module_name_singular->url }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                @endforeach

            </div>

        </div><!-- /.container -->
    </section>
    <!-- page-title-section end -->

@endsection
