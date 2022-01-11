@extends('frontend.layouts.app')

@section('title') {{ __("Posts") }} @endsection

@section('content')

    <!-- page-title-section start -->
    <section class="page-title-section about-us-one" data-stellar-background-ratio="0.1">
        <div class="container">
            <div class="page-header text-center">
                <h1>Recent News</h1>
            </div>
        </div>
    </section>
    <!-- page-title-section end -->


    <!-- Recent News Start-->
    <section class="blog-section blog-grid v2 ptb-90">
        <div class="container">
            <div class="row">
                <div id="blogGrid">
{{--                    @php--}}
{{--                        dd($$module_name);--}}
{{--                    @endphp--}}

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
{{--                    <div class="col-xs-12 col-sm-6 col-md-4 blog-grid-item">--}}
{{--                        <article class="post-wrapper"--}}
{{--                                 style="border-top-left-radius: 50px; border-bottom-right-radius: 50px;">--}}
{{--                            <header class="featured-wrapper">--}}

{{--                                <a href="#" class="author"><img src="assets/images/blog/blog-three/author-1.jpg"--}}
{{--                                                                alt=""></a>--}}
{{--                                <a href="#"><img src="assets/images/blog/blog-three/blog-2.jpg" class="img-responsive "--}}
{{--                                                 alt="Image"--}}
{{--                                                 style="border-top-left-radius: 50px; border-bottom-right-radius: 50px; border: 1px solid #172a52  ;"></a>--}}

{{--                                <div class="entry-meta clearfix">--}}
{{--                                    <ul>--}}
{{--                                        <li><span class="post-date"><a href="#"><i class="fa fa-calendar"></i> 25 Aug--}}
{{--                                                    2015</a></span></li>--}}

{{--                                    </ul>--}}
{{--                                </div><!-- /.entry-meta -->--}}
{{--                            </header><!-- /.post-thumbnail -->--}}

{{--                            <div class="blog-content">--}}
{{--                                <header class="entry-header">--}}
{{--                                    <h2 class="entry-title"><a href="#">৬ষ্ঠ এবং ২০২১ সালের ৪র্থ শরিয়াহ্ মিটিং</a></h2>--}}
{{--                                </header><!-- /.entry-header -->--}}

{{--                                <div class="entry-content">--}}
{{--                                    <p>আলহামদুলিল্লাহ, অদ্য ২৭/১২/২০২১ ইং আলফা ইসলামী লাইফ ইন্সুরেন্স লিমিটেড এর ৬ষ্ঠ--}}
{{--                                        এবং ২০২১ সালের ৪র্থ শরিয়াহ্ মিটিং কোম্পানীর প্রধান কার্যালয়ের বোর্ড রুমে--}}
{{--                                        অনুষ্ঠিত হয়। </p>--}}

{{--                                    <div class="readmore">--}}
{{--                                        <a href="#">Readmore</a>--}}
{{--                                    </div>--}}

{{--                                </div><!-- /.entry-content -->--}}


{{--                            </div><!-- /.blog-content -->--}}
{{--                        </article>--}}
{{--                    </div><!-- /.col-md-4 -->--}}

{{--                    <div class="col-xs-12 col-sm-6 col-md-4 blog-grid-item">--}}
{{--                        <article class="post-wrapper"--}}
{{--                                 style="border-top-left-radius: 50px; border-bottom-right-radius: 50px;">--}}
{{--                            <header class="featured-wrapper">--}}

{{--                                <a href="#" class="author"><img src="assets/images/blog/blog-three/author-1.jpg"--}}
{{--                                                                alt=""></a>--}}
{{--                                <a href="#"><img src="assets/images/blog/blog-three/blog-3.jpg" class="img-responsive "--}}
{{--                                                 alt="Image"--}}
{{--                                                 style="border-top-left-radius: 50px; border-bottom-right-radius: 50px; border: 1px solid #172a52  ;"></a>--}}

{{--                                <div class="entry-meta clearfix">--}}
{{--                                    <ul>--}}
{{--                                        <li><span class="post-date"><a href="#"><i class="fa fa-calendar"></i>--}}
{{--                                                    17 December, 2021</a></span></li>--}}

{{--                                    </ul>--}}
{{--                                </div><!-- /.entry-meta -->--}}
{{--                            </header><!-- /.post-thumbnail -->--}}

{{--                            <div class="blog-content">--}}
{{--                                <header class="entry-header">--}}
{{--                                    <h2 class="entry-title"><a href="#">Kick-Off Training Program for Unit Manager’s--}}
{{--                                        </a></h2>--}}
{{--                                </header><!-- /.entry-header -->--}}

{{--                                <div class="entry-content">--}}
{{--                                    <p>Alhamdulillah! Kick-Off Training Program for Unit Manager’s (Rangpur Territory)--}}
{{--                                        Successfully completed today (17-12-21)</p>--}}

{{--                                    <div class="readmore">--}}
{{--                                        <a href="#">Readmore</a>--}}
{{--                                    </div>--}}

{{--                                </div><!-- /.entry-content -->--}}


{{--                            </div><!-- /.blog-content -->--}}
{{--                        </article>--}}
{{--                    </div><!-- /.col-md-4 -->--}}
                </div>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>

    <!-- Recent News end-->

@endsection
