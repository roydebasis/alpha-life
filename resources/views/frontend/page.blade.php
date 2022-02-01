@extends('frontend.layouts.app')

@section('title') {{ $content->name }} @endsection

@section('content')
    <x-page-header pageTitle="{{ $content->name }}"/>
    <section class="service-section-v3">
        <div class="container">
            <div class="row" style="padding-top: 20px; padding-bottom: 20px;">
                <div class="col-md-12 service-box-container">

                    <div style="border-bottom-right-radius: 50px; border-top-left-radius: 50px; overflow: hidden; background-color: white; border-left: 1px solid #2a2a86; border-right: 1px solid #2a2a86; border-bottom: 1px solid #2a2a86;">
                        @if($content->featured_image)
                            <div style="border-top-left-radius: 50px; overflow: hidden;">
                                <img style="display: block; max-width: 100%; height: auto;" src="{{ url($content->featured_image) }}">
                            </div>
                        @endif
                        <div class="service-box">
                            {!! $content->content !!}
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </section>
@endsection
