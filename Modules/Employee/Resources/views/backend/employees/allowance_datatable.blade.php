@extends('backend.layouts.app')

@section('title')
    {{ __($module_action) }} Allowance
@endsection

@section('breadcrumbs')
    <x-backend-breadcrumbs>
        <x-backend-breadcrumb-item type="active" icon='{{ $module_icon }}'>Allowance
        </x-backend-breadcrumb-item>
    </x-backend-breadcrumbs>
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-8">
                    <h4 class="card-title mb-0">
                        <i class="{{ $module_icon }}"></i> Allowance <small class="text-muted">Data Table
                            {{ __($module_action) }}</small>
                    </h4>
                    <div class="small text-muted">
                        @lang(":module_name Management Dashboard", ['module_name'=>Str::title($module_name)])
                    </div>
                </div>
            </div>
            <!--/.row-->

            <div class="border p-3 mt-4">

                <div class="row">
                    <div class="col-4">
                        <div class="form-group">
                            <?php
                            $field_name = 'designation';
                            $field_lable = __("Designation");
                            $field_placeholder = __("Select an option");
                            $required = "";
                            $select_options = [
                                '1'=>'Published',
                                '0'=>'Unpublished',
                            ];
                            ?>
                            {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
                            {{ html()->select($field_name, $select_options)->placeholder($field_placeholder)->class('form-control select2')->attributes(["$required"]) }}
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <?php
                            $field_name = 'mode';
                            $field_lable = __("Mode");
                            $field_placeholder = __("Select an option");
                            $required = "";
                            $select_options = [
                                '1'=>'Published',
                                '0'=>'Unpublished',
                            ];
                            ?>
                            {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
                            {{ html()->select($field_name, $select_options)->placeholder($field_placeholder)->class('form-control select2')->attributes(["$required"]) }}
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <?php
                            $field_name = 'type';
                            $field_lable = __("Type");
                            $field_placeholder = __("Select an option");
                            $required = "";
                            $select_options = [
                                '1'=>'Published',
                                '0'=>'Unpublished',
                            ];
                            ?>
                            {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
                            {{ html()->select($field_name, $select_options)->placeholder($field_placeholder)->class('form-control select2')->attributes(["$required"]) }}
                        </div>
                    </div>
                </div>
    
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <?php
                            $field_name = 'start_date';
                            $field_lable = __("Start Date");
                            $field_placeholder = $field_lable;
                            $required = "";
                            ?>
                            {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
                            <div class="input-group date datetime" id="{{$field_name}}" data-target-input="nearest">
                                {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control datetimepicker-input')->attributes(["$required", 'data-target'=>"#$field_name"]) }}
                                <div class="input-group-append" data-target="#{{$field_name}}" data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="fas fa-calendar-alt"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <?php
                            $field_name = 'end_date';
                            $field_lable = __("End Date");
                            $field_placeholder = $field_lable;
                            $required = "";
                            ?>
                            {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
                            <div class="input-group date datetime" id="{{$field_name}}" data-target-input="nearest">
                                {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control datetimepicker-input')->attributes(["$required", 'data-target'=>"#$field_name"]) }}
                                <div class="input-group-append" data-target="#{{$field_name}}" data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="fas fa-calendar-alt"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary d-block ml-auto">Apply</button>
            </div>


            <div class="row mt-4">
                <div class="col">
                    <table id="datatable" class="table table-bordered table-hover table-responsive-sm">
                        <thead>
                            <tr>
                                <th>
                                    #
                                </th>
                                <th>
                                    Name
                                </th>
                                <th class="text-right">
                                    Action
                                </th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <div class="row">
                <div class="col-7">
                    <div class="float-left">

                    </div>
                </div>
                <div class="col-5">
                    <div class="float-right">

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('after-styles')
    <!-- DataTables Core and Extensions -->
    <link rel="stylesheet" href="{{ asset('vendor/datatable/datatables.min.css') }}">
@endpush

<!-- Select2 Library -->
<x-library.select2 />
<x-library.datetime-picker />



<!-- Date Time Picker & Moment Js-->
<script type="text/javascript">
    $(function() {
        $('.datetime').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            icons: {
                time: 'far fa-clock',
                date: 'far fa-calendar-alt',
                up: 'fas fa-arrow-up',
                down: 'fas fa-arrow-down',
                previous: 'fas fa-chevron-left',
                next: 'fas fa-chevron-right',
                today: 'far fa-calendar-check',
                clear: 'far fa-trash-alt',
                close: 'fas fa-times'
            }
        });
    });
</script>

@push('after-scripts')
    <!-- DataTables Core and Extensions -->
    <script type="text/javascript" src="{{ asset('vendor/datatable/datatables.min.js') }}"></script>

    <script type="text/javascript">
        $('#datatable').DataTable({
            processing: true,
            serverSide: true,
            autoWidth: true,
            responsive: true,
            ajax: '{{ route("backend.$module_name.performance_data") }}',
            columns: [{
                    data: 'id',
                    name: 'id'
                },
                {
                    data: 'name',
                    name: 'name'
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false
                }
            ]
        });
    </script>
@endpush
