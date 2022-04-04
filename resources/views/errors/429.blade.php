@extends('frontend.layouts.app')

@section('title', '429 Error' . " - " . config('app.name'))

@section('content')
    <x-page-header pageTitle="429 Error"/>
    <section class="service-section-v3 mb-80">
        <div class="container">
            <div class="row" style="padding-top: 20px; padding-bottom: 80px;">
                <div class="col-md-12 service-box-container">
                    <div style="border-bottom-right-radius: 50px; border-top-left-radius: 50px; overflow: hidden; background-color: white; border-left: 1px solid #2a2a86; border-right: 1px solid #2a2a86; border-bottom: 1px solid #2a2a86;">
                        <div class="service-box text-center">
                            <h2>{{ label_case($exception->getMessage()) }}</h2>
                            <button onclick="window.history.back();" class="btn btn-warning ml-1" data-toggle="tooltip" title="Return Back"> Return Back</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

