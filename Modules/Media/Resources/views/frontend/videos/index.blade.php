@extends('frontend.layouts.app')

@section('title') {{ __("Videos") }} @endsection

@section('content')

<!-- page-title-section start -->
<section class="page-title-section about-us-one" data-stellar-background-ratio="0.1">
    <div class="container">
        <div class="page-header text-center">
            <h1>Videos</h1>
        </div>
    </div>
</section>

<section class="recent-project-section section-padding">
    <div class="container">
        @if($$module_name->isNotEmpty())
            <div class="row">
                @foreach ($$module_name as $$module_name_singular)
                <div class="col-sm-4 single-line">
                    {{ $$module_name_singular->name }}
                    <div class="video-wrap">
                        <iframe width="260" height="180" src="https://www.youtube.com/embed/{{get_video_id($$module_name_singular->url)}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="col-12 text-center mb-4">
                {{ $$module_name->links() }}
            </div>
        @else
            <p class="text-center">No Video found</p>
        @endif
    </div>
</section>

@endsection
