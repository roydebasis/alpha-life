@extends('frontend.layouts.app')
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
            <h4 class="header-with-bg mb">Results</h4>
            <div class="row mb-30" id="reportDetails">
{{--                <div class="loader mb-30" id="loader"></div>--}}
            </div>

            <div class="col-md-12 mb-80"><a href="{{ url()->previous() }}"><i class="fa fa-chevron-circle-left"></i> Back</a> </div>
            <!-- Modal -->
{{--            <div class="modal fade" id="premiumCollectionModal" tabindex="-1" role="dialog" aria-labelledby="premiumCollectionModal" aria-hidden="true">--}}
{{--                <div class="modal-dialog" role="document">--}}
{{--                    <div class="modal-content">--}}
{{--                        <div class="modal-header">--}}
{{--                            <h5 class="modal-title" id="exampleModalLabel">Premium Collection</h5>--}}
{{--                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
{{--                                <span aria-hidden="true">&times;</span>--}}
{{--                            </button>--}}
{{--                        </div>--}}
{{--                        <div class="modal-body">--}}
{{--                            <table class="table table-borderless">--}}
{{--                                <tr><th colspan="2" class="py-1">MD. ARIF HOSSAIN</th></tr>--}}
{{--                                <tr>--}}
{{--                                    <td class="py-1">Code - 124738938</td>--}}
{{--                                    <td class="py-1">New Business - 22390</td>--}}
{{--                                </tr>--}}
{{--                                <tr>--}}
{{--                                    <td class="py-1">Policy Qty. 12</td>--}}
{{--                                    <td class="py-1">Deferred - 78452</td>--}}
{{--                                </tr>--}}
{{--                                <tr>--}}
{{--                                    <td class="py-1">Persistency 60</td>--}}
{{--                                    <td class="py-1">Renewal - 78452</td>--}}
{{--                                </tr>--}}
{{--                            </table>--}}
{{--                        </div>--}}
{{--                        <div class="modal-footer">--}}
{{--                            <button type="button" class="btn btn-info">Deferred Details</button>--}}
{{--                            <button type="button" class="btn btn-primary">Renewal Details</button>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </section>
@endsection

{{--@push('after-styles')--}}
{{--    <style>--}}
{{--        #premiumCollectionModal .modal-header .close {--}}
{{--            margin-top: -22px;--}}
{{--        }--}}
{{--    </style>--}}
{{--@endpush--}}

@push ("after-scripts")
    <script src="https://cdn.jsdelivr.net/npm/sharer.js@latest/sharer.min.js"></script>
    <script>
        var apiUrl = "{{ config('alpha.api_url') }}";
        jQuery(document).ready(function () {
            $('#reportFilterForm').submit(async function (e) {
                e.preventDefault();
                $('#reportDetails').html('<div class="loader mb-30" id="loader"></div>');
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
                if (response.data.report && response.data.report.length <= 0) {
                    result = '<p>No data found</p>';
                } else {
                    response.data.report.forEach(function (item, index) {
                        let sl = index + 1;
                        if(reportType == 'premium_collection') {
                        result = result + '<div class="col-md-4 mb-30"><p class="no-bottom-margin fb">'+ sl + ') ' + item.EName + '</p><p class="no-bottom-margin">Code - ' + item.Code + '</p><p class="no-bottom-margin ">Deferred Premium - ' + item.DeffPre + '</p><p class="no-bottom-margin">FYPre - ' + item.FYPre + '</p><p class="no-bottom-margin">Month - ' + item.Month + '</p><p class="no-bottom-margin">New Premium - ' + item.NewPre + '</p><p class="no-bottom-margin">Persistency - ' + item.Persistency + '</p><p class="no-bottom-margin">Policy Qty - ' + item.PolicyQty + '</p><p class="no-bottom-margin">Renewal Premium - ' + item.RenPre + '</p><p class="no-bottom-margin">Supervisor - ' + item.Supervisor + '</p><p class="no-bottom-margin">Total Premium - ' + item.TotPrePre + '</p></div>';
                        } else {
                            let defRenPre = reportType == 'deferred' ? 'Deferred Premium - ' + item.Deffered_Pre: 'Renewal Premium - ' +item.Renewal_Pre;
                            result = result + '<div class="col-md-4 mb-30"><p class="no-bottom-margin fb">' + sl + ') ' + item.PHName + '</p><p class="no-bottom-margin">Policy No - ' + item.PolicyNo + '</p><p class="no-bottom-margin ">Mobile - ' + item.Mobile + '</p><p class="no-bottom-margin">MOP - ' + item.MOP + '</p><p class="no-bottom-margin">Isntallment No - ' + item.Isntallment_No + '</p><p class="no-bottom-margin">' + defRenPre + '</p><p class="no-bottom-margin">Paid Installment - ' + item.PaidInstallment + '</p><p class="no-bottom-margin">Paid Amount - ' + item.PaidAmt + '</p><p class="no-bottom-margin">ComDt - ' + item.ComDt + '</p><p class="no-bottom-margin">NDD - ' + item.NDD + '</p></div>';
                        }
                    });
                }

                $('#reportDetails').html(result);
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
                    console.log('res: ', data)
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
                    console.log('res: ', designations)
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

