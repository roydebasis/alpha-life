@extends('frontend.users.app')
@php
    $profile = \Illuminate\Support\Facades\Session::get('profileData');
    $profile = !empty($profile) ? json_decode($profile) : '';
    $title = 'Profile';
    $name = '';
    $father = '';
    $mother = '';
    $dob = '';
    $designation = '';
    $image = '';
    $code = '';
    $address = '';
    $contact = '';
    $bank_name= '';
    $bank_branch = '';
    $account = '';
    $joining_date = '';
    $work_branch = '';
    $service_period = '';

    if ($profile) {
        $title = $profile->name . "'s Profile";
        $name = $profile->name;
        $father = $profile->father;
        $mother = $profile->mother;
        $dob = $profile->dob;
        $designation = $profile->designation;
        $image = $profile->image;
        $code = $profile->code;
        $address = $profile->address;
        $contact = $profile->contact;
        $bank_name= $profile->bank_name;
        $bank_branch = $profile->bank_branch;
        $account = $profile->account;
        $joining_date = $profile->joining_date;
        $work_branch = $profile->work_branch;
        $service_period = $profile->service_period;
    }
@endphp
@section('title') {{ $title }} @endsection

@section('content')

<section class="section-header  text-white pb-7 pb-lg-11">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <h5 class="py-3 bg-primary"> {{ $title }}</h5>
                @include('frontend.includes.messages')
            </div>
        </div>
    </div>
    <div class="pattern bottom"></div>
</section>

<section class="section section-lg line-bottom-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mb-5">
                <div class="card bg-white border-light shadow-soft flex-md-row no-gutters p-4">
                    @if($image)
                    <div class="col-md-6 col-lg-4 mb-4">
                        <img class="img-fluid img-thumbnail" src="data:image/png;base64,{{ $image }}" alt="{{ $name }}">
                    </div>
                    @endif
                    <div class="col-md-6 col-lg-8">
                        <div class="card-body d-flex flex-column justify-content-between pt">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <tbody>
                                    <tr>
                                        <th>Name</th>
                                        <td>{{ $name }}</td>
                                    </tr>
                                    <tr>
                                        <th>Designation</th>
                                        <td>{{ $designation }}</td>
                                    </tr>
                                    <tr>
                                        <th>Code</th>
                                        <td>{{ $code }}</td>
                                    </tr>
                                    <tr>
                                        <th>DOB</th>
                                        <td>{{ $dob }}</td>
                                    </tr>
                                    <tr>
                                        <th>Contact</th>
                                        <td>{{ $contact }}</td>
                                    </tr>
                                    <tr>
                                        <th>Address</th>
                                        <td>{{ $address }}</td>
                                    </tr>
                                    <tr>
                                        <th>Joining Date</th>
                                        <td>{{ $joining_date }}</td>
                                    </tr>
                                    <tr>
                                        <th>Work Branch</th>
                                        <td>{{ $work_branch }}</td>
                                    </tr>
                                    <tr>
                                        <th>Service Period</th>
                                        <td>{{ $service_period }}</td>
                                    </tr>
                                    <tr>
                                        <th>Account No</th>
                                        <td>{{ $account }}</td>
                                    </tr>
                                    <tr>
                                        <th>Bank Name</th>
                                        <td>{{ $bank_name }}</td>
                                    </tr>
                                    <tr>
                                        <th>Bank Branch</th>
                                        <td>{{ $bank_branch }}</td>
                                    </tr>
                                    <tr>
                                        <th>Father</th>
                                        <td>{{ $father }}</td>
                                    </tr>
                                    <tr>
                                        <th>Mother</th>
                                        <td>{{ $mother }}</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

@endsection

@push ("after-scripts")
<script src="https://cdn.jsdelivr.net/npm/sharer.js@latest/sharer.min.js"></script>
@endpush

