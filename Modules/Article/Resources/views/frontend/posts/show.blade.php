@extends('frontend.layouts.app')

@section('title') {{ $$module_name_singular->name }} @endsection

@section('content')
    <x-page-header pageTitle="{{ $$module_name_singular->name }}"/>
    <section class="service-section-v3">
        <div class="container">
            <div class="row" style="padding-top: 20px; padding-bottom: 20px;">
                <div class="col-md-12 service-box-container">

                    <div style="border-bottom-right-radius: 50px; border-top-left-radius: 50px; overflow: hidden; background-color: white; border-left: 1px solid #2a2a86; border-right: 1px solid #2a2a86; border-bottom: 1px solid #2a2a86;">
                        @if($$module_name_singular->featured_image)
                            <div style="border-top-left-radius: 50px; overflow: hidden;">
                                <img style="display: block; max-width: 100%; height: auto;" src="{{ url($$module_name_singular->featured_image) }}">
                            </div>
                        @endif
                        <div class="service-box">
                            {!! $$module_name_singular->content !!}
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </section>
@endsection
