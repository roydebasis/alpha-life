@extends('frontend.layouts.app')

@section('title')
    {{ $content->name }}
@endsection

@section('content')
    <x-page-header pageTitle="{{ $content->name }}" />
    <section class="service-section-v3">
        <div class="container">
            <div class="row" style="padding-top: 20px; padding-bottom: 20px; margin-bottom: 60px;">
                <div class="col-md-12 service-box-container">
                    <div style="border-bottom-right-radius: 50px; border-top-left-radius: 50px; overflow: hidden; background-color: white; border-left: 1px solid #2a2a86; border-right: 1px solid #2a2a86; border-bottom: 1px solid #2a2a86;">
                        @if ($content->featured_image)
                            <div style="border-top-left-radius: 50px; overflow: hidden;">
                                <img style="display: block; max-width: 100%; height: auto;" src="{{ url($content->featured_image) }}">
                            </div>
                        @endif
                        @if(!empty($content->content))
                            <div class="service-box">
                                {!! $content->content !!}
                            </div>
                        @endif
                        <div class="development-table">
                            <div class="table-responsive">
                            <table class="table table-bordered hide" id="tbl-employees">
                                <thead>
                                    <tr>
                                        <th class="text-center">SL</th>
                                        <th class="text-center">Image</th>
                                        <th class="text-center">Name</th>
                                        <th class="text-center">Designation</th>
                                        <th class="text-center">Work Area</th>
                                        <th class="text-center">Code</th>
                                        <th class="text-center">Mobile</th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                            <div class="loader mb-30" id="loader"></div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('after-styles')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/ju/dt-1.12.1/datatables.min.css"/>
    <style>
        .profile-pic{
            height: 60px;
            object-fit: cover;
        }
        .notice-table td {
            vertical-align: middle !important;
        }
        .development-table {
            margin: 20px;
        }
        .development-table table.dataTable {
            border-collapse: collapse;
        }
        .loader {
            border: 5px solid #f3f3f3;
            border-radius: 50%;
            border-top: 5px solid #3498db;
            width: 50px;
            height: 50px;
            -webkit-animation: spin 2s linear infinite; /* Safari */
            animation: spin 2s linear infinite;
            margin-left: auto;
            margin-right: auto;
        }

        /* Safari */
        @-webkit-keyframes spin {
            0% { -webkit-transform: rotate(0deg); }
            100% { -webkit-transform: rotate(360deg); }
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
    </style>
@endpush
@push('after-scripts')
    <script type="text/javascript" src="https://cdn.datatables.net/v/ju/dt-1.12.1/datatables.min.js"></script>
    <script>
        var apiUrl = "{{ config('alpha.api_url') }}";
        jQuery(document).ready(function () {
            getBusinessDevelopmentEmployees();
        });

        function getBusinessDevelopmentEmployees() {
            $.ajax({
                url: apiUrl + 'public/bd-employees',
                method: 'GET',
                dataType: 'JSON',
            }).done(function(response) {
                if (response.status == 200) {
                    let employees =  response.data.bdEmployees;
                    let data = '';
                    if (employees.length <= 0) {
                        data = '<tr><td colspan="6" class="text-center">No data found</td></tr>';
                    } else {
                        employees.forEach(function (item, index) {
                            let idx = (index + 1);
                            let img = (item.image) ? '<img src="data:image/png;base64,' + item.image + '" class="profile-pic img-fluid" />' : '...';
                            data = data + '<tr><td>' + idx + '</td><td>' + img + '</td><td>' + item.name + '</td><td>' + item.designation + '</td><td>' + item.work_area + '</td><td>' + item.code + '</td><td>' + item.contact + '</td></tr>';
                        });
                    }
                    $('#loader').hide();
                    $('#tbl-employees tbody').append(data);
                    $('#tbl-employees').removeClass('hide');
                    $('#tbl-employees').DataTable({
                        searching: false,
                        ordering: false,
                    });
                }
            }).fail(function(xhr, status, error) {
                $('#loader').hide();
                $('#tbl-employees tbody').append('<tr><td colspan="6" class="text-center">Something went wrong</td></tr>');
                console.log(error)
                alert('Cant process your  request right  now. Please try again later.');
            });
        }
    </script>
@endpush
