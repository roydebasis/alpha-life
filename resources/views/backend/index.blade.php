@extends('backend.layouts.app')

@section('title') @lang("Dashboard") @endsection

@section('breadcrumbs')
<x-backend-breadcrumbs/>
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-8">
                <h4 class="card-title mb-0">@lang("Welcome to", ['name'=>config('app.name')])</h4>
                <div class="small text-muted">{{ date_today() }}</div>
            </div>

            <div class="col-sm-4 hidden-sm-down">
                <div class="btn-toolbar float-right" role="toolbar" aria-label="Toolbar with button groups">
                    <button type="button" class="btn btn-info float-right">
                        <i class="c-icon cil-bullhorn"></i>
                    </button>
                </div>
            </div>
        </div>
        <hr>

        <!-- Dashboard Content Area -->

        <!-- / Dashboard Content Area -->

    </div>
</div>
<!-- / card -->
<div class="row">
    <div class="col-sm-6 col-lg-3">
        <a style="text-decoration: none;" href="{{ route('backend.services.index') }}">
            <div class="card bg-info">
                <div class="card-body">
                    <div class="text-value-lg text-center text-white">Insurance Plan</div>
                </div>
            </div>
        </a>
    </div>

    <div class="col-sm-6 col-lg-3">
        <a style="text-decoration: none;" href="{{ route('backend.services.index') }}">
            <div class="card bg-info">
                <div class="card-body">
                    <div class="text-value-lg text-center text-white">Supplementary Plan</div>
                </div>
            </div>
        </a>
    </div>

    <div class="col-sm-6 col-lg-3">
        <a style="text-decoration: none;" href="{{ route('backend.posts.index') }}">
            <div class="card bg-info">
                <div class="card-body">
                    <div class="text-value-lg text-center text-white">News</div>
                </div>
            </div>
        </a>
    </div>

    <div class="col-sm-6 col-lg-3">
        <a style="text-decoration: none;" href="#">
            <div class="card bg-info">
                <div class="card-body">
                    <div class="text-value-lg text-center text-white">Hospital List</div>
                </div>
            </div>
        </a>
    </div>

</div>

<div class="row">
    <div class="col-sm-6 col-lg-3">
        <a style="text-decoration: none;" href="{{ route('backend.managements.index') }}">
            <div class="card bg-info">
                <div class="card-body">
                    <div class="text-value-lg text-center text-white">Board of Director</div>
                </div>
            </div>
        </a>
    </div>
    <div class="col-sm-6 col-lg-3">
        <a style="text-decoration: none;" href="{{ route('backend.albums.index') }}">
            <div class="card bg-info">
                <div class="card-body">
                    <div class="text-value-lg text-center text-white">Photo Gallery</div>
                </div>
            </div>
        </a>
    </div>
    <div class="col-sm-6 col-lg-3">
        <a style="text-decoration: none;" href="{{ route('backend.videos.index') }}">
            <div class="card bg-info">
                <div class="card-body">
                    <div class="text-value-lg text-center text-white">Video Gallery</div>
                </div>
            </div>
        </a>
    </div>
    <div class="col-sm-6 col-lg-3">
        <a style="text-decoration: none;" href="{{ route('backend.faqs.index') }}">
            <div class="card bg-info">
                <div class="card-body">
                    <div class="text-value-lg text-center text-white">FAQ</div>
                </div>
            </div>
        </a>
    </div>

</div>
@endsection
