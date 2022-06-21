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
        <a style="text-decoration: none;" href="{{ route('backend.posts.index') }}">
            <div class="card bg-info">
                <div class="card-body">
                    <div class="text-value-lg text-center text-white">News</div>
                </div>
            </div>
        </a>
    </div>

    <div class="col-sm-6 col-lg-3">
        <a style="text-decoration: none;" href="{{ route('backend.claim.index') }}">
            <div class="card bg-info">
                <div class="card-body">
                    <div class="text-value-lg text-center text-white">Claim</div>
                </div>
            </div>
        </a>
    </div>

    <div class="col-sm-6 col-lg-3">
        <a style="text-decoration: none;" href="{{ route('backend.notices.index') }}">
            <div class="card bg-info">
                <div class="card-body">
                    <div class="text-value-lg text-center text-white">Notice</div>
                </div>
            </div>
        </a>
    </div>

    <div class="col-sm-6 col-lg-3">
        <a style="text-decoration: none;" href="{{ route('backend.managements.index') }}">
            <div class="card bg-info">
                <div class="card-body">
                    <div class="text-value-lg text-center text-white">Management</div>
                </div>
            </div>
        </a>
    </div>
</div>

<div class="row">
    <div class="col-sm-6 col-lg-3">
        <a style="text-decoration: none;" href="{{ route('backend.sliders.index') }}">
            <div class="card bg-info">
                <div class="card-body">
                    <div class="text-value-lg text-center text-white">Slide Show</div>
                </div>
            </div>
        </a>
    </div>
    <div class="col-sm-6 col-lg-3">
        <a style="text-decoration: none;" href="{{ route('backend.albums.index') }}">
            <div class="card bg-info">
                <div class="card-body">
                    <div class="text-value-lg text-center text-white">Gallery</div>
                </div>
            </div>
        </a>
    </div>
    <div class="col-sm-6 col-lg-3">
        <a style="text-decoration: none;" href="#">
            <div class="card bg-info">
                <div class="card-body">
                    <div class="text-value-lg text-center text-white">Sales</div>
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
    <div class="col-sm-6 col-lg-3">
        <a style="text-decoration: none;" href="#">
            <div class="card bg-info">
                <div class="card-body">
                    <div class="text-value-lg text-center text-white">Branch</div>
                </div>
            </div>
        </a>
    </div>
    <div class="col-sm-6 col-lg-3">
        <a style="text-decoration: none;" href="#">
            <div class="card bg-info">
                <div class="card-body">
                    <div class="text-value-lg text-center text-white">Team</div>
                </div>
            </div>
        </a>
    </div>
    <div class="col-sm-6 col-lg-3">
        <a style="text-decoration: none;" href="{{ route('backend.pages.index') }}">
            <div class="card bg-info">
                <div class="card-body">
                    <div class="text-value-lg text-center text-white">Page</div>
                </div>
            </div>
        </a>
    </div>
</div>

<h2 class="mb-3 mt-2">Employee Section</h2>

<div class="row">
    <div class="col-sm-6 col-lg-3">
        <a style="text-decoration: none;" href="{{ route('backend.employees.profile_info') }}">
            <div class="card bg-info">
                <div class="card-body">
                    <div class="text-value-lg text-center text-white">Profile Info</div>
                </div>
            </div>
        </a>
    </div>

    <div class="col-sm-6 col-lg-3">
        <a style="text-decoration: none;" href="{{ route('backend.employees.performance') }}">
            <div class="card bg-info">
                <div class="card-body">
                    <div class="text-value-lg text-center text-white">Performance</div>
                </div>
            </div>
        </a>
    </div>

    <div class="col-sm-6 col-lg-3">
        <a style="text-decoration: none;" href="{{ route('backend.employees.allowance') }}">
            <div class="card bg-info">
                <div class="card-body">
                    <div class="text-value-lg text-center text-white">Allowance</div>
                </div>
            </div>
        </a>
    </div>

    <div class="col-sm-6 col-lg-3">
        <a style="text-decoration: none;" href="{{ route('backend.employees.top_performer') }}">
            <div class="card bg-info">
                <div class="card-body">
                    <div class="text-value-lg text-center text-white">Top Performer</div>
                </div>
            </div>
        </a>
    </div>

</div>

<div class="row">
        <div class="col-sm-6 col-lg-3">
            <a style="text-decoration: none;" href="{{ route('backend.employees.policy_info') }}">
                <div class="card bg-info">
                    <div class="card-body">
                        <div class="text-value-lg text-center text-white">Policy Info</div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3">
            <a style="text-decoration: none;" href="{{ route('backend.employees.policy_list') }}">
                <div class="card bg-info">
                    <div class="card-body">
                        <div class="text-value-lg text-center text-white">Policy List</div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3">
            <a style="text-decoration: none;" href="{{ route('backend.employees.premium_due_list') }}">
                <div class="card bg-info">
                    <div class="card-body">
                        <div class="text-value-lg text-center text-white">Premium Due List</div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3">
            <a style="text-decoration: none;" href="#">
                <div class="card bg-info">
                    <div class="card-body">
                        <div class="text-value-lg text-center text-white">Pending Policy List</div>
                    </div>
                </div>
            </a>
        </div>
    </div>
@endsection
