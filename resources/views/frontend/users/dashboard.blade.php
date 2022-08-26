@extends('frontend.layouts.app')

@section('title')
    @lang("My Account")
@endsection

@section('content')
    <x-page-header pageTitle="My Account"/>
    <div class="container">
        <div class="card" style="margin-top: 100px;">
            @if (\Session::has('msg'))
                <div class="alert alert-success">{!! \Session::get('msg') !!}</div>
            @endif
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-6">
                        <h4 class="card-title mb-0">Welcome {{ auth()->user()->name }}</h4>
                    </div>
                    <div class="col-sm-6 text-right">
                        <div class="small text-muted">{{ date_today() }}</div>
                    </div>
                </div>
                <hr>
            </div>
        </div>
        <!-- / card -->
        @if(auth()->user()->employee_code)
            <div class="row" style="margin-bottom: 20px;">
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
                    <a class="text-decoration-none" href="javascript:;" data-toggle="modal" data-target="#changePasswordModel">
                        <div class="card bg-info">
                            <div class="card-body">
                                <div class="text-value-lg text-center text-white user-dashboard-button">Change Password</div>
                            </div>
                        </div>
                    </a>
                    <!-- Modal -->
                    <div class="modal fade modalBg" data-backdrop="false" id="changePasswordModel" tabindex="-1" role="dialog" aria-labelledby="performanceModalLabel" aria-hidden="true">
                        <form id="changePassword" action="/account/change-password" method="post">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="exampleModalLabel">Change Password</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        @method('POST')
                                        @csrf
                                        <div class="form-group">
                                            <label for="password">Enter New Password</label>
                                            <input type="password" class="form-control" id="password" name="password" value="" placeholder="Enter New Password" minlength="6" required>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-sm action-sm btn-secondary" data-dismiss="modal" style="margin-bottom: 0">Close</button>
                                        <button type="submit" class="btn btn-sm action-sm btn-primary" style="margin-bottom: 0">Change Password</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <a class="text-decoration-none" href="javascript:;" onclick="resetPass()">
                        <div class="card bg-info">
                            <div class="card-body">
                                <div class="text-value-lg text-center text-white user-dashboard-button">Reset User</div>
                                <form id="resetPass" action="/account/reset" class="hide" method="post">
                                    @method('POST')
                                    @csrf
                                </form>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <h4>Performance</h4>
            <div class="row" style="margin-bottom: 100px;">
                <div class="col-sm-6 col-lg-3">
                    <div class="card bg-info">
                        <a class="text-decoration-none" href="account/premium-collection">
                            <div class="card-body">
                                <div class="text-value-lg text-center text-white user-dashboard-button">Premium Collection</div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card bg-info">
                        <a class="text-decoration-none" href="account/rankings">
                            <div class="card-body">
                                <div class="text-value-lg text-center text-white user-dashboard-button">Ranking</div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card bg-info">
                        <a class="text-decoration-none" href="account/earnings">
                            <div class="card-body">
                                <div class="text-value-lg text-center text-white user-dashboard-button">Earning</div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card bg-info">
                        <a class="text-decoration-none" href="account/persistency">
                            <div class="card-body">
                                <div class="text-value-lg text-center text-white user-dashboard-button">Persistency</div>
                            </div>
                        </a>
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
        #changePasswordModel .modal-header .close {
            margin-top: -22px;
        }
        .modalBg{
            background-color: #0000009e;
        }
    </style>
@endpush
@push('after-scripts')
    <script>
        function resetPass() {
            $('#resetPass').submit();
        }
    </script>
@endpush
