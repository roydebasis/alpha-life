@extends('frontend.layouts.app')

@section('title') {{ __("Photos") }} @endsection

@section('content')
    <x-page-header pageTitle="Album" />
    <section class="section-padding albums">
        <div class="container">
            <div class="portfolio-container text-center">
                <ul id="portfolio-grid" class="four-column hover-two">
                    @foreach ($$module_name as $$module_name_singular)
                        <li class="portfolio-item" >
                            <a href="{{route("frontend.$module_name.show", $$module_name_singular)}}">
                                    <div class="album-featured-photo">
                                        <img src="{{ $$module_name_singular->thumbnail }}" class="img-thumbnail" alt="{{ $$module_name_singular->title }}">
                                    </div>
                                    <div class="p-4 text-left album-summary">
                                        <p class="title single-line" title="{{ $$module_name_singular->title }}">{{ $$module_name_singular->title }}</p>
                                        <p class="date">
                                            @isset($$module_name_singular->date){{ date('j F Y', strtotime($$module_name_singular->date)) }}@endisset
                                            @isset($$module_name_singular->place), {{ ucfirst($$module_name_singular->place) }} @endisset
                                        </p>
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
        .albums {
            margin-bottom: 80px;
        }
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
