@extends('frontend.layouts.app')
@php
    $subDesig = \Illuminate\Support\Facades\Session::get('subDesig');
    $subDesig = !empty($subDesig) ? json_decode($subDesig) : '';
    $title = 'Premium Collection';
@endphp

@section('title') {{ $title }} @endsection

@section('content')
    <x-page-header pageTitle="{{ $title }}"/>
    <section class="service-section-v3">
        <div class="container">
            <div class="card bg-white border-light shadow-soft flex-md-row no-gutters" style="margin-top: 80px;">
                <div class="card-body p-0 premium-calculator">
                    <h4 class="card-title mb-3">
                        <i class="fas fa-coins"></i> Premium Collection
                    </h4>
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label for="designation">Designation</label>
                            <select class="form-control" id="designation">
                                <option selected disabled>Select Designation</option>
                                @if(!empty($subDesig))
                                    @foreach($subDesig as $desig)
                                        <option value="{{$desig->key}}">{{$desig->name}}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="mode">Mode</label>
                            <select class="form-control" id="mode">
                                <option selected disabled>Select Mode</option>
                                <option>Daily</option>
                                <option>Weekly</option>
                                <option>Quarterly</option>
                                <option>Monthly</option>
                                <option>Half Yearly</option>
                                <option>Yearly</option>
                            </select>
                        </div>

                        <div class="form-group col-md-4">
                            <label for="type">Type</label>
                            <select class="form-control" id="type">
                                <option value="summery" selected>Summery</option>
                            </select>
                        </div>

                        <div class="form-group col-md-4">
                            <label for="startDate">Start Date</label>
                            <input type="date" class="form-control" id="startDate">
                        </div>

                        <div class="form-group col-md-4">
                            <label for="endDate">End Date</label>
                            <input type="date" class="form-control" id="endDate">
                        </div>

                        <div class="form-group col-md-12 text-center">
                            <button class="btn btn-primary" data-toggle="modal" data-target="#premiumCollectionModal" type="button">Apply</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mb-30">
                <div class="col-md-4">
                    <h4 class="header-with-bg">New Business Name</h4>
                    <p class="no-bottom-margin fb">MD. SHOHAG MIYA</p>
                    <p class="no-bottom-margin">Policy No - 4748937373</p>
                    <p class="no-bottom-margin ">Mobile - 093838383838</p>
                    <p class="no-bottom-margin">MOP - MOnthly</p>
                    <p class="no-bottom-margin">Installation No - 78</p>
                    <p class="no-bottom-margin">Deferred Premium - 7883393</p>
                    <p class="no-bottom-margin">Paid Amount - 7883393</p>
                    <p class="no-bottom-margin">Paid Amount - 7883393</p>
                </div>
                <div class="col-md-4">
                    <h4 class="header-with-bg">Deferred Details</h4>
                    <p class="no-bottom-margin fb">MD. SHOHAG MIYA</p>
                    <p class="no-bottom-margin">Policy No - 4748937373</p>
                    <p class="no-bottom-margin ">Mobile - 093838383838</p>
                    <p class="no-bottom-margin">MOP - MOnthly</p>
                    <p class="no-bottom-margin">Installation No - 78</p>
                    <p class="no-bottom-margin">Deferred Premium - 7883393</p>
                    <p class="no-bottom-margin">Paid Amount - 7883393</p>
                    <p class="no-bottom-margin">Paid Amount - 7883393</p>
                </div>
                <div class="col-md-4">
                    <h4 class="header-with-bg">Renewal Details</h4>
                    <p class="no-bottom-margin fb">MD. SHOHAG MIYA</p>
                    <p class="no-bottom-margin">Policy No - 4748937373</p>
                    <p class="no-bottom-margin ">Mobile - 093838383838</p>
                    <p class="no-bottom-margin">MOP - MOnthly</p>
                    <p class="no-bottom-margin">Installation No - 78</p>
                    <p class="no-bottom-margin">Deferred Premium - 7883393</p>
                    <p class="no-bottom-margin">Paid Amount - 7883393</p>
                    <p class="no-bottom-margin">Paid Amount - 7883393</p>
                </div>
            </div>

            <div class="col-md-12 mb-80"><a href="{{ url()->previous() }}"><i class="fa fa-chevron-circle-left"></i> Back</a> </div>
            <!-- Modal -->
            <div class="modal fade" id="premiumCollectionModal" tabindex="-1" role="dialog" aria-labelledby="premiumCollectionModal" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Premium Collection</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <table class="table table-borderless">
                                <tr><th colspan="2" class="py-1">MD. ARIF HOSSAIN</th></tr>
                                <tr>
                                    <td class="py-1">Code - 124738938</td>
                                    <td class="py-1">New Business - 22390</td>
                                </tr>
                                <tr>
                                    <td class="py-1">Policy Qty. 12</td>
                                    <td class="py-1">Deferred - 78452</td>
                                </tr>
                                <tr>
                                    <td class="py-1">Persistency 60</td>
                                    <td class="py-1">Renewal - 78452</td>
                                </tr>
                            </table>
                        </div>
                        <div class="modal-footer">
        {{--                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>--}}
                            <button type="button" class="btn btn-info">Deferred Details</button>
                            <button type="button" class="btn btn-primary">Renewal Details</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('after-styles')
    <style>
        #premiumCollectionModal .modal-header .close {
            margin-top: -22px;
        }
    </style>
@endpush
@push ("after-scripts")
<script src="https://cdn.jsdelivr.net/npm/sharer.js@latest/sharer.min.js"></script>
@endpush

