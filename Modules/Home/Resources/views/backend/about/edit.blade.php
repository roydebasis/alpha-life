@extends('backend.layouts.app')

@section('title') {{ __($module_action) }} {{ $module_title }} @endsection

@section('breadcrumbs')
<x-backend-breadcrumbs>
    <x-backend-breadcrumb-item type="active">{{ __($module_action) }}</x-backend-breadcrumb-item>
</x-backend-breadcrumbs>
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-8">
                <h4 class="card-title mb-0">
                    <i class="{{ $module_icon }}"></i>  {{ $module_title }} <small class="text-muted">{{ __($module_action) }}</small>
                </h4>
                <div class="small text-muted">
                    @lang(":module_name Management Dashboard", ['module_name'=>Str::title($module_name)])
                </div>
            </div>
        </div>
        <!--/.row-->

        <hr>

        <div class="row mt-4">
            <div class="col">
                {{ html()->modelForm($$module_name_singular, 'PATCH', route("backend.$module_name.update", $$module_name_singular??100 ))->class('form')->open() }}

                @include ("home::backend.$module_name.form")

                <div class="row">
                    <div class="col-4">
                        <div class="form-group">
                            {{ html()->submit($text = icon('fas fa-save')." Save")->class('btn btn-success') }}
                        </div>
                    </div>

                    <div class="col-8">

                    </div>
                </div>

                {{ html()->form()->close() }}

            </div>
        </div>
    </div>
</div>

@endsection
