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
    $title = 'Earnings';
    $subDesig = \Illuminate\Support\Facades\Session::get('subDesig');
    $subDesig = !empty($subDesig) ? json_decode($subDesig) : '';
@endphp

@section('title') {{ $title }} @endsection

@section('content')
<x-page-header pageTitle="{{ $title }}"/>
<section class="service-section-v3">
    <div class="container">
        <div class="card bg-white border-light shadow-soft flex-md-row no-gutters" style="margin-top: 40px;">
            <div class="card-body p-0 premium-calculator">
                <form id="rankingFilterForm">
                    <input type="hidden" id='employeeCode' value="{{$empProfile['code']}}">
                    <input type="hidden" id='employeeDesignation' value="{{$empProfile['designation']}}">
                    <div class="row">
                        <div class="form-group col-sm-4">
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
                        <div class="form-group col-sm-4">
                            <label for="mode">Mode</label>
                            <select class="form-control" id="mode" required>
                                <option value="monthly" selected>Monthly</option>
                            </select>
                        </div>
                        <div class="form-group col-sm-4">
                            <label for="type">Type</label>
                            <select class="form-control" id="type" required>
                                <option value="summary" selected>Summary</option>
                            </select>
                        </div>

                        <div class="form-group col-sm-4">
                            <label for="startDate">Start Date</label>
                            <input type="text" onchange="onDateChange()" class="form-control date-field" id="startDate" placeholder="Select Start Date" required>
                        </div>

                        <div class="form-group col-sm-3">
                            <label for="endDate">End Date</label>
                            <input type="text" onchange="onDateChange()" class="form-control date-field" id="endDate" placeholder="Select End Date" required>
                        </div>

                        <div class="form-group col-md-12 text-center">
                            <button class="btn btn-primary" type="submit">Apply</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row mb-30 relativePos">
            <div class="hide" id="loader"><div class="loader"></div></div>
            <table class="table table-bordered hide" id="rankingTbl">
                <thead>
                    <tr>
                        <th>SL</th>
                        <th>Code</th>
                        <th>Name</th>
                        <th>Total Amount</th>
                        <th>Action</th>
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
        $('.date-field').datepicker({
            dateFormat: "yy-mm-dd",
            changeYear: true,
            changeMonth: true,
            yearRange: "-100:+10",
            onSelect: function(dateText) {
                $(this).change();
            }
        });

        $('#rankingFilterForm').submit(async function (e) {
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
                result += '<tr>';
                result += '<td>' + (index + 1) + '</td>';
                result += '<td>' + item.Code + '</td>';
                result += '<td>' + item.EmpName + '</td>';
                result += '<td>' + item.TotPayable + '</td>';
                result += '<td>';
                result += '<button class="btn btn-sm btn-primary action-sm show-more" type="button" data='+JSON.stringify(item)+'>More</button>';
                result += '<input type="hidden" value=\"'+JSON.stringify(item)+'\">';
                result += '</td>';
                result += '</tr>';
            });

            if ($.fn.dataTable.isDataTable('#rankingTbl') ) {
                $('#rankingTbl').DataTable().clear().destroy();
            }
            $('#rankingTbl tbody').empty().html(result);
            $('#rankingTbl').removeClass('hide');
            $('#rankingTbl').DataTable(datatableConfig);
            $('#loader').addClass('hide');
        });

        $(document).on('click', '.show-more', function () {
            alert('under construction')
            console.log($(this).closest('td').find('input'));
        })
    });

    document.addEventListener("DOMContentLoaded", getDesignations);

    /**
     * get report data.
     * @param data
     */
    async function getReport(params) {
        return $.ajax({
            url: apiUrl + "public/earnings-report",
            method: 'POST',
            dataType: 'JSON',
            data: params
        }).done(function (data) {
            if (data.status == 200) {
                return data.data.report;
            }
            return [];
        }).fail(function (error) {
            alert(error)
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

    function showDetailsModal(data) {
      console.log(data);
    }
</script>
@endpush
