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
    $detailsType = request()->get('details_type');
    $title = ucfirst($detailsType .  ' Details');
    $subDesig = \Illuminate\Support\Facades\Session::get('subDesig');
    $subDesig = !empty($subDesig) ? json_decode($subDesig) : '';
    $empProfile = getEmpProfile();
@endphp

@section('title') {{ $title }} @endsection

@section('content')
    <x-page-header pageTitle="{{ $title }}"/>
    <section class="service-section-v3">
        <div class="container">
            <div class="row mb-30 mt-30">
                <div class="col-md-12">
                    <div><a href="{{ url()->previous() }}" class="btn btn-sm btn-primary action-sm"><i class="fa fa-chevron-circle-left"></i> Back</a> </div>
                    <input type="hidden" id="employeeCode" value="{{$employeeCode}}">
                    <div class="hide" id="loader"><div class="loader"></div></div>
                    <div class="table-responsive" style="margin-bottom: 10px">
                        <table class="table table-bordered hide" id="reportDetails">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Name</th>
                                    <th>Policy No</th>
                                    <th>MOP</th>
                                    <th>Installment No</th>
                                    <th>{{ucfirst($detailsType)}} Premium</th>
                                    <th>Paid Installment</th>
                                    <th>Paid Amount</th>
                                    <th>ComDt</th>
                                    <th>NDD</th>
                                </tr>
                            </thead>
                            <tbody></tbody>
                        </table>
                    </div>
                    <div class="mb-80"><a href="{{ url()->previous() }}" class="btn btn-sm btn-primary action-sm"><i class="fa fa-chevron-circle-left"></i> Back</a></div>
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
        jQuery(document).ready(function () {
            let params = getSearchParams();
            $('#loader').removeClass('hide');
            let data = {
                employee_id: $('#employeeCode').val(),
                selected_designation_key: params.selected_designation_key,
                start_date: params.start_date,
                mode: params.mode.replace(/(^\w{1})|(\s+\w{1})/g, letter => letter.toUpperCase()),
                details_type: params.details_type
            }
            getReport(data);
        });

        /**
         * get report data.
         * @param data
         */
        function getReport(params) {
            // let url = reportType == 'premium_collection' ? 'premium-collection-report' : 'premium-collection-details';
            return $.ajax({
                url: apiUrl + "public/premium-collection-details",
                method: 'POST',
                dataType: 'JSON',
                data: params
            }).done(function (data) {
                if (data.status == 200) {
                    let report = data.data.report;
                    let result = '';
                    if ($.fn.dataTable.isDataTable('#reportDetails') ) {
                        $('#reportDetails').DataTable().clear().destroy();
                    }
                    $('#reportDetails tbody').empty();
                    if (report.length <= 0) {
                        $('#loader').addClass('hide');
                        $('#reportDetails').removeClass('hide');
                        $('#reportDetails tbody').html('<tr><td colspan="10">No Data Found</td></tr>')
                        return;
                    }
                    report.forEach(function (item, index) {
                        let RenAmt = (params.details_type == 'deferred' ? item.Deffered_Pre: item.Renewal_Pre);
                        let sl = index + 1;
                        result += '<tr>';
                        result += '<td>' + sl + '</td>';
                        result += '<td>' + item.PHName + '<span class="d-block"> ' +item.Mobile + '</span></td>';
                        result += '<td>' + item.PolicyNo + '</td>';
                        result += '<td>' + item.MOP + '</td>';
                        result += '<td>' + item.Isntallment_No + '</td>';
                        result += '<td>' + parseFloat(RenAmt).toFixed(2) + '</td>';
                        result += '<td>' + item.PaidInstallment + '</td>';
                        result += '<td>' + parseFloat(item.PaidAmt).toFixed(2) + '</td>';
                        result += '<td>' + item.ComDt + '</td>';
                        result += '<td>' + item.NDD + '</td>';
                        result += '</tr>';
                    });
                    if ($.fn.dataTable.isDataTable('#reportDetails') ) {
                        $('#reportDetails').DataTable().clear().destroy();
                    }
                    $('#reportDetails tbody').html(result);
                    $('#reportDetails').removeClass('hide');
                    $('#reportDetails').DataTable(datatableConfig);
                    $('#loader').addClass('hide');
                }
                return [];
            }).fail(function () {
                alert('error')
            });
        }

        /**
         * get all url params
         * @param k
         * @returns {*}
         */
        function getSearchParams(k){
            var p={};
            location.search.replace(/[?&]+([^=&]+)=([^&]*)/gi,function(s,k,v){p[k]=v})
            return k?p[k]:p;
        }
    </script>
@endpush
