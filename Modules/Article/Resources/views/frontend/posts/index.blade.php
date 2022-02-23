@extends('frontend.layouts.app')

@section('title') {{ __($module_title) }} @endsection

@section('content')
    <x-page-header pageTitle="Recent News"/>

    <!-- Recent News Start-->
    <section class="blog-section blog-grid v2 ptb-90">
        <div class="container">
            <div class="row">
                <div id="blogGrid">
                    @foreach ($$module_name as $$module_name_singular)
                    @php
                        $details_url = route("frontend.$module_name.show",[encode_id($$module_name_singular->id), $$module_name_singular->slug]);
                    @endphp
                    <div class="col-xs-12 col-sm-6 col-md-4 blog-grid-item">
                        <article class="post-wrapper"
                                 style="border-top-left-radius: 50px; border-bottom-right-radius: 50px;">
                            <header class="featured-wrapper">

                                <a href="{{$details_url}}" class="author"><img src="{{ asset('assets/images/blog/blog-three/author-1.jpg') }}"
                                                                alt=""></a>
                                <a href="{{$details_url}}"><img src="{{$$module_name_singular->featured_image}}" class="img-responsive "
                                                 alt="Image"
                                                 style="border-top-left-radius: 50px; border-bottom-right-radius: 50px; border: 1px solid #172a52  ;"></a>

                                <div class="entry-meta clearfix">
                                    <ul>
                                        <li>
                                            <span class="post-date"><a href="{{$details_url}}"><i class="fa fa-calendar"></i> {{ date_format($$module_name_singular->published_at, 'd F, Y') }}</a></span>
                                        </li>

                                    </ul>
                                </div><!-- /.entry-meta -->
                            </header><!-- /.post-thumbnail -->

                            <div class="blog-content">
                                <header class="entry-header">
                                    <h2 class="entry-title"><a href="{{$details_url}}">{{$$module_name_singular->name}}</a></h2>
                                </header><!-- /.entry-header -->

                                <div class="entry-content">
                                    <p>{{$$module_name_singular->intro}}</p>

                                    <div class="readmore">
                                        <a href="{{$details_url}}">Readmore</a>
                                    </div>

                                </div><!-- /.entry-content -->


                            </div><!-- /.blog-content -->
                        </article>
                    </div><!-- /.col-md-4 -->
                    @endforeach
                </div>
            </div><!-- /.row -->
            <div class="team-pagination">
                {!! $$module_name->links() !!}
            </div>
        </div><!-- /.container -->
    </section>

    <!-- Recent News end-->

@endsection
