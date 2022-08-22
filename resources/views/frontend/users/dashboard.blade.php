@extends('frontend.layouts.app')

@section('title')
    @lang("My Account")
@endsection

@section('content')
    <x-page-header pageTitle="My Account"/>
    <div class="container">
        <div class="card" style="margin-top: 100px;">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-8">
                        <h4 class="card-title mb-0">Welcome {{ auth()->user()->name }}</h4>
                        <div class="small text-muted">{{ date_today() }}</div>
                    </div>
                </div>
                <hr>
            </div>
        </div>
        <!-- / card -->
        @if(auth()->user()->employee_code)
        <div class="row" style="margin-bottom: 100px;">
            <div class="col-sm-6 col-lg-3">
                <a class="text-decoration-none" href="/account/profile-info">
                    <div class="card bg-info">
                        <div class="card-body">
                            <div class="text-value-lg text-center text-white user-dashboard-button">Profile Info</div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="card bg-info">
                    <a class="text-decoration-none" href="javascript:;" data-toggle="modal" data-target="#performanceModal">
                        <div class="card-body">
                            <div class="text-value-lg text-center text-white user-dashboard-button">Performance</div>
                        </div>
                    </a>
                    <!-- Modal -->
                    <div class="modal fade" id="performanceModal" tabindex="-1" role="dialog" aria-labelledby="performanceModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="exampleModalLabel">Performance</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p style="margin-bottom: 0"><a class="text-decoration-none" href="account/premium-collection">Premium Collection</a></p>
                                    <p style="margin-bottom: 0"><a class="text-decoration-none" href="account/rankings">Ranking</a></p>
                                     <p style="margin-bottom: 0"><a class="text-decoration-none" href="account/earnings">Earning</a></p>
                                     <p class="mb-0"><a class="text-decoration-none" href="account/persistency">Persistency</a></p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    {{--                                        <button type="button" class="btn btn-primary">Save changes</button>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>


{{--        <div class="col-sm-6 col-lg-3">--}}
{{--            <a style="text-decoration: none;" href="javascript:;">--}}
{{--                <div class="card bg-info">--}}
{{--                    <div class="card-body">--}}
{{--                        <div class="text-value-lg text-center text-white">Allowance</div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </a>--}}
{{--        </div>--}}

{{--        <div class="col-sm-6 col-lg-3">--}}
{{--            <a style="text-decoration: none;" href="javascript:;">--}}
{{--                <div class="card bg-info">--}}
{{--                    <div class="card-body">--}}
{{--                        <div class="text-value-lg text-center text-white">Top Performer</div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </a>--}}
{{--        </div>--}}

{{--    </div>--}}
{{--    <div class="row">--}}
{{--        <div class="col-sm-6 col-lg-3">--}}
{{--            <a style="text-decoration: none;" href="javascript:;">--}}
{{--                <div class="card bg-info">--}}
{{--                    <div class="card-body">--}}
{{--                        <div class="text-value-lg text-center text-white">Policy Info</div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </a>--}}
{{--        </div>--}}
{{--        <div class="col-sm-6 col-lg-3">--}}
{{--            <a style="text-decoration: none;" href="javascript:;">--}}
{{--                <div class="card bg-info">--}}
{{--                    <div class="card-body">--}}
{{--                        <div class="text-value-lg text-center text-white">Policy List</div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </a>--}}
{{--        </div>--}}
{{--        <div class="col-sm-6 col-lg-3">--}}
{{--            <a style="text-decoration: none;" href="javascript:;">--}}
{{--                <div class="card bg-info">--}}
{{--                    <div class="card-body">--}}
{{--                        <div class="text-value-lg text-center text-white">Premium Due List</div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </a>--}}
{{--        </div>--}}
{{--        <div class="col-sm-6 col-lg-3">--}}
{{--            <a style="text-decoration: none;" href="#">--}}
{{--                <div class="card bg-info">--}}
{{--                    <div class="card-body">--}}
{{--                        <div class="text-value-lg text-center text-white">Pending Policy List</div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </a>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    @else--}}
{{--        <div class="row">--}}
{{--            <div class="col-sm-6 col-lg-3">--}}
{{--                <a style="text-decoration: none;" href="javascript:;">--}}
{{--                    <div class="card bg-info">--}}
{{--                        <div class="card-body">--}}
{{--                            <div class="text-value-lg text-center text-white">Profile Info</div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </a>--}}
{{--            </div>--}}
{{--            <div class="col-sm-6 col-lg-3">--}}
{{--                <a style="text-decoration: none;" href="#">--}}
{{--                    <div class="card bg-info">--}}
{{--                        <div class="card-body">--}}
{{--                            <div class="text-value-lg text-center text-white">Policy Info</div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </a>--}}
{{--            </div>--}}
{{--            <div class="col-sm-6 col-lg-3">--}}
{{--                <a style="text-decoration: none;" href="javascript:;">--}}
{{--                    <div class="card bg-info">--}}
{{--                        <div class="card-body">--}}
{{--                            <div class="text-value-lg text-center text-white">Policy Ledger</div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </a>--}}
{{--            </div>--}}

{{--            <div class="col-sm-6 col-lg-3">--}}
{{--                <a style="text-decoration: none;" href="javascript:;">--}}
{{--                    <div class="card bg-info">--}}
{{--                        <div class="card-body">--}}
{{--                            <div class="text-value-lg text-center text-white">Nominee Info</div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </a>--}}
{{--            </div>--}}

{{--        </div>--}}
{{--        <div class="row">--}}
{{--            <div class="col-sm-6 col-lg-3">--}}
{{--                <a style="text-decoration: none;" href="javascript:;">--}}
{{--                    <div class="card bg-info">--}}
{{--                        <div class="card-body">--}}
{{--                            <div class="text-value-lg text-center text-white">Benefit</div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </a>--}}
{{--            </div>--}}
{{--            <div class="col-sm-6 col-lg-3">--}}
{{--                <a style="text-decoration: none;" href="javascript:;">--}}
{{--                    <div class="card bg-info">--}}
{{--                        <div class="card-body">--}}
{{--                            <div class="text-value-lg text-center text-white">Maturity Details</div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </a>--}}
{{--            </div>--}}
{{--            <div class="col-sm-6 col-lg-3">--}}
{{--                <a style="text-decoration: none;" href="javascript:;">--}}
{{--                    <div class="card bg-info">--}}
{{--                        <div class="card-body">--}}
{{--                            <div class="text-value-lg text-center text-white">Payment History</div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </a>--}}
{{--            </div>--}}
{{--            <div class="col-sm-6 col-lg-3">--}}
{{--                <a style="text-decoration: none;" href="javascript:;">--}}
{{--                    <div class="card bg-info">--}}
{{--                        <div class="card-body">--}}
{{--                            <div class="text-value-lg text-center text-white">My Application</div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </a>--}}
{{--            </div>--}}
        </div>
    @else
        <div class="row" style="margin-bottom: 100px;">
            <div class="col-sm-6 col-lg-3">
                Under construction
            </div>
        </div>
   @endif
@endsection

@push('after-styles')
    <style>
        .user-dashboard-button{
            padding: 10px 5px;
        }
        #performanceModal .modal-header .close {
            margin-top: -22px;
        }
    </style>
@endpush
