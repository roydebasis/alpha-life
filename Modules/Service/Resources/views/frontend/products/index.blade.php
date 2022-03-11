@extends('frontend.layouts.app')

@section('title') Insurance Plan @endsection

@section('content')
    <x-page-header pageTitle="{{ $pageTitle }}"/>
    <section class="service-section-v3 exclusive-plans">
        <div class="container">
            <br><br>
            @if(!$products->isEmpty())
            <div class="row row-flex" style="padding-top: 20px; padding-bottom: 20px;">
                @foreach($products as $product)
                    <div class="col-xs-12 col-sm-6 col-md-4 blog-grid-item">
                        <article class="post-wrapper" style="background-color: white; height: 100%; overflow: hidden; border-left: 1px solid #2a2a86; border-right: 1px solid #2a2a86;border-bottom: 1px solid #2a2a86; border-top-left-radius: 50px; border-bottom-right-radius: 50px;">
                            @if($product->featured_image)
                            <div>
                                <img style="display: block; max-width: 100%; height: auto;" src="{{ url($product->featured_image) }}">
                            </div>
                            @endif
                            <div>
                                <div class="service-box">
                                    <h3 style="text-align: center;" class="single-line"> {{ $product->name }} </h3>
                                    <p style="text-align: justify;"> {{ $product->intro }}, <a
                                            href="{{ route('frontend.plans.show', ['slug' => $product->slug]) }}"><strong>More...</strong></a></p>
                                </div>
                            </div>
                        </article>
                    </div>
                @endforeach
            </div>
            <div class="col-12" style="margin-bottom: 50px">
                <div class="team-pagination">
                    {!! $products->appends(request()->query())->links() !!}
                </div>
            </div>
            @else
                <p class="text-center mb-80">No Plan Found</p>
            @endif
        </div>
    </section>
@endsection
