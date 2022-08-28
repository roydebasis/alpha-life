@extends('frontend.layouts.app')
@push('after-styles')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/ju/dt-1.12.1/datatables.min.css"/>
    <style>
        #loader {
            position: absolute;
            z-index: 1;
            left: 0;
            right: 0;
            background: #f7f0f096;
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            min-height: 50px;
        }
        .relativePos{position: relative}
    </style>
@endpush
@php
    $title = 'Premium Collection';
    $subDesig = \Illuminate\Support\Facades\Session::get('subDesig');
    $subDesig = !empty($subDesig) ? json_decode($subDesig) : '';
    $empProfile = getEmpProfile();
@endphp

@section('title') {{ $title }} @endsection

@section('content')
    <x-page-header pageTitle="{{ $title }}"/>
    <section class="service-section-v3">
        <div class="container">
            <div class="card bg-white border-light shadow-soft flex-md-row no-gutters" style="margin-top: 40px;">
                <div class="card-body p-0 premium-calculator">
                    <div><a href="{{ url()->previous() }}" class="btn btn-sm action-sm btn-primary"><i class="fa fa-chevron-circle-left"></i> Back</a> </div>
                    <form id="reportFilterForm">
                        <input type="hidden" id='employeeCode' value="{{$empProfile['code']}}">
                        <input type="hidden" id='employeeDesignation' value="{{$empProfile['designation']}}">
                        <div class="row">
                        <div class="form-group col-md-4">
                            <label for="designation">Designation</label>
                            <select class="form-control" id="designation" required>
                                <option value="">Select Designation</option>
                                @if(!empty($subDesig))
                                    @foreach($subDesig as $desig)
                                        <option value="{{$desig->key}}">{{$desig->name}}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="mode">Mode</label>
                            <select class="form-control" id="mode" required>
                                <option value="">Select Mode</option>
                                <option value="daily">Daily</option>
                                <option value="monthly">Monthly</option>
                                <option value="quarterly">Quarterly</option>
                                <option value="half yearly">Half Yearly</option>
                                <option value="yearly">Yearly</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="type">Type</label>
                            <select class="form-control" id="type" required>
                                <option value="summary" selected>Summary</option>
                            </select>
                        </div>

                        <div class="form-group col-md-4">
                            <label for="startDate">Start Date</label>
                            <input type="text" onchange="onDateChange()" class="form-control date-field" id="startDate" placeholder="Select Start Date" required>
                        </div>

                        <div class="form-group col-md-4">
                            <label for="endDate">End Date</label>
                            <input type="text" onchange="onDateChange()" class="form-control date-field" id="endDate" placeholder="Select End Date" required>
                        </div>

                        <div class="form-group col-md-12 text-center">
                            <button class="btn btn-primary btn-sm action-sm" type="submit">Apply</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
            <div class="row mb-30 relativePos">
                <div class="col-md-12">
                    <div class="hide" id="loader"><div class="loader"></div></div>
                    <div class="table-responsive">
                        <table class="table table-bordered hide" id="premiumReportDetails">
                    <thead>
                        <tr>
                            <th>Action</th>
                            <th>E Name</th>
                            <th>New</th>
                            <th>Def</th>
                            <th>FY</th>
                            <th>Ren</th>
                            <th>Total</th>
                            <th>Policy</th>
                            <th>Persistency</th>
                            <th>Supervisor</th>
                            <th>Month</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
                    </div>
                </div>
            </div>

            <div class="mb-80"><a href="{{ url()->previous() }}" class="btn btn-sm action-sm btn-primary"><i class="fa fa-chevron-circle-left"></i> Back</a> </div>
        </div>
    </section>
@endsection

@push ("after-scripts")
    <script type="text/javascript" src="https://cdn.datatables.net/v/ju/dt-1.12.1/datatables.min.js"></script>
    <script>
        var apiUrl = "{{ config('alpha.api_url') }}";
        var datatableConfig = {
            ordering: false,
        };
        jQuery(document).ready(function () {
            $('.date-field').datepicker({
                dateFormat: "yy-mm-dd",
                changeYear: true,
                changeMonth: true,
                yearRange: "-100:+10",
                onSelect: function(dateText) {
                    $(this).change();
                }
            });
            $('#reportFilterForm').submit(async function (e) {
                e.preventDefault();
                $('#loader').removeClass('hide');
                let loggedInDesig = $('#employeeDesignation').val();
                let data = {
                    employee_id: $('#employeeCode').val(),
                    selected_designation_key: $('#designation').val(),
                    start_date: $('#startDate').val(),
                    end_date:  $('#endDate').val(),
                    mode: $('#mode').val(),
                    type: $('#type').val()
                }

                let listOfDesignations = window.designaions;
                let loggedInDesigkey = Object.keys(window.designaions).find(key => listOfDesignations[key] == loggedInDesig);
                if (!loggedInDesigkey) {
                    alert('Please try again sometime later.');
                    console.log('Logged in users designations list not found!!');
                    return;
                }
                data.login_designation_key = loggedInDesigkey;

                let response = await getReport(data);
                let result = '';
                response.data.report.forEach(function (item, index) {
                    let supervisors = '';
                    if (item.Supervisor) {
                        supervisors = item.Supervisor.split(',');
                        supervisors = supervisors.join('<br/>');
                    }
                    let sl = index + 1;
                        result += '<tr>';
                        result += '<td>';
                        result += '<a href="/account/premium-collection/details/'+item.Code+'?&start_date='+data.start_date+'&details_type=deferred&selected_designation_key='+data.selected_designation_key+'&mode='+data.mode+'" class="btn btn-sm btn-primary action-sm" data-type="deferred" data-empCode="'+ item.Code+'">Def Details</a>';
                        result += '<a href="/account/premium-collection/details/'+item.Code+'?&start_date='+data.start_date+'&details_type=renewal&selected_designation_key='+data.selected_designation_key+'&mode='+data.mode+'" class="btn btn-sm btn-info action-sm" data-type="renewal" data-empCode="'+ item.Code+'">Ren Details</a>';
                        result += '</td>';
                        result += '<td class="text-nowrap">' + item.Code + ' - ' + item.EName + '&nbsp;<span class="d-block">' + '</span></td>';
                        result += '<td>' + parseFloat(item.NewPre).toFixed(2) + '</td>';
                        result += '<td>' + parseFloat(item.DeffPre).toFixed(2) + '</td>';
                        result += '<td>' + parseFloat(item.FYPre).toFixed(2) + '</td>';
                        result += '<td>' + parseFloat(item.RenPre).toFixed(2) + '</td>';
                        result += '<td>' + parseFloat(item.TotPrePre).toFixed(2) + '</td>';
                        result += '<td>' + item.PolicyQty + '</td>';
                        result += '<td>' + item.Persistency + '</td>';
                        result += '<td class="text-nowrap">' + supervisors + '</td>';
                        result += '<td>' + item.Month + '</td>';
                        result += '</tr>';
                });

                if ($.fn.dataTable.isDataTable('#premiumReportDetails') ) {
                    $('#premiumReportDetails').DataTable().clear().destroy();
                }
                $('#premiumReportDetails tbody').empty().html(result);
                $('#premiumReportDetails').removeClass('hide');
                $('#premiumReportDetails').DataTable(datatableConfig);
                $('#loader').addClass('hide');
            });
        });

        document.addEventListener("DOMContentLoaded", getDesignations);

        /**
         * get report data.
         * @param data
         */
        async function getReport(params) {
            return $.ajax({
                url: apiUrl + "public/premium-collection-report",
                method: 'POST',
                dataType: 'JSON',
                data: params
            }).done(function (data) {
                if (data.status == 200) {
                    return data.data.report;
                }
                return [];
            }).fail(function () {
                alert('error')
            });
        }

        /**
         * get al designations.
         * @param data
         */
        async function getDesignations() {
            return $.ajax({
                url: apiUrl + "public/designations",
                method: 'GET',
                dataType: 'JSON'
            }).done(function(data) {
                if (data.status == 200 ) {
                    designations = data.data.designations;
                    window.designaions = data.data.designations;
                    return data.data.designations;
                }
                return [];
            }).fail(function() {
                alert('error')
            });
        }

        /**
         * date select event
         */
        function onDateChange() {
            let start = $('#startDate').val();
            let end = $('#endDate').val();
            if (start) {
                $('#endDate').datepicker('option', 'minDate', new Date(start));
            }
            if (end) {
                $('#startDate').datepicker('option', 'maxDate', new Date(end));
            }
        }
    </script>
@endpush

