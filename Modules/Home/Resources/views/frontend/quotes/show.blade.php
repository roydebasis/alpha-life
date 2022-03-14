@extends('frontend.layouts.app')

@section('title') {{ $$module_name_singular->name }} @endsection

@section('content')
    <x-page-header pageTitle="{{ $$module_name_singular->title }}"/>

    <section class="hero-block-v1 section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <p style="text-align: justify; text-shadow: #172a52; font-size:medium ;   ">
                        <img class="img-responsive" src="{{ asset($$module_name_singular->image) }}" alt=""
                            style="border-bottom-right-radius: 30px; border-top-left-radius: 30px;  background-color: lightgray; float: left; padding: 10px; margin-right: 30px;margin-bottom: 30px;">

                        {!! $$module_name_singular->description !!}
                    </p>

                </div><!-- /.col-md-9 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>
@endsection
