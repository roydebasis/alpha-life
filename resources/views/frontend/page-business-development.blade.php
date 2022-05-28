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

                    <div
                        style="border-bottom-right-radius: 50px; border-top-left-radius: 50px; overflow: hidden; background-color: white; border-left: 1px solid #2a2a86; border-right: 1px solid #2a2a86; border-bottom: 1px solid #2a2a86;">
                        @if ($content->featured_image)
                            <div style="border-top-left-radius: 50px; overflow: hidden;">
                                <img style="display: block; max-width: 100%; height: auto;"
                                    src="{{ url($content->featured_image) }}">
                            </div>
                        @endif
                        @if(!empty($content->content))
                            <div class="service-box">
                                {!! $content->content !!}
                            </div>
                        @endif
                        <div class="table-responsive">
                            <table class="table table-bordered notice-table">
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
                                <tbody>
                                    @foreach ($employees as $index => $employee)
                                        <tr>
                                            <td class="justify-content-center align-self-center align-content-center">{{ $index + 1 }}</td>
                                            <td>
                                                @if($employee['image'])
                                                    <img src="data:image/png;base64,{{ $employee['image'] }}" class="profile-pic img-fluid" />
                                                @else
                                                    ...
                                                @endif
                                            </td>
                                            <td>{{ $employee['name'] }}</td>
                                            <td>{{ $employee['designation'] }}</td>
                                            <td>{{ $employee['work_area'] }}</td>
                                            <td>{{ $employee['code'] }}</td>
                                            <td>{{ $employee['contact'] }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('after-styles')
    <style>
        .profile-pic{
            height: 60px;
            object-fit: cover;
        }
        .notice-table td {
            vertical-align: middle !important;
        }
    </style>
@endpush
