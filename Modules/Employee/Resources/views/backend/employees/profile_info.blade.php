@extends('backend.layouts.app')

@section('title')
    {{ 'Profile Info' }}
@endsection

@section('breadcrumbs')
    <x-backend-breadcrumbs>
        <x-backend-breadcrumb-item type="active" icon='{{ $module_icon }}'>Profile Info
        </x-backend-breadcrumb-item>
    </x-backend-breadcrumbs>
@endsection

@section('content')
    <div class="card profile-info">
        <div class="card-body">
            <div class="row border">
                <div class="col-3 text-center p-3">
                    <img class="w-100 h-100" src="https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885__480.jpg" />
                </div>
                <div class="col-9 text-center">
                    <div class="row border-left border-bottom" style="height: 100px;">
                        <div class="col-4 border-right p-2">
                            <h4>Name</h4>
                            <p></p>
                        </div>
                        <div class="col-4 border-right p-2">
                            <h4>Father Name</h4>
                            <p></p>
                        </div>
                        <div class="col-4 border-right p-2">
                            <h4>DOB</h4>
                            <p></p>
                        </div>
                    </div>
                    <div class="row border-left border-bottom" style="height: 100px;">
                        <div class="col-4 border-right p-2">
                            <h4>Designation</h4>
                            <p></p>
                        </div>
                        <div class="col-4 border-right p-2">
                            <h4>Mother Name</h4>
                            <p></p>
                        </div>
                        <div class="col-4 p-2">
                            <h4>Contact No</h4>
                            <p></p>
                        </div>
                    </div>
                    <div class="row border-left p-2" style="height: 116px;">
                        <div class="col-12">
                            <h4>Address</h4>
                            <p></p>
                        </div>
                    </div>
                </div>

            </div>
            <!--/.row-->

            <div class="row border-left border-bottom text-center" style="height: 100px;">
                <div class="col-3 border-right p-2">
                    <h4>Bank Name</h4>
                    <p></p>
                </div>
                <div class="col-3 border-right p-2">
                    <h4>Bank Branch</h4>
                    <p></p>
                </div>
                <div class="col-3 border-right p-2">
                    <h4>Account</h4>
                    <p></p>
                </div>
                <div class="col-3 border-right p-2">
                    <h4>Joining Date</h4>
                    <p></p>
                </div>
            </div>
            <div class="row border-left border-bottom text-center" style="height: 100px;">
                <div class="col-3 border-right p-2">
                    <h4>Work Branch</h4>
                    <p></p>
                </div>
                <div class="col-3 border-right p-2">

                </div>
                <div class="col-3 border-right p-2">
                    <h4>Service Period</h4>
                    <p></p>
                </div>
                <div class="col-3 border-right p-2">

                </div>
            </div>
        </div>

    </div>
@endsection
