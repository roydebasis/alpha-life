@extends('frontend.layouts.app')

@section('title') {{ __($module_title) }} @endsection

@section('content')
     <x-page-header pageTitle="Insurance FAQ"/>
    <section class="recent-project-section section-padding">
        <div class="container">
            <div class="text-center">
                <img src="assets/images/FAQ.jpg" class="img-responsive">
            </div>
            <br><br>
            @if(!$$module_name->isEmpty())
            <div class="row">
                @foreach ($$module_name as $$module_name_singular)
                    <div class="col-sm-4 single-line" title="{{ $$module_name_singular->title }}">
                        {{ $$module_name_singular->title }}
                        <div class="video-wrap">
                            <iframe width="260" height="155" src="https://www.youtube.com/embed/{{get_video_id($$module_name_singular->url)}}"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col-12" style="margin-bottom: 50px">
                    <div class="team-pagination">
                        {!! $$module_name->appends(request()->query())->links() !!}
                    </div>
                </div>
            </div>
            @else
                <p>No FAQ Found</p>
            @endif
        </div>
    </section>
@endsection
