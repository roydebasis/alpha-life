@extends('frontend.layouts.app')

@section('title') {{ __("Photos") }} @endsection

@section('content')
    <x-page-header pageTitle="Album" />
    <section class="service-section-v3 section-padding ">
        <div class="container">
            <div class="portfolio-container text-center">
                <ul id="portfolio-grid" class="four-column hover-two">
                    @foreach ($$module_name as $$module_name_singular)

                        <li class="portfolio-item" >
                            <a href="{{route("frontend.$module_name.show", $$module_name_singular)}}" data-method="GET">
                                <div>
                                    <img src="{{ $$module_name_singular->thumbnail }}" class="img-thumbnail" alt="">
                                    <div class="p-4 text-left album-summary">
                                        <p class="title">{{ $$module_name_singular->title }}</p>
                                        <p class="date">
                                            @isset($$module_name_singular->date){{ date('j F Y', strtotime($$module_name_singular->date)) }}@endisset
                                            @isset($$module_name_singular->place), {{ ucfirst($$module_name_singular->place) }} @endisset
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </section>
@endsection
@push('after-styles')
    <style>
        .album-summary .date{
            font-size: 12px;
            line-height: 1;
        }
        .album-summary .title {
            font-weight: 500;
            margin-bottom: 0;
        }
    </style>
@endpush
