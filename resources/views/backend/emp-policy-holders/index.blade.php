@extends ('backend.layouts.app')

@section('title') {{ $module_action }} {{ $module_title }} @endsection

@section('breadcrumbs')
<x-backend-breadcrumbs>
    <x-backend-breadcrumb-item type="active" icon='{{ $module_icon }}'>Employees/Policy Holders</x-backend-breadcrumb-item>
</x-backend-breadcrumbs>
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col">
                <h4 class="card-title mb-0">
                    <i class="{{$module_icon}}"></i> Employees/Policy Holders
                </h4>
            </div>

{{--            <div class="col-5">--}}
{{--                <div class="float-right">--}}
{{--                    <x-buttons.create route='{{ route("backend.$module_name.create") }}' title="{{__('Create')}} {{ ucwords(Str::singular($module_name)) }}" />--}}

{{--                    <div class="btn-group" role="group" aria-label="Toolbar button groups">--}}
{{--                        <div class="btn-group" role="group">--}}
{{--                            <button id="btnGroupToolbar" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                                <i class="fas fa-cog"></i>--}}
{{--                            </button>--}}
{{--                            <div class="dropdown-menu" aria-labelledby="btnGroupToolbar">--}}
{{--                                <a class="dropdown-item" href="{{ route("backend.$module_name.trashed") }}">--}}
{{--                                    <i class="fas fa-eye-slash"></i> View trash--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
        <!--/.row-->


        <livewire:employees-policy-holders />


    </div>
    <div class="card-footer">

    </div>
</div>

@endsection
