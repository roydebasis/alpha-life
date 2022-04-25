@extends('frontend.layouts.app')

@section('title') Sign In @endsection

@section('content')
    <x-page-header pageTitle="Sign In"/>
    <section class="service-section-v3 sign-up">
        <div class="container">
            <div class="row" style="padding-top: 20px; padding-bottom: 80px;">
                <div class="col-md-12 ">
                    <div class="container-border">
                        <div style="border-top-left-radius: 50px; overflow: hidden;">
                            <img style="display: block; max-width: 100%; height: auto;" src="{{ url('/assets/images/login-banner.jpeg') }}">
                        </div>
                        <div class="col-md-12 mt-30">
                            {{ html()->form('POST', url('/register'))->class('form')->open() }}

                            {{ html()->hidden('sign_up_as', $sign_in_as) }}
                            <div class="row">
                                @if($sign_in_as == 'employee')
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <?php
                                            $field_name = 'employee_code';
                                            $field_lable = "Employee Code";
                                            $field_placeholder = $field_lable;
                                            $required = "required";
                                            ?>
                                            {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
                                            {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"]) }}
                                            @error('employee_code')
                                            <div class="error">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                @else
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <?php
                                            $field_name = 'policy_nbumber';
                                            $field_lable = "Policy Number";
                                            $field_placeholder = $field_lable;
                                            $required = "required";
                                            ?>
                                            {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
                                            {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"]) }}
                                            @error('policy_nbumber')
                                            <div class="error">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                @endif
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <?php
                                        $field_name = 'password';
                                        $field_lable = "Password";
                                        $field_placeholder = "Enter Password";
                                        $required = "required";
                                        ?>
                                        {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
                                        {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"]) }}
                                    </div>
                                </div>
                            </div>
{{--                            <div class="row">--}}
{{--                                <div class="col-md-12">--}}
{{--                                    <a href="javascript:;" class="text-gray">--}}
{{--                                        <small>Forgot Your Password?</small>--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group text-center">
                                        {{ html()->button($text = "Sign In", $type = 'submit')->class('btn btn-success') }}
                                    </div>
                                </div>
                            </div>
                            {{ html()->form()->close() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('after-styles')
    <style>
        .container-border {
            border-bottom-right-radius: 50px;
            border-top-left-radius: 50px;
            overflow: hidden;
            background-color: white;
            border-left: 1px solid #2a2a86;
            border-right: 1px solid #2a2a86;
            border-bottom: 1px solid #2a2a86;
        }
        .sign-up .form-control{
            height: 40px;
            padding: 6px 12px;
            font-size: 16px;
        }
        .error { color: #F00; }
    </style>
@endpush
