@extends('frontend.layouts.app')

@section('title') {{ $$module_name_singular->name }} @endsection

@section('content')
    <x-page-header pageTitle="Claim Details"/>

    <section class="hero-block-v1 section-padding">
        <div class="container">
            <div class="row" style="margin-bottom: 20px;">
                <div class="col-md-12">
                    <h4>Date:  <span>{{ date('d M, Y', strtotime($$module_name_singular->date)) }}</span></h4>
                </div>
            </div>
            <div class="row" style="margin-bottom: 20px;">
                <div class="col-md-12">
                    <h4>Description </h4>
                    {!! $$module_name_singular->description !!}

                </div>
            </div>
            <div class="row" style="margin-bottom: 40px;">
                <div class="col-md-12">
                    <h4>Check Image </h4>
                    <image src="{{ asset($$module_name_singular->check_image) }}" class="img-thumbnail"></image>

                </div>
            </div>
            @isset($$module_name_singular)
                <div class="row" style="margin-bottom: 20px; margin-left: 0;">
                    <div class="col-md-12">
                        <h4>Album </h4>
                        <div class="row" style="display: flex;">
                            @foreach($$module_name_singular->photos as $photo)
                                <div class="col-4" style="margin: 10px">
                                    <image src="{{ asset($photo->url) }}" class="img-thumbnail"></image>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endisset
        </div><!-- /.container -->
    </section>
@endsection
