@extends('frontend.layouts.app')

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
        $address = $profile->address ? $profile->address : '---';
        $contact = $profile->contact;
        $bank_name= $profile->bank_name;
        $bank_branch = $profile->bank_branch;
        $account = $profile->account;
        $joining_date = $profile->joining_date;
        $work_branch = $profile->work_branch ? $profile->work_branch  : '---' ;
        $service_period = $profile->service_period;
    }
@endphp

@section('title') {{ $title }} @endsection

@section('content')
    <x-page-header pageTitle="{{ $title }}"/>
    <section class="history-section">
        <div class="container">
            <div class="row " style="padding-top: 20px; padding-bottom: 20px;">
                <div class="col-md-12 service-box-container">
                   <div class="table-responsive">
                       <table class="table table-bordered table-profile-info">
                           <tr>
                               <td rowspan="5" width="20%">@if($image) <img  class='emp-profile' src="data:image/png;base64,{{ $image }}"> @else --- @endif</td>
                               <td>
                                   <p class="bottomZero">Name</p>
                                   <span class="text-muted">{{$name}}</span>
                               </td>
                               <td>
                                   <p class="bottomZero">Designation</p>
                                   <span class="text-muted">{{$designation}}</span>
                               </td>
                               <td>
                                   <p class="bottomZero">Employee code</p>
                                   <span class="text-muted">{{$code}}</span>
                               </td>
                           </tr>

                           <tr>
                               <td>
                                   <p class="bottomZero">Father</p>
                                   <span class="text-muted">{{$father}}</span>
                               </td>
                               <td>
                                   <p class="bottomZero">Mother</p>
                                   <span class="text-muted">{{$mother}}</span>
                               </td>
                               <td>
                                   <p class="bottomZero">Contact</p>
                                   <span class="text-muted">{{$contact}}</span>
                               </td>
                           </tr>
                           <tr>
                               <td colspan="3">
                                   <p class="bottomZero">Address</p>
                                   <span class="text-muted">{{$address}}</span>
                               </td>
                           </tr>
                           <tr>
                               <td >
                                   <p class="bottomZero">Bank Name</p>
                                   <span class="text-muted">{{$bank_name}}</span>
                               </td>
                               <td>
                                   <p class="bottomZero">Bank Branch</p>
                                   <span class="text-muted">{{$bank_branch}}</span>
                               </td>
                               <td>
                                   <p class="bottomZero">A/C No.</p>
                                   <span class="text-muted">{{$account}}</span>
                               </td>
                           </tr>
                           <tr>
                               <td >
                                   <p class="bottomZero">Joining Date</p>
                                   <span class="text-muted">{{Carbon\Carbon::parse($joining_date)->format('d F Y')}}</span>
                               </td>
                               <td>
                                   <p class="bottomZero">Work Branch</p>
                                   <span class="text-muted">{{$work_branch}}</span>
                               </td>
                               <td>
                                   <p class="bottomZero">Service Period</p>
                                   <span class="text-muted">{{$service_period}}</span>
                               </td>
                           </tr>
                       </table>
                   </div>
                </div>
                <div class="col-md-12 mb-80"><a href="{{ url()->previous() }}"><i class="fa fa-chevron-circle-left"></i> Back</a> </div>
            </div>
        </div>
    </section>
@endsection
