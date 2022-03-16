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
            <div class="card">
                <div class="card-body">
                    <div class="text-value-lg">Insurance Plan</div>
                </div>
            </div>
        </a>
    </div>

    <div class="col-sm-6 col-lg-3">
        <a style="text-decoration: none;" href="{{ route('backend.services.index') }}">
            <div class="card">
                <div class="card-body">
                    <div class="text-value-lg">Supplementary Plan</div>
                </div>
            </div>
        </a>
    </div>

    <div class="col-sm-6 col-lg-3">
        <a style="text-decoration: none;" href="{{ route('backend.posts.index') }}">
            <div class="card">
                <div class="card-body">
                    <div class="text-value-lg">News</div>
                </div>
            </div>
        </a>
    </div>

    <div class="col-sm-6 col-lg-3">
        <a style="text-decoration: none;" href="#">
            <div class="card">
                <div class="card-body">
                    <div class="text-value-lg">Hospital List</div>
                </div>
            </div>
        </a>
    </div>

</div>

<div class="row">
    <div class="col-sm-6 col-lg-3">
        <a style="text-decoration: none;" href="{{ route('backend.services.index') }}">
            <div class="card">
                <div class="card-body">
                    <div class="text-value-lg">Board of Director</div>
                </div>
            </div>
        </a>
    </div>
    <div class="col-sm-6 col-lg-3">
        <a style="text-decoration: none;" href="{{ route('backend.albums.index') }}">
            <div class="card">
                <div class="card-body">
                    <div class="text-value-lg">Photo Gallery</div>
                </div>
            </div>
        </a>
    </div>
    <div class="col-sm-6 col-lg-3">
        <a style="text-decoration: none;" href="{{ route('backend.videos.index') }}">
            <div class="card">
                <div class="card-body">
                    <div class="text-value-lg">Video Gallery</div>
                </div>
            </div>
        </a>
    </div>
    <div class="col-sm-6 col-lg-3">
        <a style="text-decoration: none;" href="{{ route('backend.faqs.index') }}">
            <div class="card">
                <div class="card-body">
                    <div class="text-value-lg">FAQ</div>
                </div>
            </div>
        </a>
    </div>

</div>
@endsection
