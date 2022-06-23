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
    <x-page-header pageTitle="{{ $title }}"/>
    <section class="history-section">
        <div class="container">
            <div class="row " style="padding-top: 20px; padding-bottom: 20px;">
                <div class="col-md-12 service-box-container mb-80">
                   <div class="table-responsive">
                       <table class="table table-bordered">
                           <tr>
                               <td rowspan="2" width="20%">@if($image) <img src="data:image/png;base64,{{ $image }}" style="max-width: 100%"> @else --- @endif</td>
                               <td>
                                   <p>Name</p>
                                   <span class="text-muted">{{$name}}</span>
                               </td>
                               <td>
                                   <p>Designation</p>
                                   <span class="text-muted">{{$designation}}</span>
                               </td>
                               <td>
                                   <p>Employee code</p>
                                   <span class="text-muted">{{$code}}</span>
                               </td>
                           </tr>

                           <tr>
                               <td>
                                   <p>Father</p>
                                   <span class="text-muted">{{$father}}</span>
                               </td>
                               <td>
                                   <p>Mother</p>
                                   <span class="text-muted">{{$mother}}</span>
                               </td>
                               <td>
                                   <p>Contact</p>
                                   <span class="text-muted">{{$contact}}</span>
                               </td>
                           </tr>
                           <tr>
                               <td colspan="3">
                                   <p>Address</p>
                                   <span class="text-muted">{{$address}}</span>
                               </td>
                           </tr>
                           <tr>
                               <td colspan="3">
                                   <p>Bank Name</p>
                                   <span class="text-muted">{{$bank_name}}</span>
                               </td>
                               <td colspan="3">
                                   <p>Bank Branch</p>
                                   <span class="text-muted">{{$bank_branch}}</span>
                               </td>
                               <td colspan="3">
                                   <p>A/C No.</p>
                                   <span class="text-muted">{{$account}}</span>
                               </td>
                           </tr>
                       </table>
                   </div>
                </div>

            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
@endsection
