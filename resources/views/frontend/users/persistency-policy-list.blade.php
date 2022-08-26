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
    $title = 'Persistency Policy('.$params['type'].')';
    $subDesig = \Illuminate\Support\Facades\Session::get('subDesig');
    $subDesig = !empty($subDesig) ? json_decode($subDesig) : '';
@endphp

@section('title') {{ $title }} @endsection

@section('content')
<x-page-header pageTitle="{{ $title }}"/>
<section class="service-section-v3">
    <div class="container">
        <input type="hidden" id='employee_id' value="{{$params['employee_id']}}">
        <input type="hidden" id='selected_designation_key' value="{{$params['selected_designation_key']}}">
        <input type="hidden" id='login_designation_key' value="{{$params['login_designation_key']}}">
        <input type="hidden" id='selected_employee_id' value="{{$params['selected_employee_id']}}">
        <input type="hidden" id='type' value="{{$params['type']}}">

        <div class="row mb-30 relativePos" style="margin-top: 40px;">
            <div class="hide" id="loader"><div class="loader"></div></div>
            <table class="table table-bordered" id="persistencyTbl">
                <thead>
                    <tr>
                        <th>SL</th>
                        <th>PolicyNo</th>
                        <th>PHName</th>
                        <th>Mobile</th>
                        <th>ChainSetup</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>

        <div class="col-md-12 mb-80"><a href="{{ url()->previous() }}"><i class="fa fa-chevron-circle-left"></i> Back</a> </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="policyDetails" tabindex="-1" role="dialog" aria-labelledby="performanceModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel">Persistency Policy Details</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table class="table table-bordered " id="policyDetailsTbl">
                        <tbody></tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
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
    var reportData = '';
    var selectedEmployeeId = '';

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

        $(document).on('click', '.show-more', async function () {
            $('#loader').removeClass('hide');
            $('#policyDetailsTbl tbody').empty();
            let policyId = $(this).attr('data');
            let tableRows = '';
            let report = reportData.find(item => item.PolicyNo == policyId);
            let amtFields = ['SumAssured', 'Premium', 'Suspense', 'DuePremium', 'DueInstallment', 'LateFee', 'NetDuePremium', 'PaidAmount'];
            if (report) {
                let value = '';
                for (const key in  report) {
                    value = `${report[key]}`;
                    if (amtFields.includes(key)) {
                        value = `${report[key]}`;
                        value = parseFloat(value).toFixed(2);
                    }
                    tableRows += '<tr>';
                    tableRows += '<td>' + `${key}` + '</td>';
                    tableRows += '<td>' + value + '</td>';
                    tableRows += '</tr>';
                }
            } else {
                tableRows = '<tr><td>No Data Found</td></tr>';
            }
            $('#policyDetailsTbl tbody').html(tableRows);
            $('#policyDetails').modal({ show: true});
            $('#loader').addClass('hide');
        })
    });

    document.addEventListener("DOMContentLoaded", getDesignations);
    document.addEventListener("DOMContentLoaded", getPolicy);

    /**
     * load policy list
     * */
    async function getPolicy() {
        let data = {
            employee_id: $('#employee_id').val(),
            selected_designation_key: $('#selected_designation_key').val(),
            login_designation_key: $('#login_designation_key').val(),
            selected_employee_id: $('#selected_employee_id').val(),
            type: $('#type').val()
        }
        let response = await getReport(data);
        let result = '';
        reportData = response.data.report;
        response.data.report.forEach(function (item, index) {
            let ChainSetup = '';
            if (item.ChainSetup) {
                ChainSetup = item.ChainSetup.split(',');
                ChainSetup = ChainSetup.join('<br/>');
            }
            result += '<tr>';
            result += '<td>' + (index + 1) + '</td>';
            result += '<td>' + item.PolicyNo + '</td>';
            result += '<td>' + item.PHName + '</td>';
            result += '<td>' + item.Mobile + '</td>';
            result += '<td class="text-nowrap">' + ChainSetup + '</td>';
            result += '<td>';
            result += '<button class="btn btn-sm btn-primary action-sm show-more" type="button" data='+item.PolicyNo+'>More</button>';
            result += '</td>';
            result += '</tr>';
        });

        $('#persistencyTbl tbody').html(result);
        $('#persistencyTbl').DataTable(datatableConfig);
        $('#loader').addClass('hide');
    }

    /**
     * get report data.
     * @param data
     */
    async function getReport(params) {
        return $.ajax({
            url: apiUrl + "public/persistency-policy-list/" + params.selected_employee_id,
            method: 'POST',
            dataType: 'JSON',
            data: params
        }).done(function (data) {
            if (data.status == 200) {
                return  data.data.report;
            }
            return [];
        }).fail(function (error) {
            alert(error)
        });
    }

    /**
     * get report details.
     * @param data
     */
    async function getReportDetails(empCode, params) {
        return $.ajax({
            url: apiUrl + "public/persistency-report/" + empCode,
            method: 'POST',
            dataType: 'JSON',
            data: params
        }).done(function(data) {
            if (data.status == 200 ) {
                return data.data.report;
            }
            return [];
        }).fail(function() {
            alert('error')
        });
    }

    /**
     * get all designations.
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

@push('after-styles')
    <style>
        #policyDetails .modal-header .close {
            margin-top: -22px;
        }
        #policyDetailsTbl{
            margin-top: 10px;
        }
    </style>
@endpush
