@extends('frontend.layouts.app')

@section('title') {{ __("Contact-us") }} @endsection

@section('content')
    <!-- page-title-section start -->
    <section class="page-title-section about-us-one" data-stellar-background-ratio="0.1">
        <div class="container">
            <div class="page-header text-center">
                <h1>Contact</h1>
            </div>
        </div>
    </section>
    <!-- page-title-section end -->

    <!-- page-title-section start -->
    @if(\App\Models\Setting::has('google_map_embed_code'))
    <section class="service-section-v3">
        {!! \App\Models\Setting::get('google_map_embed_code') !!}
    </section>
    @endif
    <section class="service-section-v3  section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <h3>Contact Info</h3>
                    <p>
                        A. J. Tower, Level # 8 and 9 <br>
                        Sonargaon Link Road , 4, Kawran BazarDhaka - 1215<br>
                        Tel : 88 02 (55013304, 55013305, 55013306) <br>
                        IP Phone : 09612 400 200
                    <h3>Hotline</h3>
                    01787683517 (Policy Servicing)<br>
                    01787683520 (Group Life) <br>
                    <strong>IP Phone: 09612 400 200</strong> <br>
                    <strong> E-mail :</strong> info@alphalife.com.bd
                    </p>
                    <h3>Business Hours</h3>
                    <p>
                        <span>Sun - Thu: 9am to 6pm</span>

                    </p>
                </div>
                <div class="col-md-7">
                    <h3>Contact Form</h3>
                    {{ html()->form('POST')->class('form')->open() }}

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <?php
                                $field_name = 'name';
                                $field_lable = "Name";
                                $field_placeholder = $field_lable;
                                $required = "required";
                                ?>
                                {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
                                {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control contact-form-input-height')->attributes(["$required"]) }}
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <?php
                                $field_name = 'email';
                                $field_lable = "Email";
                                $field_placeholder = "Email Address";
                                $required = "";
                                ?>
                                {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
                                {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control contact-form-input-height')->attributes(["$required"]) }}
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <?php
                                $field_name = 'subject';
                                $field_lable = "Subject";
                                $field_placeholder = $field_lable;
                                $required = "required";
                                ?>
                                {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
                                {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control contact-form-input-height')->attributes(["$required"]) }}
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <?php
                                $field_name = 'message';
                                $field_lable = "Message";
                                $field_placeholder = "Your Message";
                                $required = "required";
                                ?>
                                {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
                                {{ html()->textarea($field_name)->placeholder($field_placeholder)->class('form-control contact-form-input-height')->attributes(["$required"]) }}
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                {{ html()->button($text = "Send Message", $type = 'submit')->class('btn btn-success') }}
                            </div>
                        </div>
{{--                        <div class="col-6">--}}
{{--                            <div class="float-right">--}}
{{--                                <div class="form-group">--}}
{{--                                    <button type="button" class="btn btn-warning" onclick="history.back(-1)"><i class="fas fa-reply"></i> Cancel</button>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>

                    {{ html()->form()->close() }}

                </div>
            </div>
        </div>
    </section>
    <!-- page-title-section end -->

@endsection
