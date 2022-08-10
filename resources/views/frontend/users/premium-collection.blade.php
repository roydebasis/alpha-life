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
    $title = 'Premium Calculation';
    $subDesig = \Illuminate\Support\Facades\Session::get('subDesig');
    $subDesig = !empty($subDesig) ? json_decode($subDesig) : '';
    $empProfile = getEmpProfile();
@endphp

@section('title') {{ $title }} @endsection

@section('content')
    <x-page-header pageTitle="{{ $title }}"/>
    <section class="service-section-v3">
        <div class="container">
            <div class="card bg-white border-light shadow-soft flex-md-row no-gutters" style="margin-top: 80px;">
                <div class="card-body p-0 premium-calculator">
                    <h4 class="card-title mb-3">
                        <i class="fas fa-coins"></i> Premium Calculation
                    </h4>
                    <form id="reportFilterForm">
                        <input type="hidden" id='employeeCode' value="{{$empProfile['code']}}">
                        <input type="hidden" id='employeeDesignation' value="{{$empProfile['designation']}}">
                        <div class="row">
                        <div class="form-group col-md-4">
                            <label for="reportType">Collection Report</label>
                            <select class="form-control" id="reportType" required>
                                <option disabled>Select Type</option>
                                <option value="premium_collection" selected>Premium Collection</option>
                                <option value="deferred">Deferred Details</option>
                                <option value="renewal">Renewal Details</option>
                            </select>
                        </div>
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
{{--                                <option value="Weekly">Weekly</option>--}}
                                <option value="monthly">Monthly</option>
                                <option value="quarterly">Quarterly</option>
{{--                                <option value="Half Yearly">Half Yearly</option>--}}
                                <option value="yearly">Yearly</option>
                            </select>
                        </div>
{{--                            monthly,yearly,quarterly,daily--}}
                        <div class="form-group col-md-4">
                            <label for="type">Type</label>
                            <select class="form-control" id="type" required>
                                <option value="summary" selected>Summary</option>
                            </select>
                        </div>

                        <div class="form-group col-md-4">
                            <label for="startDate">Start Date</label>
                            <input type="date" class="form-control" id="startDate" required>
                        </div>

                        <div class="form-group col-md-4">
                            <label for="endDate">End Date</label>
                            <input type="date" class="form-control" id="endDate" required>
                        </div>

                        <div class="form-group col-md-12 text-center">
{{--                            <button class="btn btn-primary" data-toggle="modal" data-target="#premiumCollectionModal" type="button">Apply</button>--}}
                            <button class="btn btn-primary" type="submit">Apply</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
            <div class="row mb-30 relativePos">
                <div class="hide" id="loader"><div class="loader"></div></div>
                <table class="table table-bordered hide" id="reportDetails">
                    <thead>
                    </thead>
                    <tbody></tbody>
                </table>
                <table class="table table-bordered hide" id="premiumReportDetails">
                    <thead>
                        <tr>
                            <th>SL</th>
                            <th>EName</th>
                            <th>Def Pre</th>
                            <th>FY Pre</th>
                            <th>Month</th>
                            <th>New Pre</th>
                            <th>Persistency</th>
                            <th>Policy Qty</th>
                            <th>Ren Pre</th>
                            <th>Supervisor</th>
                            <th>TotPrePre</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>

            <div class="col-md-12 mb-80"><a href="{{ url()->previous() }}"><i class="fa fa-chevron-circle-left"></i> Back</a> </div>
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
            $('#reportFilterForm').submit(async function (e) {
                e.preventDefault();
                $('#loader').removeClass('hide');
                let reportType = $('#reportType').val();
                let loggedInDesig = $('#employeeDesignation').val();
                let data = {
                    employee_id: $('#employeeCode').val(),
                    selected_designation_key: $('#designation').val(),
                    start_date: $('#startDate').val(),
                }

                if (reportType != 'premium_collection') {
                    data.details_type = reportType;
                } else {
                    let listOfDesignations = window.designaions;
                    let loggedInDesigkey = Object.keys(window.designaions).find(key => listOfDesignations[key] == loggedInDesig);
                    if (!loggedInDesigkey) {
                        alert('Please try again sometime later.');
                        return;
                    }
                    data.login_designation_key = loggedInDesigkey,
                    data.end_date   = $('#endDate').val(),
                    data.mode       = $('#mode').val()
                    data.type       = $('#type').val();
                }

                let response = await getReport(reportType, data);
                let result = '';
                let tHead = '';

                if(reportType != 'premium_collection') {
                    tHead += '<tr>';
                    tHead += '<th>SL</th>';
                    tHead += '<th>Name</th>';
                    tHead += '<th>Policy No</th>';
                    tHead += '<th>MOP</th>';
                    tHead += '<th>Installment No</th>';
                    tHead += '<th>' + (reportType == 'deferred' ? 'Deferred' : 'Renewal') + ' Premium</th>';
                    tHead += '<th>Paid Installment</th>';
                    tHead += '<th>Paid Amount</th>';
                    tHead += '<th>ComDt</th>';
                    tHead += '<th>NDD</th>';
                    tHead += '</tr>';
                    $('#reportDetails thead').empty().html(tHead);
                }

                if (response.data.report && response.data.report.length <= 0) {
                    if ($.fn.dataTable.isDataTable('#premiumReportDetails') ) {
                        $('#premiumReportDetails').DataTable().clear().destroy();
                        $('#reportDetails tbody').empty();
                    }
                    if ($.fn.dataTable.isDataTable('#reportDetails') ) {
                        $('#reportDetails').DataTable().clear().destroy();
                        $('#reportDetails tbody').empty();
                    }
                    alert('No data found.');
                } else {
                    response.data.report.forEach(function (item, index) {
                        let sl = index + 1;
                        if(reportType == 'premium_collection') {
                            result += '<tr>';
                            result += '<td>' + sl + '</td>';
                            result += '<td>' + item.EName + '<span class="d-block">' +  item.Code + '</span></td>';
                            result += '<td>' + item.DeffPre + '</td>';
                            result += '<td>' + item.FYPre + '</td>';
                            result += '<td>' + item.Month + '</td>';
                            result += '<td>' + item.NewPre + '</td>';
                            result += '<td>' + item.Persistency + '</td>';
                            result += '<td>' + item.PolicyQty + '</td>';
                            result += '<td>' + item.RenPre + '</td>';
                            result += '<td>' + item.Supervisor + '</td>';
                            result += '<td>' + item.TotPrePre + '</td>';
                            result += '</tr>';
                        } else {
                            result += '<tr>';
                            result += '<td>' + sl + '</td>';
                            result += '<td>' + item.PHName + '<span class="d-block"> ' +item.Mobile + '</span></td>';
                            result += '<td>' + item.PolicyNo + '</td>';
                            result += '<td>' + item.MOP + '</td>';
                            result += '<td>' + item.Isntallment_No + '</td>';
                            result += '<td>' + (reportType == 'deferred' ? item.Deffered_Pre: item.Renewal_Pre) + '</td>';
                            result += '<td>' + item.PaidInstallment + '</td>';
                            result += '<td>' + item.PaidAmt + '</td>';
                            result += '<td>' + item.ComDt + '</td>';
                            result += '<td>' + item.NDD + '</td>';
                            result += '</tr>';
                        }
                    });
                }

                if(reportType == 'premium_collection') {
                    if ($.fn.dataTable.isDataTable('#premiumReportDetails') ) {
                        $('#premiumReportDetails').DataTable().clear().destroy();
                    }
                    $('#premiumReportDetails tbody').empty().html(result);
                    if ($.fn.dataTable.isDataTable('#reportDetails') ) {
                        $('#reportDetails').DataTable().clear().destroy();
                        $('#reportDetails tbody').empty()
                    }
                    $('#premiumReportDetails').removeClass('hide');
                    $('#reportDetails').addClass('hide');
                    $('#premiumReportDetails').DataTable(datatableConfig);
                }else {
                    if ($.fn.dataTable.isDataTable('#reportDetails') ) {
                        $('#reportDetails').DataTable().clear().destroy();
                    }
                    $('#reportDetails tbody').empty().html(result);
                    if ($.fn.dataTable.isDataTable('#premiumReportDetails') ) {
                        $('#premiumReportDetails').DataTable().clear().destroy();
                        $('#premiumReportDetails tbody').empty().html(result);
                    }
                    $('#reportDetails').removeClass('hide');
                    $('#premiumReportDetails').addClass('hide');
                    $('#reportDetails').DataTable(datatableConfig);
                }
                $('#loader').addClass('hide');
            });
        });

        document.addEventListener("DOMContentLoaded", getDesignations);

        /**
         * get report data.
         * @param data
         */
        async function getReport(reportType, params) {
            let url = reportType == 'premium_collection' ? 'premium-collection-report' : 'premium-collection-details';
            return $.ajax({
                url: apiUrl + "public/" + url,
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
    </script>
@endpush

