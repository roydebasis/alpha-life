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
                    {!! $content->content !!}
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
                    </div>

                    {{ html()->form()->close() }}

                </div>
            </div>
        </div>
    </section>
    <!-- page-title-section end -->

@endsection
