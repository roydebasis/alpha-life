@extends('frontend.layouts.app')

@section('title') Claim Details @endsection

@section('content')
    <x-page-header pageTitle="Claim Details"/>

    <section class="hero-block-v1 section-padding">
        <div class="container">
            <div class="row" style="margin-bottom: 20px;">
                <div class="col-md-6">
                    <h4 style="font-weight: 600;">Date:  <span style="font-weight: normal;">{{ date('d M, Y', strtotime($$module_name_singular->date)) }}</span></h4>
                </div>
                <div class="col-md-6">
                    <h4 style="font-weight: 600;">Claim Category:  <span style="font-weight: normal;">{{ $$module_name_singular->category }}</span></h4>

                </div>
            </div>

            <div class="row" style="margin-bottom: 20px;">
                <div class="col-md-12">
                    {!! $$module_name_singular->description !!}
                </div>
            </div>

            @if($$module_name_singular->check_image)
                <div class="row" style="margin-bottom: 60px;">
                    <div class="col-md-12" style="text-align: center;">
                        <img src="{{ asset($$module_name_singular->check_image) }}" class="img-thumbnail"/>                    </div>
                </div>
            @endif
            @isset($$module_name_singular)
                <div class="row" >
                    <div class="col-md-12">
                        <div class="row">
                            @foreach($$module_name_singular->photos as $photo)
                                <div class="col-md-6 mb-20">
                                    <img src="{{ asset($photo->url) }}" class="img-thumbnail" style="width: 600px; height: 500px;"/>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endisset
        </div><!-- /.container -->
    </section>
@endsection

@push('after-styles')
    <style>
        .mb-20{
            margin-bottom: 20px;
        }
        @media (min-width: 786px) {
            .album-thumb {
                height: 150px;
                width: 100%;
                object-fit: cover;
            }
        }
    </style>
@endpush
